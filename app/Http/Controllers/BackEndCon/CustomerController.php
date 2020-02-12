<?php

namespace App\Http\Controllers\BackEndCon;

use Anam\Dashboard\Models\Menu;
use App\Customer;
use App\CustomerPassport;
use App\District;
use App\Group;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $customers = Customer::all();
        return view('Admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $groups = Group::select('id', 'group_name')->get();
        $districts = District::orderBy('name')->get();
        $registered_customers = Customer::all();
        return view('Admin.customer.form', compact('districts', 'groups', 'registered_customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), array(
            'given_name' => 'required',
            'sur_name' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ));

        $data = $request->all();
        $data['date_of_birth'] = Carbon::parse($data['date_of_birth'])->format('Y-m-d');
        $data['email'] = strtolower($data['email']);
        if ($request->ajax()) {
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors(), 'success' => false, 'type' => 'error', 'status' => 422], 200);
            }
            if ($request->hasFile('photo')) {
                $upload = $this->uploadFile($request->photo, 'uploads/customers/images');
                if ($upload) {
                    $data['photo'] = $upload;
                } else {
                    return response()->json(['message' => 'Whoops! Failed to upload photo', 'success' => false, 'type' => 'error', 'status' => 422], 200);
                }
            }

            if ($request->has('passport_no')) {
                if ($passport = $this->createPassport($request)) {
                    $data['passport_id'] = $passport;
                }
            }
            $remove_passport_data = array(
                'passport_no', 'passport_type', 'issue_date', 'expiry_date', 'issue_location'
            );
            foreach ($remove_passport_data as $key) {
                unset($data[$key]);
            }
            $customer = Customer::create($data);
            $updated_customer = $customer->update(['serial_no' => $customer->id + 1000, 'tracking_no' => 'SN' . getSixDigitNumber($customer->id)]);
            if ($updated_customer) {
                return response()->json(['data' => $customer, 'message' => 'Customer Created Successfully', 'success' => true, 'type' => 'success', 'status' => 200], 200);
            } else {
                return response()->json(['message' => 'Whoops! Failed to create Customer.', 'success' => false, 'type' => 'error', 'status' => 400], 200);
            }
        } else { // if request is not a AJAX request
            $validator->validate();
            if ($request->hasFile('photo')) {
                $upload = $this->uploadFile($request->photo, 'uploads/customers/images');
                if ($upload) {
                    $data['photo'] = $upload;
                } else {
                    Session::flash('error', 'Whoops! Failed to upload photo');
                    return redirect()->back()->withInput();
                }
            }
            $customer = Customer::create($data);
            if ($customer) {
                Session::flash('success', 'Customer Created Successfully');
                return redirect()->route('groups.index');
            } else {
                Session::flash('error', 'Whoops! Failed to Create Customer');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $customer = Customer::with('group', 'passport', 'maharam', 'dependent')->FindOrFail($id);
        return view('Admin.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $groups = Group::select('id', 'group_name')->get();
        $districts = District::orderBy('name')->get();
        $registered_customers = Customer::where('id', '<>', $id)->get();
        $passports = CustomerPassport::all();
        return view('Admin.customer.form', compact('customer', 'districts', 'groups', 'registered_customers', 'passports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), array(
            'given_name' => 'required',
            'sur_name' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ));

        $data = $request->all();
        $data['date_of_birth'] = Carbon::parse($data['date_of_birth'])->format('Y-m-d');
        $data['email'] = strtolower($data['email']);
        if ($request->ajax()) {
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors(), 'success' => false, 'type' => 'error', 'status' => 422], 200);
            }

            $customer = Customer::find($id);
            if ($request->hasFile('photo')) {
                $upload = $this->uploadFile($request->photo, 'uploads/customers/images');
                if ($upload) {
                    File::delete('uploads/customers/images/' . $customer->photo);
                    $data['photo'] = $upload;
                } else {
                    return response()->json(['message' => 'Whoops! Failed to upload photo', 'success' => false, 'type' => 'error', 'status' => 422], 200);
                }
            }
            $updated = false;
            if ($customer) {
                $updated = $customer->update($data);
            }
            if ($updated) {
                return response()->json(['data' => $customer, 'message' => 'Customer updated Successfully', 'success' => true, 'type' => 'success', 'status' => 200], 200);
            } else {
                return response()->json(['message' => 'Whoops! Failed to update Customer.', 'success' => false, 'type' => 'error', 'status' => 400], 200);
            }
        } else { // if request is not a AJAX request
            $validator->validate();
            $customer = Customer::findOrFail($id);
            if ($request->hasFile('photo')) {
                $upload = $this->uploadFile($request->photo, 'uploads/customers/images');
                if ($upload) {
                    File::delete('uploads/customers/images/' . $customer->photo);
                    $data['photo'] = $upload;
                } else {
                    Session::flash('error', 'Whoops! Failed to upload photo');
                    return redirect()->back()->withInput();
                }
            }
            $updated = false;
            if ($customer) {
                $updated = $customer->update($data);
            }
            if ($updated) {
                Session::flash('success', 'Customer updated Successfully');
                return redirect()->route('groups.index');
            } else {
                Session::flash('error', 'Whoops! Failed to update Customer');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        if ($customer->delete()) {
            File::delete('uploads/customers/images/' . $customer->photo);
            return response()->json(['success' => true, 'message' => 'Customer Deleted Successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Whoops! Customer Not Deleted'], 200);
        }
    }

    /**
     * Upload File Universal Function
     *
     * @param UploadedFile $file
     * @param string $UploadPath
     * @return \Symfony\Component\HttpFoundation\File\File|bool
     */
    private function uploadFile(UploadedFile $file, string $UploadPath = 'uploads')
    {
        $fileName = time() . ' - ' . $file->getClientOriginalName();
        $uploaded = $file->move(public_path($UploadPath), $fileName);
        if ($uploaded) {
            return $fileName;
        } else {
            return false;
        }
    }

    /**
     * Create Passport
     *
     * @param Request $request
     * @return bool
     */
    private function createPassport(Request $request)
    {
        $validator = Validator::make($request->all(), array(
            'full_name' => 'required',
            'passport_no' => 'required',
            'date_of_birth' => 'required',
            'passport_type' => 'required',
            'issue_date' => 'required',
            'expiry_date' => 'required',
        ));
        if ($validator->fails()) {
            return false;
        }
        $data = array(
            'full_name' => $request->full_name,
            'passport_no' => $request->passport_no,
            'date_of_birth' => $request->date_of_birth,
            'passport_type' => $request->passport_type,
            'issue_date' => Carbon::parse($request->issue_date)->format('Y-m-d'),
            'expiry_date' => Carbon::parse($request->expiry_date)->format('Y-m-d'),
            'issue_location' => $request->issue_location,
        );

        $passport = CustomerPassport::create($data);
        if ($passport) {
            return $passport->id;
        } else {
            return false;
        }
    }

    public function customerInfoPDF($id)
    {
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $customer = Customer::with('group', 'passport', 'maharam', 'dependent')->FindOrFail($id);
        return view('Admin.customer.customer-info-pdf', compact('customer'));
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf->loadView('Admin.customer.customer-info-pdf', compact('customer'))->setPaper('', 'landscape');
        return $pdf->stream();
//        return $pdf->download('invoice.pdf');
    }
}

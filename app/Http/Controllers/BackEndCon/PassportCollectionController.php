<?php

namespace App\Http\Controllers\BackEndCon;

use App\Customer;
use App\CustomerPassport;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PassportCollectionController extends Controller
{
    private $controllerInfo;

    public function __construct()
    {
        $this->controllerInfo = (object)array(
            'title' => 'Passport Collection',
            'actionButtons' => true,
            'routeNamePrefix' => 'passport-collection',
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $controllerInfo = $this->controllerInfo;
        $passport_collections = Customer::with(['submitted_passports' => function ($q) {
        }])->whereHas('submitted_passports', function ($q) {
        })->addSelect(['total_passport_submitted' => function ($q) {
            $q->selectRaw('COUNT(*) as total_passport_submitted');
            $q->from('customer_passports')->whereColumn('reference_id', 'customers.id')->limit(1);
        }])->get();
        return view('Admin.passport-collection.index', compact('controllerInfo', 'passport_collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $controllerInfo = $this->controllerInfo;
        $customers = Customer::whereNotNull('group_id')->get();
        return view('Admin.passport-collection.form', compact('controllerInfo', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), array(
            'reference_id' => 'required|numeric',
        ))->validate();

        $createdPassport = false;
        foreach ($request->passport['full_name'] as $key => $passport) {
            $data = array(
                'reference_id' => $request->reference_id,
                'passport_type' => 3, // 3 = Others
                'full_name' => $request->passport['full_name'][$key],
                'passport_no' => $request->passport['passport_no'][$key],
                'date_of_birth' => Carbon::parse($request->passport['date_of_birth'][$key])->format('Y-m-d'),
                'expiry_date' => Carbon::parse($request->passport['expiry_date'][$key])->format('Y-m-d'),
            );
            $createdPassport = CustomerPassport::create($data);
        }
        if ($createdPassport) {
            Session::flash('success', $this->controllerInfo->title . ' Created Successfully');
            return redirect()->route($this->controllerInfo->routeNamePrefix . '.index');
        } else {
            Session::flash('error', 'Whoops! Failed to Create ' . $this->controllerInfo->title);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $controllerInfo = $this->controllerInfo;
        $passport_collection = Customer::with(['submitted_passports'])
            ->addSelect(['total_passport_submitted' => function ($q) {
                $q->selectRaw('COUNT(*) as total_passport_submitted');
                $q->from('customer_passports')->whereColumn('reference_id', 'customers.id')->limit(1);
            }])->find($id);
        return view('Admin.passport-collection.form', compact('controllerInfo', 'passport_collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
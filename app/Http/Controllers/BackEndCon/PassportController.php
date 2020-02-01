<?php

namespace App\Http\Controllers\BackEndCon;

use App\CustomerPassport;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $passports = CustomerPassport::all();
        return view('Admin.passport.index', compact('passports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.passport.form');
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
            'passport_no' => 'required',
            'passport_type' => 'required',
            'issue_date' => 'required',
            'expiry_date' => 'required',
            'issue_location' => 'required',
        ))->validate();

        $data = $request->all();
        $data['issue_date'] = Carbon::parse($data['issue_date'])->format('Y-m-d');
        $data['expiry_date'] = Carbon::parse($data['expiry_date'])->format('Y-m-d');

        $passport = CustomerPassport::create($data);
        if ($passport) {
            Session::flash('success', 'Passport Created Successfully');
            return redirect()->route('passport-info.index');
        } else {
            Session::flash('error', 'Whoops! Failed to Create Passport');
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
        return $passport = CustomerPassport::FindOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $passport = CustomerPassport::FindOrFail($id);
        return view('Admin.passport.form', compact('passport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $validatedData = Validator::make($request->all(), array(
            'passport_no' => 'required',
            'passport_type' => 'required',
            'issue_date' => 'required',
            'expiry_date' => 'required',
            'issue_location' => 'required',
        ))->validate();

        $data = $request->all();
        $data['issue_date'] = Carbon::parse($data['issue_date'])->format('Y-m-d');
        $data['expiry_date'] = Carbon::parse($data['expiry_date'])->format('Y-m-d');

        $updated = CustomerPassport::FindOrFail($id)->update($data);
        if ($updated) {
            Session::flash('success', 'Passport Updated Successfully');
            return redirect()->route('passport-info.index');
        } else {
            Session::flash('error', 'Whoops! Failed to Update Passport');
            return redirect()->back()->withInput();
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
        $delete = CustomerPassport::find($id)->delete();
        if ($delete) {
            return response()->json(['success' => true, 'message' => 'Passport Deleted Successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Whoops! Passport Not Deleted'], 200);
        }
    }
}

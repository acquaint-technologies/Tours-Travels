<?php

namespace App\Http\Controllers\BackEndCon;

use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class HajjPackageController extends Controller
{
    private $package_type;
    private $package_type_no;
    public function __construct()
    {
        $this->package_type = 'Hajj';
        $this->package_type_no = 1;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $package_type = $this->package_type;
        $packages = Package::where('package_type', $this->package_type_no)->get();
        return view('Admin.package.index', compact('package_type', 'packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $package_type = $this->package_type;
        return view('Admin.package.form', compact('package_type'));
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
            'package_name' => 'required',
            'pack_code' => 'required',
            'no_of_days' => 'required|numeric',
            'total_price' => 'required',
            'status' => 'required',
        ))->validate();

        $validatedData['package_type'] = $this->package_type_no;
        $package = Package::create($validatedData);
        if ($package) {
            Session::flash('success', 'Package Created Successfully');
            return redirect()->route('hajj-package.index');
        } else {
            Session::flash('error', 'Whoops! Failed to Create Package');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $package = Package::FindOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $package_type = $this->package_type;
        $package = Package::FindOrFail($id);
        return view('Admin.package.form', compact('package_type', 'package'));
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
            'package_name' => 'required',
            'pack_code' => 'required',
            'no_of_days' => 'required|numeric',
            'total_price' => 'required',
            'status' => 'required',
        ))->validate();

        $validatedData['package_type'] = $this->package_type_no;
        $package = Package::FindOrFail($id)->update($validatedData);
        if ($package) {
            Session::flash('success', 'Package Updated Successfully');
            return redirect()->route('hajj-package.index');
        } else {
            Session::flash('error', 'Whoops! Failed to Update Package');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $delete = Package::find($id)->delete();
        if ($delete) {
            return response()->json(['success' => true, 'message' => 'Package Deleted Successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Whoops! Package Not Deleted'], 200);
        }
    }
}
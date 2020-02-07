<?php

namespace App\Http\Controllers\BackEndCon;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $customer_count = Customer::all()->count();
        return view('Admin.dashboard', compact('customer_count'));
    }
}

<?php

namespace App\Http\Controllers\JsonCon;

use App\Hajj;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Get the list of Customers by group id
     *
     * @param $hajj_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPaymentStatus($hajj_id)
    {
        $hajj = Hajj::find($hajj_id);
        if ($hajj->count() > 0) {
            return response()->json(['success' => true, 'data' => $hajj->payment_status, 'status' => 200], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Whoops! Data not found', 'status' => 400], 200);
        }
    }
}

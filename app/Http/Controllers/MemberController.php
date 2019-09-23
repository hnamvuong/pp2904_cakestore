<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.member.index');
    }

    public function getOrderHistory()
    {
        $name = Auth::user()->name;
        $customer = Customer::where('name', $name)->get();
        dd($customer);
        
        return view('backend.member.index', compact('customer');
    }
}

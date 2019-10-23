<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\BillDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutHistoryController extends Controller
{
    public function getHistory() {
        $user_id = Auth::user()->id;

        $user = User::with(['bills.customer'])->find($user_id);
        $bills_history = $user->bills->sortByDesc('date_oder');

        return view('checkout.checkout_history', compact('bills_history'));
    }

    public function getCheckoutDetail($id_bill) {
        
    }
}

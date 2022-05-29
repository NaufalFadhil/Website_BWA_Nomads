<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionDetail;
use App\TravelPackage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details','travel_package','user'])
                    ->findOrFail($id);

        return view('pages.checkout', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => 0,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function success(Request $request)
    {
        return view('pages.success');
    }
}

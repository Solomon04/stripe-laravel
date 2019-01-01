<?php

namespace App\Http\Controllers;

use App\Services\Stripe\Charge;
use App\Services\Stripe\Customer;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * @param Request $request
     * @return Customer
     */
    public function save(Request $request)
    {
        new Customer($request->user(), $request->stripeToken);
        return redirect('/')->with('success', 'Card saved');
    }

    /**
     * @param Request $request
     * @return Charge
     */
    public function charge(Request $request)
    {
        new Charge($request->user());
        return redirect('/')->with('success', 'Payment processed');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = "Stripe - Laravel";
        return view('pages.index')->with('title',$title);
    }

    /**
     * Save Customer Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function form()
    {
        //Check For Admin
        if(!auth()->check())
        {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        return view('pages.form');
    }

    /**
     * Buy Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function buy()
    {
        //Check For Admin
        if(!auth()->check())
        {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        if(is_null(auth()->user()->stripe_id))
        {
            return redirect('/')->with('error', 'You need to save a card.');
        }

        return view('pages.buy');
    }

    /**
     * View Payments
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function payments()
    {
        if(!auth()->check())
        {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        $payments = null;
        return view('pages.payments')->with('payments' , $payments);
    }
}

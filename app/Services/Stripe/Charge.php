<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 1/1/2019
 * Time: 1:01 PM
 */

namespace App\Services\Stripe;


use App\Payments;
use App\User;
use Stripe\Stripe;
use Stripe\Charge as StripeCharge;

class Charge
{
    public $user;

    /**
     * CreateCharge constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        Stripe::setApiKey(getenv('STRIPE_SECRET'));
        $this->user = $user;
        $this->charge();
    }

    public function charge()
    {
        $charge = StripeCharge::create([
            "amount" => '1000',
            "currency" => "usd",
            "customer" => $this->user->stripe_id,
            "description" => 'Stripe Laravel Charge'
        ]);
        $this->save($charge);
    }

    /**
     * @param $charge
     */
    private function save($charge)
    {
        $payment = new Payments();
        $payment->user_id = $this->user->id;
        $payment->customer_id = $charge->customer;
        $payment->charge_id = $charge->id;
        $payment->amount = $charge->amount/100;
        $payment->save();
    }
}
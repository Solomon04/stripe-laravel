<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 1/1/2019
 * Time: 1:01 PM
 */

namespace App\Services\Stripe;


use App\User;
use Stripe\Stripe;
use Stripe\Customer as StripeCustomer;

class Customer
{
    /**
     * Customer constructor.
     * @param User $user
     * @param $token
     */
    public function __construct(User $user, $token)
    {
        Stripe::setApiKey(getenv('STRIPE_SECRET'));
        $this->user = $user;
        $this->createCustomer($token);
    }
    /**
     * @param $token
     */
    private function createCustomer($token)
    {
        $customer = StripeCustomer::create(array(
            'source' => $token,
            'email' => $this->user->email,
        ));
        $this->user->update(['stripe_id' => $customer->id]);
    }
}
<?php

namespace App;

class Subscription
{
    protected $gateway;

    public function __construct( $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create(User $user){

        $this->gateway->create();
        
        $user->markAsSubscribred();
    }
}
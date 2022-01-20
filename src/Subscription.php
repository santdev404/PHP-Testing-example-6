<?php

namespace App;

class Subscription
{
    protected $gateway;
    protected $mailer;

    public function __construct(Gateway $gateway,  Mailer $mailer)
    {
        $this->gateway = $gateway;
        $this->mailer = $mailer;

    }

    public function create(User $user){

        $receipt = $this->gateway->create();
        
        $user->markAsSubscribred();

        $this->mailer->deliver('Your receipt number is: '.$receipt);
    }
}
<?php

namespace App;

class User
{

    protected $name;
    protected $subscribred = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isSubscribed(): bool
    {
        return $this->subscribred;
    }

    public function markAsSubscribred(){
        $this->subscribred = true;
    }
    
}
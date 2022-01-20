<?php

namespace Tests;

use App\Gateway;
use App\Subscription;
use App\User;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{
    /** @test */
    public function it_creates_a_stripe_subscription(){
        $this->markTestSkipped();
    }

    /** @test */
    public function creating_a_subscription_marks_the_user_a_subscribed(){
        $gateway = $this->createMock(Gateway::class);
        $subscription = new Subscription($gateway);
        $user = new User('JohnDoe');

        $this->assertFalse($user->isSubscribed());


        $subscription->create($user);

        $this->assertTrue($user->isSubscribed());

    }
}
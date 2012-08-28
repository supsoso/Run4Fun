<?php
namespace r4f\SiteBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class SubscriptionEvent extends Event
{
    protected $subscription;

    public function __construct($subscription)
    {
        $this->subscription = $subscription;
    }

    public function getSubscription()
    {
        return $this->subscription;
    }
}

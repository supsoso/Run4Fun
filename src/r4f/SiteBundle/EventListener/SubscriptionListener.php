<?php
namespace r4f\SiteBundle\EventListener;

use r4f\SiteBundle\Event\SubscriptionEvent;

class SubscriptionListener
{
    protected $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    
    public function getMailer()
    {
        return $this->mailer;
    }

    public function onSubscriptionAddedEvent(SubscriptionEvent $event)
    {   
        $subscription = $event->getSubscription();

        $message = \Swift_Message::newInstance()
            ->setSubject('Subscription')
            ->setFrom('no-reply@idci-consulting.fr')
            ->setTo('nordine.rkaini@gmail.com')
            ->setBody("Hey, SUBSCRIPTION OK")
        ;
        
        $this->getMailer()->send($message);
    }
}

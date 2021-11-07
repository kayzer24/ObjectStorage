<?php

namespace App\EventSubscriber;

use App\Entity\Fichier;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminEventSubscriber implements EventSubscriberInterface
{
    public function setFileDate(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if ($entity instanceof Fichier) {
            $now = new \DateTime('now');
            $entity->setCreatedAt($now);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setFileDate'],
        ];
    }
}

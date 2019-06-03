<?php declare(strict_types=1);

namespace ComquerTest\Fixture\Event;

use Comquer\DomainIntegration\Event\Event;
use Comquer\Event\EventListener\EventListener;

class UpdateShoppingListProjection implements EventListener
{
    public function __invoke(Event $event) : void
    {
        // Update the projection...
    }

    public static function getName(): string
    {
        return 'update shopping list projection';
    }
}
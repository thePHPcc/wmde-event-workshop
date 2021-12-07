<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

use RuntimeException;

class ChancellorElectedEventHandler implements EventHandler {

    public function __construct(private ChancellorProjector $projector) {
    }

    public function handle(Event $event): void {
        assert($event instanceof ChancellorElectedEvent, new RuntimeException());
        $this->projector->project($event->chancellor());
    }
}

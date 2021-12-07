<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

class EventEmitter {

    private array $handlers = [];

    public function subscribe(string $eventClass, EventHandler $handler): void {
        if (!isset($this->handlers[$eventClass])) {
            $this->handlers[$eventClass] = [];
        }

        $this->handlers[$eventClass][] = $handler;
    }

    public function emit(Event $event): void {
        if (!isset($this->handlers[$event::class])) {
            return;
        }

        foreach($this->handlers[$event::class] as $handler) {
            $handler->handle($event);
        }
    }
}

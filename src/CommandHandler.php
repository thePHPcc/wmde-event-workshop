<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

/**
 * Just an example -- not used in our workshop
 */

class CommandHandler {

    public function handle(Command $command) {
        $this->locator->findHandlerFor($command)->handle($command);
    }
}

<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

class ElectAChancellorCommandHandler {

    public function __construct(
        private EventEmitter $emitter
    ) {
    }

    public function handle(ElectAChancellorCommand $command): void {
        // @todo: Validate things ;)
        $this->emitter->emit(
             new ChancellorElectedEvent(
                 Chancellor::fromCandidate($command->candidate())
             )
        );
    }
}





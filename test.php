<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

use DateTimeImmutable;

require __DIR__ .'/src/autoload.php';

$command = new ElectAChancellorCommand(
    new Candidate('Reiner Zufall'),
    new DateTimeImmutable('now')
);

$emitter = new EventEmitter();
$emitter->subscribe(
    ChancellorElectedEvent::class,
    new ChancellorElectedEventHandler(
        new ChancellorProjector()
    )
);

$handler = new ElectAChancellorCommandHandler($emitter);
$handler->handle($command);

<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

class ChancellorProjector {

    //public function __construct(private DatabaseGateway $databaseGateway) {
    //}

    public function project(Chancellor $chancellor): void {
      //  $this->databaseGateway->updateChancellor($chancellor->asString());
        var_dump($chancellor->asString());
    }
}

<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

class ChancellorElectedEvent implements Event {

    public function __construct(private Chancellor $chancellor) {
    }

    public function chancellor(): Chancellor {
        return $this->chancellor;
    }

}

<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

class Candidate {

    public function __construct(
        private string $name
    ) {
    }

    public function asString(): string {
        return $this->name;
    }

}


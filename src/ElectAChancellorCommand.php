<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

use DateTimeImmutable;

class ElectAChancellorCommand implements Command {

    public function __construct(
        private Candidate $candidate,
        private DateTimeImmutable $timestamp
    ) {
    }

    public function candidate(): Candidate {
        return $this->candidate;
    }

    public function timestamp(): DateTimeImmutable {
        return $this->timestamp;
    }

}

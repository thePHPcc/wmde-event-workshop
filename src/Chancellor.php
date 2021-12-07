<?php declare(strict_types=1);
namespace Wikimedia\Workshop;

class Chancellor {

    private function __construct(private string $name) {}

    public static function fromCandidate(Candidate $candidate): self {
        return new self($candidate->asString());
    }

    public function asString(): string {
        return $this->name;
    }

}

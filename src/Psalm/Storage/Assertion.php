<?php

namespace Psalm\Storage;

use Psalm\Type\Atomic;

abstract class Assertion
{
    /** @psalm-mutation-free */
    abstract public function getNegation(): Assertion;

    /** @psalm-mutation-free */
    abstract public function isNegationOf(self $assertion): bool;

    abstract public function __toString(): string;

    public function isNegation(): bool
    {
        return false;
    }

    public function getAtomicType(): ?Atomic
    {
        return null;
    }

    public function setAtomicType(Atomic $type): void
    {
    }
}

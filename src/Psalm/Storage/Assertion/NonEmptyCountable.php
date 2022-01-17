<?php

namespace Psalm\Storage\Assertion;

use Psalm\Storage\Assertion;

class NonEmptyCountable extends Assertion
{
    public $is_negatable;

    public function __construct(bool $is_negatable)
    {
        $this->is_negatable = $is_negatable;
    }

    /** @psalm-mutation-free */
    public function getNegation(): Assertion
    {
        return $this->is_negatable ? new NotNonEmptyCountable() : new Any();
    }

    public function __toString(): string
    {
        return 'non-empty-countable';
    }

    /** @psalm-mutation-free */
    public function isNegationOf(Assertion $assertion): bool
    {
        return $this->is_negatable && $assertion instanceof NotNonEmptyCountable;
    }
}

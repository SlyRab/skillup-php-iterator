<?php

namespace Test;

class ExampleIterator
{
    public function __construct(
        private array $testArray,
    )
    {
    }

    public function Iterate($ignoreValue)
    {
        foreach ($this->testArray as $item) {
            if ($item == $ignoreValue) {
                continue;
            }

            yield $item;
        }
    }
}
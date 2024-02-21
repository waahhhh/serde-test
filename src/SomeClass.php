<?php

namespace Waahhhh\SerdeTest;

use Crell\Serde\Attributes\ClassSettings;

#[ClassSettings(requireValues: true)]
class SomeClass
{
    public function __construct(
        public readonly ?string $foo
    ) {
        //
    }
}

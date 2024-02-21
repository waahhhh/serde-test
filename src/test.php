<?php

namespace Waahhhh\SerdeTest;

use Crell\Serde\SerdeCommon;

require_once __DIR__ . '/../vendor/autoload.php';

$serde = new SerdeCommon();

$deserializedObject = $serde->deserialize(
    serialized: ['foo' => null],
    from: 'array',
    to: SomeClass::class,
);

var_dump(
    $serde->serialize(object: $deserializedObject, format: 'array')
);

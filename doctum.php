<?php

$options = [
    'dir' => __DIR__,
    'title' => 'Ally\'s PetStore API',
    'build_dir' => __DIR__ . '/.generator/docs/doctum',
    'cache_dir' => __DIR__ . '/.generator/cache/doctum',
    'default_opened_level' => 5,
];

return new Doctum\Doctum(__DIR__, $options);

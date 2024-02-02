<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Glowacki Backendext',
    'description' => 'Die Super Backeendextension',
    'category' => 'plugin',
    'author' => 'Dennis Glowacki',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

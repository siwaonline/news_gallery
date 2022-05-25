<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Simple gallery for EXT:news',
    'description' => 'Extend news with gallery options',
    'category' => 'fe',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author_company' => '',
    'version' => '5.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'news' => '9.0.0-9.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'suggests' => [],
];

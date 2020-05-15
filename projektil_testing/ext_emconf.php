<?php

/**
 * Extension Manager/Repository config file for ext "projektil_testing".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'projektil testing',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Projektil\\ProjektilTesting\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'shatko',
    'author_email' => 'mladen.salaj@gmail.com',
    'author_company' => 'projektil',
    'version' => '1.0.0',
];

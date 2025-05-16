<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 't3v13-fluid',
    'description' => 'My TYPO3 v13 fluid-based extension',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mysoft\\T3v13Fluid\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Murat Yaşar',
    'author_email' => 'dev.muratyasar@gmail.com',
    'author_company' => 'MySoft',
    'version' => '1.0.0',
];

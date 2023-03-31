<?php

/**
 * Extension Manager/Repository config file for ext "bitconex_theme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'bitconex_theme',
    'description' => 'bitconex_theme extension for M-Tel',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.5.99',
            'fluid_styled_content' => '10.4.0-10.5.99',
            'rte_ckeditor' => '10.4.0-10.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Aner Coric',
    'author_email' => 'anercoric24@gmail.com',
    'author_company' => 'M-Tel',
    'version' => '1.0.0',
];

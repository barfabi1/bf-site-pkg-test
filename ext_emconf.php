<?php

/**
 * Extension Manager/Repository config file for ext "developer_blog".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Developer Blog',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Acme\\DeveloperBlog\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Bartosz Fabiański',
    'author_email' => 'jon@acme.com',
    'author_company' => 'ACME',
    'version' => '1.0.0',
];

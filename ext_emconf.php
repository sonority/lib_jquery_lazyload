<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "lib_jquery_lazyload".
 *
 * Auto generated 15-02-2014 12:28
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'JS Library: jQuery.lazyload',
    'description' => 'Provides the "Lazy Load Plugin for jQuery".',
    'category' => 'misc',
    'version' => '0.0.0',
    'state' => 'alpha',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'stephan.kellermayr@gmail.com',
    'author_company' => 'sonority.at - MULTIMEDIA ART DESIGN',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.6.99',
        ],
        'conflicts' => [
            'lib_jquery_unveil' => '0.0.0-'
        ],
        'suggests' => [
            'lib_jquery' => '0.0.1-'
        ],
    ],
];


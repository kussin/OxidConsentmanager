<?php

$sMetadataVersion = '2.1';
$aModule = [
    'id' => 'kussin/consentmanager',
    'title' => 'Kussin | Consentmanager',
    'description'  => '',
    'version' => '1.0',
    'author' => 'Steven Uster',
    'url' => 'https://www.kussin.de',
    'email' => 'steven.uster@kussin.de',
    'settings' => [
        [
            'group' => 'kussinBasic',
            'name' => 'kussinTest',
            'type' => 'str',
            'value' => 'test',
        ]
    ]
];

// php vendor/bin/oe-console oe:module:install-configuration source/modules/kussin/consentmanager/
// composer config repositories.kussin/consentmanager path source/modules/kussin/consentmanager
// composer require kussin/consentmanager

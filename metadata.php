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
            'group' => 'kussin_consent_manager',
            'name' => 'kussin_consent_script',
            'type' => 'str',
        ]
    ],
    'blocks' => [
        array(
            'template'    => 'layout/base.tpl',
            'block'        => 'base_js',
            'file'         => '/Application/views/blocks/head_script_consentmanager.tpl'
        ),
    ],
];

// php vendor/bin/oe-console oe:module:install-configuration source/modules/kussin/consentmanager/
// composer config repositories.kussin/consentmanager path source/modules/kussin/consentmanager
// composer require kussin/consentmanager

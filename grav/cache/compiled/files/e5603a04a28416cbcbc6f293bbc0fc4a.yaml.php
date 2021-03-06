<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/webcomponents/blueprints.yaml',
    'modified' => 1547507324,
    'data' => [
        'name' => 'Web components loader',
        'version' => '1.1.0',
        'description' => 'Loads web components and associated polyfill so you can use custom elements in your site.',
        'icon' => 'google',
        'author' => [
            'name' => 'Bryan Ollendyke',
            'email' => 'bto108@psu.edu',
            'url' => 'https://www.elmsln.org/'
        ],
        'homepage' => 'https://github.com/elmsln/grav-plugin-webcomponents',
        'keywords' => 'webcomponents, polymer, plugin',
        'bugs' => 'https://github.com/elmsln/grav-plugin-webcomponents/issues',
        'license' => 'Apache 2.0',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cdn' => [
                    'type' => 'textfield',
                    'label' => 'CDN base address',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];

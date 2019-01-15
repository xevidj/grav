<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/themes/bootstrap-blog/blueprints/blog.yaml',
    'modified' => 1547507304,
    'data' => [
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'bootstrap-blog' => [
                            'type' => 'tab',
                            'title' => 'ADMIN.BLOG',
                            'fields' => [
                                'is_sidebar_enabled' => [
                                    'type' => 'conditional',
                                    'condition' => 'config.themes[\'bootstrap-blog\'].sidebar.enabled',
                                    'fields' => [
                                        'header.sidebar.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'ADMIN.THEME.SIDEBAR',
                                            'help' => 'ADMIN.ITEM.ITEM_SIDEBAR_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.layout' => [
                                    'type' => 'select',
                                    'label' => 'ADMIN.MODULAR.ITEMS_LAYOUT',
                                    'help' => 'ADMIN.MODULAR.ITEMS_LAYOUT_HELP',
                                    'size' => 'medium',
                                    'default' => 'boxed',
                                    'options' => [
                                        'boxed' => 'Boxed',
                                        'masonry' => 'Masonry',
                                        'cards' => 'Cards'
                                    ],
                                    'validate' => [
                                        'pattern' => '(boxed|masonry|cards)'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

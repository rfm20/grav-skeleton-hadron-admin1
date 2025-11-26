<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/themes/hadron/blueprints/partials/sidebar.yaml',
    'modified' => 1754217416,
    'size' => 1386,
    'data' => [
        'form' => [
            'fields' => [
                'header.sidebar.display' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'TEMPLATE.PARTIALS.SIDEBAR.DISPLAY.LABEL',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.sidebar.show_popular_tags' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'TEMPLATE.PARTIALS.SIDEBAR.SHOW_POPULAR_TAGS.LABEL',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.sidebar.show_feed' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'TEMPLATE.PARTIALS.SIDEBAR.SHOW_FEED.LABEL',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.sidebar.show_toc' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'TEMPLATE.PARTIALS.SIDEBAR.SHOW_TOC.LABEL',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.sidebar.show_tntsearch' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'TEMPLATE.PARTIALS.SIDEBAR.SHOW_TNTSEARCH.LABEL',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

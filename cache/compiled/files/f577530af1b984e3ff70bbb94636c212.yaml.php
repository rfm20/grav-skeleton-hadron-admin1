<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/themes/hadron/blueprints/default.yaml',
    'modified' => 1754217416,
    'size' => 639,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'sidebar' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'TEMPLATE.PARTIALS.SIDEBAR.TITLE',
                                    'import@' => [
                                        'type' => 'partials/sidebar',
                                        'context' => 'blueprints://pages'
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'header.body_classes' => [
                                                    'markdown' => true,
                                                    'description' => 'TEMPLATE.DEFAULT.BODY_CLASSES.DESCRIPTION'
                                                ]
                                            ]
                                        ]
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

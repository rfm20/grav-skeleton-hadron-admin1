<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/themes/hadron/blueprints/modular.yaml',
    'modified' => 1754217416,
    'size' => 1241,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MODULE',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'modular_title' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_ADMIN.MODULE_SETUP'
                                ],
                                'header.content.items' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.ITEMS',
                                    'default' => '@self.modular',
                                    'size' => 'medium'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ORDER_BY',
                                    'default' => 'date',
                                    'size' => 'small',
                                    'options' => [
                                        'folder' => 'TEMPLATE.PARTIALS.COLLECTION.ORDER_BY.OPTIONS.FOLDER',
                                        'title' => 'TEMPLATE.PARTIALS.COLLECTION.ORDER_BY.OPTIONS.TITLE',
                                        'date' => 'TEMPLATE.PARTIALS.COLLECTION.ORDER_BY.OPTIONS.DATE',
                                        'default' => 'TEMPLATE.PARTIALS.COLLECTION.ORDER_BY.OPTIONS.DEFAULT'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ORDER',
                                    'default' => 'desc',
                                    'size' => 'small',
                                    'options' => [
                                        'asc' => 'TEMPLATE.PARTIALS.COLLECTION.ORDER_DIR.OPTIONS.ASC',
                                        'desc' => 'TEMPLATE.PARTIALS.COLLECTION.ORDER_DIR.OPTIONS.DESC'
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

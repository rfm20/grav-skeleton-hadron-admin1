<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/blueprints/admin/pages/new_standard_page.yaml',
    'modified' => 1754217411,
    'size' => 624,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'ADMIN.PAGES.MODALS.NEW_STANDARD_PAGE.MODAL.TITLE'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'ADMIN.PAGES.MODALS.NEW_STANDARD_PAGE.TITLE.LABEL',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'ADMIN.PAGES.MODALS.NEW_STANDARD_PAGE.PARENT.LABEL',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'default'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];

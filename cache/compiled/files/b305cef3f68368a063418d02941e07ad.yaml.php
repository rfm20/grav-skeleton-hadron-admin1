<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/blueprints/admin/pages/new_blog_item.yaml',
    'modified' => 1754217411,
    'size' => 609,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'ADMIN.PAGES.MODALS.NEW_BLOG_ITEM.MODAL.TITLE'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'ADMIN.PAGES.MODALS.NEW_BLOG_ITEM.TITLE.LABEL',
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
                    'label' => 'ADMIN.PAGES.MODALS.NEW_BLOG_ITEM.PARENT.LABEL',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'item'
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

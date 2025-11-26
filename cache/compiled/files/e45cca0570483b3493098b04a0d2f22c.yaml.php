<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/themes/hadron/blueprints/modular/hero.yaml',
    'modified' => 1754217416,
    'size' => 602,
    'data' => [
        'title' => 'Hero',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'buttons' => [
                            'type' => 'tab',
                            'title' => 'Hero',
                            'fields' => [
                                'header.hero_classes' => [
                                    'type' => 'text',
                                    'label' => 'TEMPLATE.MODULAR.HERO.HERO_CLASSES.LABEL',
                                    'markdown' => true,
                                    'description' => 'TEMPLATE.MODULAR.HERO.HERO_CLASSES.DESCRIPTION'
                                ],
                                'header.hero_image' => [
                                    'type' => 'filepicker',
                                    'label' => 'TEMPLATE.MODULAR.HERO.HERO_IMAGE.LABEL',
                                    'preview_images' => true,
                                    'description' => 'TEMPLATE.MODULAR.HERO.HERO_IMAGE.DESCRIPTION'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

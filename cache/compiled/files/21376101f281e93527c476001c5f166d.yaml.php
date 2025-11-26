<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/themes/hadron/blueprints/partials/blog-bits.yaml',
    'modified' => 1754217416,
    'size' => 2120,
    'data' => [
        'form' => [
            'fields' => [
                'hero_title' => [
                    'type' => 'spacer',
                    'title' => 'TEMPLATE.PARTIALS.BLOG.HERO_TITLE.TITLE'
                ],
                'header.hero_classes' => [
                    'type' => 'text',
                    'label' => 'TEMPLATE.PARTIALS.BLOG.HERO_CLASSES.LABEL',
                    'markdown' => true,
                    'description' => 'TEMPLATE.PARTIALS.BLOG.HERO_CLASSES.DESCRIPTION',
                    'data-default@' => '\\Grav\\Theme\\Hadron::getblogpageheroclasses'
                ],
                'header.hero_image' => [
                    'type' => 'filepicker',
                    'label' => 'Hero Image',
                    'preview_images' => true,
                    'description' => 'TEMPLATE.PARTIALS.BLOG.HERO_IMAGE.DESCRIPTION'
                ],
                'header.header_image_alt_text' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'TEMPLATE.PARTIALS.BLOG.HERO_IMAGE_ALT_TEXT.LABEL',
                    'default' => NULL
                ],
                'header.header_image_credit' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'TEMPLATE.PARTIALS.BLOG.HERO_IMAGE_CREDIT.LABEL',
                    'default' => NULL
                ],
                'header.header_image_creditlink' => [
                    'type' => 'text',
                    'size' => 'long',
                    'label' => 'TEMPLATE.PARTIALS.BLOG.HERO_IMAGE_CREDITLINK.LABEL',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'URL'
                    ]
                ],
                'toggles_title' => [
                    'type' => 'spacer',
                    'title' => 'TEMPLATE.PARTIALS.BLOG.TOGGLES_TITLE.TITLE'
                ],
                'header.blog_url' => [
                    'type' => 'text',
                    'label' => 'TEMPLATE.PARTIALS.BLOG.BLOG_URL.LABEL',
                    'help' => 'TEMPLATE.PARTIALS.BLOG.BLOG_URL.HELP',
                    'default' => '/blog',
                    'placeholder' => '/blog',
                    'size' => 'medium'
                ],
                'header.show_sidebar' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'Show Sidebar',
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
                'header.show_breadcrumbs' => [
                    'toggleable' => true,
                    'type' => 'toggle',
                    'label' => 'TEMPLATE.PARTIALS.BLOG.SHOW_BREADCRUMBS.LABEL',
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
                'header.show_pagination' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'TEMPLATE.PARTIALS.BLOG.SHOW_PAGINATION.LABEL',
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
        ]
    ]
];

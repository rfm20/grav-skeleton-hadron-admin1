<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/blog.en.md',
    'modified' => 1764730393,
    'size' => 911,
    'data' => [
        'header' => [
            'title' => 'Berita',
            'blog_url' => '/blog',
            'sitemap' => [
                'changefreq' => 'never',
                'priority' => 0.3,
                'lastmod' => '01-08-2025'
            ],
            'date' => '01-08-2025 00:00',
            'feed' => [
                'limit' => 10
            ],
            'hero_classes' => 'text-light overlay-dark-gradient hero-large parallax',
            'body_classes' => 'header-dark header-transparent',
            'show_breadcrumbs' => false,
            'sidebar' => [
                'show_popular_tags' => true,
                'show_feed' => true,
                'show_toc' => false,
                'show_tntsearch' => true
            ],
            'pagination' => true,
            'show_pagination' => true,
            'bricklayer_layout' => true,
            'child_type' => 'item',
            'display_post_summary' => [
                'enabled' => false
            ],
            'modular_content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'dsc',
                    'custom' => [
                        0 => '_message'
                    ]
                ]
            ],
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 3,
                'order' => [
                    'by' => 'date',
                    'dir' => 'asc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'media_order' => 'header.webp'
        ],
        'frontmatter' => 'title: Berita
blog_url: /blog
sitemap:
    changefreq: never
    priority: 0.3
    lastmod: 01-08-2025
date: \'01-08-2025 00:00\'
feed:
    limit: 10
hero_classes: \'text-light overlay-dark-gradient hero-large parallax\'
body_classes: \'header-dark header-transparent\'
show_breadcrumbs: false
sidebar:
    show_popular_tags: true
    show_feed: true
    show_toc: false
    show_tntsearch: true
pagination: true
show_pagination: true
bricklayer_layout: true
child_type: item
display_post_summary:
    enabled: false
modular_content:
    items: \'@self.modular\'
    order:
        by: folder
        dir: dsc
        custom:
            - _message
content:
    items:
        - \'@self.children\'
    limit: 3
    order:
        by: date
        dir: asc
    pagination: true
    url_taxonomy_filters: true
media_order: header.webp',
        'markdown' => '# Berita Terbaru
## Informasi terkini dari Pemerintah Provinsi Kalimantan Barat'
    ]
];

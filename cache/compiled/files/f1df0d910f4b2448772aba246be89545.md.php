<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/04.blog/blog.en.md',
    'modified' => 1763461017,
    'size' => 1078,
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
                'limit' => 8,
                'order' => [
                    'by' => 'date',
                    'dir' => 'asc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'media_order' => 'd2ab9aa882445724d62a7b0553a85bd74488176a-unsplashtiagogerken.jpg'
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
    limit: 8
    order:
        by: date
        dir: asc
    pagination: true
    url_taxonomy_filters: true
media_order: d2ab9aa882445724d62a7b0553a85bd74488176a-unsplashtiagogerken.jpg',
        'markdown' => '# Berita Terbaru
## Informasi terkini dari Pemerintah Provinsi Kalimantan Barat
This is an example blog page in Grav with Hadron. It shows how a blog can look alike and what features it offers.'
    ]
];

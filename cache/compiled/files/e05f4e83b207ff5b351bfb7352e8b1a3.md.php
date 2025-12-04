<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/08.docs/blog.en.md',
    'modified' => 1764732101,
    'size' => 993,
    'data' => [
        'header' => [
            'title' => 'Docs',
            'slug' => 'docs',
            'blog_url' => '/docs',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 0.7,
                'lastmod' => '31-07-2025'
            ],
            'date' => '31-07-2025 00:00',
            'taxonomy' => [
                'category' => [
                    0 => 'Docs'
                ]
            ],
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
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_notice'
                    ]
                ]
            ],
            'content' => [
                'items' => [
                    0 => '@self.descendants'
                ],
                'limit' => 8,
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'hide_summary' => true,
            'published' => false
        ],
        'frontmatter' => 'title: Docs
slug: docs
blog_url: /docs
sitemap:
    changefreq: monthly
    priority: 0.7
    lastmod: 31-07-2025
date: \'31-07-2025 00:00\'
taxonomy:
    category:
        - Docs
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
        dir: asc
        custom:
            - _notice
content:
    items:
        - \'@self.descendants\'
    limit: 8
    order:
        by: folder
        dir: asc
    pagination: true
    url_taxonomy_filters: true
hide_summary: true
published: false',
        'markdown' => '===

# [span class="hadron-font"]Hadron[/span] Documentation
## Technical Guides for Developers
'
    ]
];

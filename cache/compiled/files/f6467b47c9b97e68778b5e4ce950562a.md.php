<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/06.docs/01.theme/blog.en.md',
    'modified' => 1754217411,
    'size' => 984,
    'data' => [
        'header' => [
            'title' => 'Theme',
            'slug' => 'theme',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 0.8,
                'lastmod' => '10-10-2024'
            ],
            'date' => '10-10-2024',
            'taxonomy' => [
                'category' => [
                    0 => 'Theme'
                ],
                'tag' => [
                    0 => 'Theme',
                    1 => 'Category'
                ],
                'author' => 'Crabston GmbH'
            ],
            'hero_classes' => 'text-light overlay-dark parallax',
            'body_classes' => 'header-dark header-transparent',
            'show_breadcrumbs' => true,
            'sidebar' => [
                'show_popular_tags' => true,
                'show_feed' => false,
                'show_toc' => false
            ],
            'bricklayer_layout' => true,
            'child_type' => 'item',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ]
            ],
            'hide_summary' => true
        ],
        'frontmatter' => 'title: Theme
slug: theme
sitemap:
  changefreq: monthly
  priority: 0.8
  lastmod: 10-10-2024
date: 10-10-2024
taxonomy:
  category: [ Theme ]
  tag: [ Theme, Category ]
  author: Crabston GmbH
hero_classes: \'text-light overlay-dark parallax\'
body_classes: \'header-dark header-transparent\'
show_breadcrumbs: true
sidebar:
    show_popular_tags: true
    show_feed: false
    show_toc: false
bricklayer_layout: true
child_type: item
content:
  items: \'@self.children\'
  order:
    by: folder
    dir: asc
hide_summary: true',
        'markdown' => 'Hadron is a modern Grav theme based on Quark. As a child/ inherited theme of Quark, it includes more advanced features than the original Quark theme. It also offers advanced styling options.

===

# Hadron Tutorial - Theme
## Everything about the Hadron Theme for Grav

Hadron is a modern Grav theme based on Quark. As a child/ inherited theme of Quark, it includes more advanced features than the original Quark theme. It also offers advanced styling options.
'
    ]
];

<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/10.embedlycard/custompagetypes.en.md',
    'modified' => 1754217411,
    'size' => 436,
    'data' => [
        'header' => [
            'title' => 'Embedded pages',
            'published' => true,
            'visible' => true,
            'content' => [
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'items' => '@self.children',
                'limit' => 0
            ],
            'display_child_page_titles' => true,
            'sitemap' => [
                'changefreq' => 'never',
                'priority' => 0.3,
                'lastmod' => '01-08-2025'
            ],
            'date' => '01-08-2025'
        ],
        'frontmatter' => 'title: Embedded pages
published: true
visible: true
content:
  order:
    by: default
    dir: asc
  items: \'@self.children\'
  limit: 0
display_child_page_titles: true
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025',
        'markdown' => 'This page links to other pages using [embedly](https://embed.ly/cards), a service that allows embedding content from various sources and displaying it in an appealing format.
'
    ]
];

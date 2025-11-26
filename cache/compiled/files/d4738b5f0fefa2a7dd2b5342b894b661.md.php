<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/10.embedlycard/custompagetypes.de.md',
    'modified' => 1754217411,
    'size' => 471,
    'data' => [
        'header' => [
            'title' => 'Eingebettete Seiten',
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
        'frontmatter' => 'title: Eingebettete Seiten
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
        'markdown' => 'Diese Seite verlinkt auf andere Seiten über [embedly](https://embed.ly/cards), ein Service, der es ermöglicht, Inhalte von verschiedenen Quellen einzubetten und in einem ansprechenden Format anzuzeigen.
'
    ]
];

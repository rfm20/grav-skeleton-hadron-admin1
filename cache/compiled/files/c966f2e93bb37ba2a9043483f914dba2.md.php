<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/05.shop/snipcart.en.md',
    'modified' => 1754217411,
    'size' => 654,
    'data' => [
        'header' => [
            'title' => 'Shop',
            'body_classes' => 'fullwidth',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ]
            ],
            'sitemap' => [
                'changefreq' => 'never',
                'priority' => 0.3,
                'lastmod' => '01-08-2025'
            ],
            'date' => '01-08-2025'
        ],
        'frontmatter' => '# TODO: add DE & EN translation with product descriptions but same products within snipcart
# TODO: check if there are style enhancements needed
title: Shop
body_classes: fullwidth
content:
  items: @self.children
  order:
    by: folder
    dir: asc
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025',
        'markdown' => '# Demo Shop
!!! **This is a demo page for a shop with Snipcart in Grav with Hadron. This is not a real shop.**  
!!! For demonstration purposes, the products are not real and the prices are not valid. You can add products to the cart and go through the checkout process, but no real payment will be processed.
'
    ]
];

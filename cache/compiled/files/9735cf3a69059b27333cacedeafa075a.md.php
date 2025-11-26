<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/05.shop/snipcart.de.md',
    'modified' => 1754217411,
    'size' => 688,
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
!!! **Das ist eine Demoseite für einen Shop mit Snipcart in Grav mit Hadron. Dies ist kein echter Shop.**  
!!! Zu Demonstrationszwecken sind die Produkte nicht echt und die Preise nicht gültig. Produkte können zum Warenkorb hinzugefügt werden und den Checkout-Prozess durchlaufen, aber es wird keine echte Zahlung verarbeitet.
'
    ]
];

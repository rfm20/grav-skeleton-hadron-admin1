<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/06.private/default.de.md',
    'modified' => 1754217411,
    'size' => 321,
    'data' => [
        'header' => [
            'title' => 'Private Seite',
            'language' => 'de',
            'sitemap' => [
                'changefreq' => 'never',
                'priority' => 0.3,
                'lastmod' => '01-08-2025'
            ],
            'date' => '01-08-2025',
            'login' => [
                'visibility_requires_access' => true
            ],
            'access' => [
                'site.login' => true
            ]
        ],
        'frontmatter' => 'title: Private Seite
language: de
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025
login:
  visibility_requires_access: true
access:
  site.login: true',
        'markdown' => '# Private Seite

Diese Seite ist nur für angemeldete Benutzer sichtbar. Wenn du dich einloggst, kannst du den Inhalt sehen.
'
    ]
];

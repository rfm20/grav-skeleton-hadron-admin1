<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/03.examples/06.private/default.en.md',
    'modified' => 1754217411,
    'size' => 297,
    'data' => [
        'header' => [
            'title' => 'Private page',
            'language' => 'en',
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
        'frontmatter' => 'title: Private page
language: en
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025
login:
  visibility_requires_access: true
access:
  site.login: true',
        'markdown' => '# Private page

This page is only visible to logged-in users. If you log in, you can see the content.
'
    ]
];

<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/05.examples/08.sections/sections.de.md',
    'modified' => 1754217411,
    'size' => 942,
    'data' => [
        'header' => [
            'title' => 'Multi-Sektion Seite',
            'published' => true,
            'hide_page_title' => true,
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'limit' => 0,
                'taxonomy' => [
                    'filter' => [
                        0 => 'view1',
                        1 => 'view2'
                    ]
                ]
            ],
            'child_type' => 'section',
            'sitemap' => [
                'changefreq' => 'never',
                'priority' => 0.3,
                'lastmod' => '01-08-2025'
            ],
            'date' => '01-08-2025'
        ],
        'frontmatter' => 'title: Multi-Sektion Seite
published: true
hide_page_title: true
content:
  items: \'@self.children\'
  order:
    by: folder
    dir: asc
  limit: 0
  taxonomy:
    filter: [ view1,view2 ]
child_type: section
sitemap:
  changefreq: never
  priority: 0.3
  lastmod: 01-08-2025
date: 01-08-2025',
        'markdown' => '[div class="sections-page-title"]

### Sektionen

[/div]

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie iaculis nisl sed interdum. Praesent mi nisl, efficitur in felis vel, molestie sollicitudin eros. Mauris urna quam, euismod nec lacinia non, dignissim eu odio. Donec nisl nibh, facilisis at nisl vitae, porttitor hendrerit libero. Integer vel neque in ante condimentum malesuada. Mauris dictum nunc enim, non tincidunt arcu tincidunt vel. Aliquam gravida, massa id semper tincidunt, tellus sapien accumsan tortor, in placerat arcu justo ac urna. Vestibulum blandit ultrices neque, eget congue tortor vehicula id.
'
    ]
];

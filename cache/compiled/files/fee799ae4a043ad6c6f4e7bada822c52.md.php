<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/02._highlights/features.en.md',
    'modified' => 1764639790,
    'size' => 314,
    'data' => [
        'header' => [
            'title' => 'Berita & Kegiatan',
            'template' => 'modular/highlights',
            'process' => [
                'twig' => true
            ]
        ],
        'frontmatter' => 'title: Berita & Kegiatan
template: modular/highlights
process:
  twig: true',
        'markdown' => '[owl-carousel items=1 margin=10 loop=true autoplay=true autoplayHoverPause=true nav=true dots=true]
![](image-1.jpg?cropZoom=1280,400)
![](image-2.jpg?cropZoom=1280,400)
![](image-3.jpg?cropZoom=1280,400)
[/owl-carousel]'
    ]
];

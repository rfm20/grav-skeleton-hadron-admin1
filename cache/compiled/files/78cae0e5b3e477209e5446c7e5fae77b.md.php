<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/pages/01.home/02._highlights/highlights.en.md',
    'modified' => 1764728885,
    'size' => 328,
    'data' => [
        'header' => [
            'title' => 'Berita & Kegiatan',
            'template' => 'modular/highlights',
            'process' => [
                'markdown' => true,
                'twig' => true
            ]
        ],
        'frontmatter' => 'title: \'Berita & Kegiatan\'
template: modular/highlights
process:
    markdown: true
    twig: true',
        'markdown' => '[owl-carousel items=1 margin=10 loop=true autoplay=true autoplayHoverPause=true nav=true dots=true]
![](image-1.jpg?cropZoom=1280,400)
![](image-2.jpg?cropZoom=1280,400)
![](image-3.jpg?cropZoom=1280,400)
[/owl-carousel]'
    ]
];

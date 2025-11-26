<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/build/grav/user/config/plugins/tntsearch.yaml',
    'modified' => 1754217411,
    'size' => 536,
    'data' => [
        'enabled' => true,
        'search_route' => '/search',
        'query_route' => '/s',
        'built_in_css' => true,
        'built_in_js' => true,
        'built_in_search_page' => true,
        'enable_admin_page_events' => true,
        'search_type' => 'auto',
        'fuzzy' => true,
        'distance' => 2,
        'phrases' => true,
        'stemmer' => 'no',
        'display_route' => true,
        'display_hits' => true,
        'display_time' => true,
        'live_uri_update' => true,
        'limit' => '20',
        'min' => '3',
        'snippet' => '300',
        'index_page_by_default' => true,
        'scheduled_index' => [
            'enabled' => true,
            'at' => '0 0,6,12,18 * * *',
            'logs' => 'logs/tntsearch-index.out'
        ],
        'filter' => [
            'items' => [
                0 => 'root@.descendants'
            ]
        ],
        'powered_by' => true,
        'search_object_type' => 'Grav'
    ]
];

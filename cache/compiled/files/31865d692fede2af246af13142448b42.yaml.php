<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/config/plugins/quick-tray-links.yaml',
    'modified' => 1754217411,
    'size' => 550,
    'data' => [
        'enabled' => true,
        'links' => [
            0 => [
                'icon' => 'fa fa-book',
                'link' => 'https://tutorials.crabston.ch/grav',
                'tooltip' => 'Grav | Crabston Tutorials',
                'external' => true,
                'authorize' => [
                    'admin.login' => true
                ]
            ],
            1 => [
                'icon' => 'fa fa-life-ring',
                'link' => 'https://crabston.atlassian.net/servicedesk',
                'tooltip' => 'Crabston Support (Portal)',
                'external' => true,
                'authorize' => [
                    'admin.login' => true
                ]
            ],
            2 => [
                'icon' => 'fa fa-envelope',
                'link' => 'mailto:support@crabston.dev',
                'tooltip' => 'Crabston Support (E-Mail)',
                'external' => true,
                'authorize' => [
                    'admin.login' => true
                ]
            ]
        ]
    ]
];

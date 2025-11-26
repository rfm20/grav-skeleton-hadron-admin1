<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/grav-skeleton-hadron+admin1/user/config/backups.yaml',
    'modified' => 1754217411,
    'size' => 558,
    'data' => [
        'purge' => [
            'trigger' => 'space',
            'max_backups_count' => 25,
            'max_backups_space' => 5,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Datenbackup',
                'root' => '/user',
                'exclude_paths' => '/plugins
/themes/quark
/themes/hadron',
                'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules',
                'schedule' => true,
                'schedule_at' => '0 0 * * 1'
            ],
            1 => [
                'name' => 'Systembackup',
                'root' => '/',
                'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules',
                'schedule' => true,
                'schedule_at' => '0 0 1 * *'
            ]
        ]
    ]
];

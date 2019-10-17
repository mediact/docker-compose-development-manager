<?php
return [
    'backend' =>
        [
            'frontName' => 'admin',
        ],
    'crypt' =>
        [
            'key' => 'development',
        ],
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host'                  => 'redismaster',
            'port'                  => '6379',
            'password'              => '',
            'timeout'               => '2.5',
            'persistent_identifier' => '',
            'database'              => '2',
            'compression_threshold' => '2048',
            'compression_library'   => 'gzip',
            'log_level'             => '1',
            'max_concurrency'       => '6',
            'break_after_frontend'  => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime'        => '600',
            'bot_first_lifetime'    => '60',
            'bot_lifetime'          => '7200',
            'disable_locking'       => '0',
            'min_lifetime'          => '60',
            'max_lifetime'          => '2592000',
        ]
    ],
    'db' =>
        [
            'table_prefix' => '',
            'connection' =>
                [
                    'default' =>
                        [
                            'host' => '{{database_host}}',
                            'dbname' => '{{database_name}}',
                            'username' => '{{database_user}}',
                            'password' => '{{database_password}}',
                            'model' => 'mysql4',
                            'engine' => 'innodb',
                            'initStatements' => 'SET NAMES utf8;',
                            'active' => '1',
                        ],
                ],
        ],
    'resource' =>
        [
            'default_setup' =>
                [
                    'connection' => 'default',
                ],
        ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'cache_types' =>
        [
            'config' => 1,
            'layout' => 1,
            'block_html' => 1,
            'collections' => 1,
            'reflection' => 1,
            'db_ddl' => 1,
            'eav' => 1,
            'customer_notification' => 1,
            'full_page' => 1,
            'config_integration' => 1,
            'target_rule' => 1,
            'config_integration_api' => 1,
            'translate' => 1,
            'config_webservice' => 1,
        ],
    'install' =>
        [
            'date' => '{{rfc2822_date}}',
        ],
    'system' => [
        'default' => [
            'web' => [
                'unsecure' => [
                    'base_url' => '{{base_url}}',
                    'base_link_url' => '{{base_url}}',
                    'base_static_url' => '{{base_url}}static/',
                    'base_media_url' => '{{base_url}}media/',
                ],
                'secure' => [
                    'base_url' => '{{base_url}}',
                    'base_link_url' => '{{base_url}}',
                    'base_static_url' => '{{base_url}}static/',
                    'base_media_url' => '{{base_url}}media/',
                ],
                'seo' => [
                    'use_rewrites' => '1',
                ]
            ],
            'admin' => [
                'security' => [
                    'use_form_key' => '0',
                    'admin_account_sharing' => '1',
                ],
            ],
            'cms' => [
                'wysiwyg' => [
                    'enabled' => '0',
                ],
            ],
            'system' => [
                'full_page_cache' => [
                    'caching_application' => '{{caching_application}}',
                    'varnish' => [
                        'backend_host' => '127.0.0.1',
                        'backend_port' => '8080'
                    ]
                ]
            ]
        ]
    ],
    'cache' => [
        'frontend' =>[
            'default' =>[
                'backend'         => 'Cm_Cache_Backend_Redis',
                'backend_options' =>[
                    'server'        => '127.0.0.1',
                    'port'          => '6379',
                    'database'      => '0',
                ],
            ],
            'page_cache' =>[
                'backend'         => 'Cm_Cache_Backend_Redis',
                'backend_options' =>[
                    'server'        => '127.0.0.1',
                    'port'          => '6379',
                    'database'      => '1',
                    'compress_data' => '0',
                ],
            ],
        ],
    ],
    'http_cache_hosts' => [
        [
            'host' => '127.0.0.1',
            'port' => '6081'
        ]
    ]
];

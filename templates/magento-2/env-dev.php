<?php

return [
    'backend' => [
        'frontName' => getenv('BACKEND__FRONT_NAME'),
    ],
    'crypt' => [
        'key' => getenv('CRYPT__KEY'),
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => getenv('DB__CONNECTION__INDEXER__HOST'),
                'dbname' => getenv('DB__CONNECTION__INDEXER__DBNAME'),
                'username' => getenv('DB__CONNECTION__INDEXER__USERNAME'),
                'password' => getenv('DB__CONNECTION__INDEXER__PASSWORD'),
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null,
            ],
            'default' => [
                'host' => getenv('DB__CONNECTION__DEFAULT__HOST'),
                'dbname' => getenv('DB__CONNECTION__DEFAULT__DBNAME'),
                'username' => getenv('DB__CONNECTION__DEFAULT__USERNAME'),
                'password' => getenv('DB__CONNECTION__DEFAULT__PASSWORD'),
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
            ],
        ],
        'table_prefix' => ''
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default',
        ],
    ],
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => getenv('SESSION__REDIS__HOST'),
            'port' => getenv('SESSION__REDIS__PORT'),
            'password' => getenv('SESSION__REDIS__PASSWORD'),
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => getenv('SESSION__REDIS__DATABASE'),
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '600',
            'bot_lifetime' => '60',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0',
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => getenv('MAGE_MODE'),
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'target_rule' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1,
    ],
    'install' => [
        'date' => '$(date -R)',
    ],
    'queue' => [
        'amqp' => [
            'host' => getenv('QUEUE__AMQP__HOST'),
            'port' => getenv('QUEUE__AMQP__PORT'),
            'user' => getenv('QUEUE__AMQP__USER'),
            'password' => getenv('QUEUE__AMQP__PASSWORD'),
            'virtualhost' => getenv('QUEUE__AMQP__VIRTUALHOST'),
        ],
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '40d_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => getenv('CACHE__FRONTEND__DEFAULT__BACKEND_OPTIONS__HOST'),
                    'port' => getenv('CACHE__FRONTEND__DEFAULT__BACKEND_OPTIONS__PORT'),
                    'database' => getenv('CACHE__FRONTEND__DEFAULT__BACKEND_OPTIONS__DATABASE'),
                    'password' => getenv('CACHE__FRONTEND__DEFAULT__BACKEND_OPTIONS__PASSWORD'),
                    'compress_data' => '1',
                    'compression_lib' => '',
                ],
            ],
            'page_cache' => [
                'id_prefix' => '40d_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => getenv('CACHE__FRONTEND__PAGE_CACHE__BACKEND_OPTIONS__HOST'),
                    'port' => getenv('CACHE__FRONTEND__PAGE_CACHE__BACKEND_OPTIONS__PORT'),
                    'database' => getenv('CACHE__FRONTEND__PAGE_CACHE__BACKEND_OPTIONS__DATABASE'),
                    'password' => getenv('CACHE__FRONTEND__PAGE_CACHE__BACKEND_OPTIONS__PASSWORD'),
                    'compress_data' => '0',
                    'compression_lib' => '',
                ],
            ],
        ],
    ],
];

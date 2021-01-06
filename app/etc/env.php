<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'd8b9ecd9a2fe77f532b67560d1279926'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento2',
                'username' => 'debian-sys-maint',
                'password' => 'Bamo0jocYUM0NHKo',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'f73_'
            ],
            'page_cache' => [
                'id_prefix' => 'f73_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'directories' => [
        'document_root_is_pub' => false
    ],
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
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'install' => [
        'date' => 'Mon, 04 Jan 2021 15:07:51 +0000'
    ],
    'system' => [
        'default' => [
            'admin' => [
                'url' => [
                    'custom' => null
                ]
            ],
            'dev' => [
                'js' => [
                    'session_storage_key' => 'collected_errors'
                ],
                'restrict' => [
                    'allow_ips' => null
                ]
            ],
            'system' => [
                'smtp' => [
                    'host' => 'localhost',
                    'port' => '25'
                ]
            ],
            'web' => [
                'unsecure' => [
                    'base_url' => 'http://koalastore.magento2.localhost/',
                    'base_link_url' => '{{unsecure_base_url}}',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'secure' => [
                    'base_url' => 'http://koalastore.magento2.localhost/',
                    'base_link_url' => '{{secure_base_url}}',
                    'base_static_url' => null,
                    'base_media_url' => null
                ],
                'default' => [
                    'front' => 'cms'
                ],
                'cookie' => [
                    'cookie_path' => null,
                    'cookie_domain' => null
                ]
            ],
            'adobe_ims' => [
                'integration' => [
                    'api_key' => null,
                    'private_key' => null
                ]
            ],
            'currency' => [
                'import' => [
                    'error_email' => null
                ]
            ],
            'catalog' => [
                'search' => [
                    'elasticsearch5_server_hostname' => 'localhost',
                    'elasticsearch5_server_port' => '9200',
                    'elasticsearch5_index_prefix' => 'magento2',
                    'elasticsearch5_enable_auth' => '0',
                    'elasticsearch5_server_timeout' => '15',
                    'elasticsearch6_server_hostname' => 'localhost',
                    'elasticsearch6_server_port' => '9200',
                    'elasticsearch6_index_prefix' => 'magento2',
                    'elasticsearch6_enable_auth' => '0',
                    'elasticsearch6_server_timeout' => '15',
                    'elasticsearch7_server_hostname' => 'localhost',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch7_index_prefix' => 'magento2',
                    'elasticsearch7_enable_auth' => '0',
                    'elasticsearch7_server_timeout' => '15'
                ],
                'productalert_cron' => [
                    'error_email' => null
                ]
            ],
            'cataloginventory' => [
                'source_selection_distance_based_google' => [
                    'api_key' => null
                ]
            ],
            'payment' => [
                'payflowpro' => [
                    'user' => null,
                    'pwd' => null
                ],
                'payflow_link' => [
                    'pwd' => null,
                    'url_method' => 'GET'
                ],
                'payflow_advanced' => [
                    'user' => null,
                    'pwd' => null,
                    'url_method' => 'GET'
                ],
                'braintree' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'contact' => [
                'email' => [
                    'recipient_email' => 'hello@example.com'
                ]
            ],
            'carriers' => [
                'dhl' => [
                    'account' => null,
                    'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
                    'id' => null,
                    'password' => null
                ],
                'fedex' => [
                    'account' => null,
                    'meter_number' => null,
                    'key' => null,
                    'password' => null,
                    'sandbox_mode' => '0',
                    'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
                    'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/'
                ],
                'ups' => [
                    'access_license_number' => null,
                    'gateway_url' => 'https://www.ups.com/using/services/rave/qcostcgi.cgi',
                    'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
                    'tracking_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Track',
                    'username' => null,
                    'password' => null,
                    'is_account_live' => '0'
                ],
                'usps' => [
                    'gateway_url' => 'http://production.shippingapis.com/ShippingAPI.dll',
                    'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
                    'userid' => null,
                    'password' => null
                ]
            ],
            'trans_email' => [
                'ident_custom1' => [
                    'email' => 'custom1@example.com',
                    'name' => 'Custom 1'
                ],
                'ident_custom2' => [
                    'email' => 'custom2@example.com',
                    'name' => 'Custom 2'
                ],
                'ident_general' => [
                    'email' => 'owner@example.com',
                    'name' => 'Owner'
                ],
                'ident_sales' => [
                    'email' => 'sales@example.com',
                    'name' => 'Sales'
                ],
                'ident_support' => [
                    'email' => 'support@example.com',
                    'name' => 'CustomerSupport'
                ]
            ],
            'analytics' => [
                'url' => [
                    'signup' => 'https://advancedreporting.rjmetrics.com/signup',
                    'update' => 'https://advancedreporting.rjmetrics.com/update',
                    'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
                    'otp' => 'https://advancedreporting.rjmetrics.com/otp',
                    'report' => 'https://advancedreporting.rjmetrics.com/report',
                    'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
                ]
            ],
            'newrelicreporting' => [
                'general' => [
                    'api_url' => 'https://api.newrelic.com/deployments.xml',
                    'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events'
                ]
            ],
            'paypal' => [
                'wpp' => [
                    'api_password' => null,
                    'api_signature' => null,
                    'api_username' => null
                ],
                'fetch_reports' => [
                    'ftp_login' => null,
                    'ftp_password' => null
                ]
            ],
            'recaptcha_backend' => [
                'type_recaptcha' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_invisible' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_recaptcha_v3' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'recaptcha_frontend' => [
                'type_recaptcha' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_invisible' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_recaptcha_v3' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'sitemap' => [
                'generate' => [
                    'error_email' => null
                ]
            ],
            'crontab' => [
                'default' => [
                    'jobs' => [
                        'analytics_subscribe' => [
                            'schedule' => [
                                'cron_expr' => '0 * * * *'
                            ]
                        ],
                        'analytics_collect_data' => [
                            'schedule' => [
                                'cron_expr' => '00 02 * * *'
                            ]
                        ]
                    ]
                ]
            ],
            'klarna' => [
                'api' => [
                    'merchant_id' => null,
                    'shared_secret' => null,
                    'test_mode' => '1',
                    'debug' => '1'
                ]
            ]
        ],
        'websites' => [
            'doctor_fit' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'http://doctorfit.magento2.localhost/',
                        'base_link_url' => 'http://doctorfit.magento2.localhost/'
                    ],
                    'secure' => [
                        'base_url' => 'http://doctorfit.magento2.localhost/',
                        'base_link_url' => 'http://doctorfit.magento2.localhost/'
                    ]
                ]
            ]
        ]
    ]
];

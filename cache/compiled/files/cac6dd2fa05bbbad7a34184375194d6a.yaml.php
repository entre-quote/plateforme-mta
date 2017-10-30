<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/MTA/plateforme-mta/user/plugins/login/blueprints.yaml',
    'modified' => 1509087390,
    'data' => [
        'name' => 'Login',
        'version' => '2.4.3',
        'description' => 'Enables user authentication and login screen.',
        'icon' => 'sign-in',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'admin, plugin, login',
        'homepage' => 'https://github.com/getgrav/grav-plugin-login',
        'bugs' => 'https://github.com/getgrav/grav-plugin-login/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.3.5'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=2.4.0'
            ],
            2 => [
                'name' => 'email',
                'version' => '~2.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'login' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.BTN_LOGIN',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'hidden',
                                    'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'built_in_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'help' => 'PLUGIN_LOGIN.BUILTIN_CSS_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'route' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE',
                                    'help' => 'PLUGIN_LOGIN.ROUTE_HELP',
                                    'placeholder' => '/my-custom-login'
                                ],
                                'redirect_after_login' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                                    'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN_HELP',
                                    'placeholder' => '/my-page'
                                ],
                                'route_forgot' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                                    'placeholder' => '/forgot_password'
                                ],
                                'route_reset' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                                    'placeholder' => '/reset_password'
                                ],
                                'route_profile' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                                    'placeholder' => '/user_profile'
                                ],
                                'parent_acl' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.USE_PARENT_ACL_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'protect_protected_page_media' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'help' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_HELP',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'routes' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.ROUTES',
                                    'fields' => [
                                        'route_activate' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'PLUGIN_LOGIN.ROUTE_ACTIVATE',
                                            'placeholder' => '/activate_user'
                                        ],
                                        'route_forgot' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                                            'placeholder' => '/forgot_password'
                                        ],
                                        'route_reset' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                                            'placeholder' => '/reset_password'
                                        ],
                                        'route_profile' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                                            'placeholder' => '/user_profile'
                                        ],
                                        'route_register' => [
                                            'type' => 'text',
                                            'size' => 'medium',
                                            'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                                            'help' => 'PLUGIN_LOGIN.ROUTE_REGISTER_HELP',
                                            'placeholder' => '/register'
                                        ],
                                        'user_registration.redirect_after_registration' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                                            'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION_HELP',
                                            'placeholder' => '/page-to-show-after-registration'
                                        ],
                                        'user_registration.redirect_after_activation' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                                            'help' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION_HELP',
                                            'placeholder' => '/page-to-show-after-activation'
                                        ]
                                    ]
                                ],
                                'rememberme' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.REMEMBER_ME',
                                    'fields' => [
                                        'rememberme.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_ADMIN.ENABLED',
                                            'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'rememberme.timeout' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'default' => 604800,
                                            'label' => 'PLUGIN_ADMIN.TIMEOUT',
                                            'help' => 'PLUGIN_LOGIN.TIMEOUT_HELP',
                                            'validate' => [
                                                'type' => 'number',
                                                'min' => 1
                                            ]
                                        ],
                                        'rememberme.name' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADMIN.NAME',
                                            'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'registration' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.USER_REGISTRATION',
                            'fields' => [
                                'user_registration.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                    'help' => 'PLUGIN_LOGIN.USER_REGISTRATION_ENABLED_HELP',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'registration_fields' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                                    'fields' => [
                                        'user_registration.fields' => [
                                            'type' => 'array',
                                            'value_only' => true,
                                            'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                                            'help' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS_HELP',
                                            'placeholder_key' => 'PLUGIN_LOGIN.REGISTRATION_FIELD_KEY',
                                            'placeholder_value' => 'PLUGIN_LOGIN.REGISTRATION_FIELD_VALUE'
                                        ],
                                        'user_registration.default_values' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                                            'help' => 'PLUGIN_LOGIN.DEFAULT_VALUES_HELP',
                                            'placeholder_key' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_KEY',
                                            'placeholder_value' => 'PLUGIN_LOGIN.ADDITIONAL_PARAM_VALUE'
                                        ]
                                    ]
                                ],
                                'access_levels' => [
                                    'title' => 'PLUGIN_ADMIN.ACCESS_LEVELS',
                                    'type' => 'section',
                                    'security' => 'admin.super',
                                    'fields' => [
                                        'user_registration.groups' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADMIN.GROUPS',
                                            '@data-options' => '\\Grav\\User\\Groups::groups',
                                            'classes' => 'fancy',
                                            'help' => 'PLUGIN_LOGIN.GROUPS_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'user_registration.access.site' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                                            'help' => 'PLUGIN_LOGIN.SITE_ACCESS_HELP',
                                            'multiple' => false,
                                            'validate' => [
                                                'type' => 'array'
                                            ]
                                        ]
                                    ]
                                ],
                                'options' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_LOGIN.OPTIONS',
                                    'fields' => [
                                        'user_registration.options.validate_password1_and_password2' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                                            'help' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.set_user_disabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                                            'help' => 'PLUGIN_LOGIN.SET_USER_DISABLED_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.login_after_registration' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                                            'help' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_activation_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_notification_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'user_registration.options.send_welcome_email' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                                            'help' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'Security' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_LOGIN.SECURITY_TAB',
                            'fields' => [
                                'max_pw_resets_count' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                                    'help' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT_HELP',
                                    'append' => 'PLUGIN_LOGIN.RESETS',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'max_pw_resets_interval' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                                    'help' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL_HELP',
                                    'append' => 'PLUGIN_LOGIN.SECONDS',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ],
                                'max_login_count' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                                    'help' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT_HELP',
                                    'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ],
                                'max_login_interval' => [
                                    'type' => 'number',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                                    'help' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL_HELP',
                                    'append' => 'PLUGIN_LOGIN.SECONDS',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

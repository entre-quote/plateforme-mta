<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/MTA/plateforme-mta/user/themes/starter/blueprints.yaml',
    'modified' => 1519197559,
    'data' => [
        'name' => 'starter',
        'version' => '0.1.0',
        'description' => 'starter entre-quote theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'newick',
            'email' => 'erick@entre-quote.com'
        ],
        'homepage' => 'https://github.com/newick/grav-theme-starter',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/newick/grav-theme-starter/issues',
        'readme' => 'https://github.com/newick/grav-theme-starter/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

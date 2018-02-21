<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Downloads/grav-admin/user/config/site.yaml',
    'modified' => 1519197558,
    'data' => [
        'title' => 'Plateforme MTA',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Plateforme MTA',
            'email' => 'contact@plateforme-mta.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];

<?php

return [
    'site' => [
        'title' => 'Ranie Santos',
        'description' => 'THE SITE DESCRIPTION', // change this
        'image' => 'https://some-external-cdn.com/share.png', // change this
        'owner' => [
            'name' => 'Ranie Santos',
            'twitter' => 'https://twitter.com/raniesantos32',
            'github' => 'https://github.com/raniesantos',
        ],
    ],
    'baseUrl' => 'https://raniesantos.github.io',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'sort' => '-date',
            'isPost' => true,
        ],
    ],
    'excerpt' => function ($page, $limit = 250) {
        return $page->isPost
            ? str_limit(strip_tags($page->getContent()), $limit, '...')
            : null;
    },
];

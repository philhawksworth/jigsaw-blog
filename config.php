<?php

return [
    'site' => [
        'title' => 'Ranie Santos',
        'description' => 'Personal blog of Ranie Santos. Laravel fanboy, code linting zealot, podcast junkie, lives in Linux',
        'image' => 'https://some-external-cdn.com/share.png', // change this
        'disqusShortname' => 'raniesantos',
        'owner' => [
            'name' => 'Ranie Santos',
            'twitter' => 'https://twitter.com/raniesantos32',
            'github' => 'https://github.com/raniesantos',
        ],
    ],
    'baseUrl' => 'https://raniesantos.netlify.com',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'blog/tags/{filename}',
        ],
    ],
    'excerpt' => function ($page, $limit = 250) {
        return $page->isPost
            ? str_limit(strip_tags($page->getContent()), $limit, '...')
            : null;
    },
    'allTags' => function ($page, $posts) {
        return $posts->pluck('tags')->flatten()->unique();
    },
    'filterByTag' => function ($page, $posts, $tag) {
        return $posts->filter(function ($post) use ($tag) {
            return in_array($tag, $post->tags);
        });
    },
];

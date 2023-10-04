<?php

use App\ContentParsers\MarkdownWithFrontMatterParser;
use App\Models\Post;

return [
    'default_collection' => null,

    'collections' => [
        'posts' => [
            'disk' => 'posts',
            'sheet_class' => Post::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
            // 'content_parser' => Spatie\Sheets\ContentParsers\MarkdownWithFrontMatterParser::class,
            'content_parser' => MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],
    ],
];

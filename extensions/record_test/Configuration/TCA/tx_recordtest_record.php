<?php

return [
    'ctrl' => [
        'title' => 'Record',
        'label' => 'title',
        'crdate' => 'crdate',
        'tstamp' => 'tstamp'
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input'
            ]
        ],
        'custom_description' => [
            'label' => 'Custom description',
            'config' => [
                'type' => 'text'
            ]
        ],
        'bodytext' => [
            'label' => 'Bodytext',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true
            ],
        ],
        'slug' => [
            'label' => 'URL segment',
            'config' => [
                'type' => 'slug',
                'generatorOptions' => [
                    'fields' => ['title'],
                    'replacements' => [
                        '/' => '',
                    ],
                ],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
                'default' => ''
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'title,custom_description,slug,bodytext'
        ]
    ]
];

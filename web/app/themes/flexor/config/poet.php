<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Here you may specify the post types to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    // 'post' => [
    //     'book' => [
    //         'enter_title_here' => 'Enter book title',
    //         'menu_icon' => 'dashicons-book-alt',
    //         'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
    //         'show_in_rest' => true,
    //         'has_archive' => false,
    //         'labels' => [
    //             'singular' => 'Book',
    //             'plural' => 'Books',
    //         ],
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you may specify the taxonomies to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    // 'taxonomy' => [
    //     'genre' => [
    //         'links' => ['book'],
    //         'meta_box' => 'radio',
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | Blocks
    |--------------------------------------------------------------------------
    |
    | Here you may specify the block types to be registered by Poet and
    | rendered using Blade.
    |
    | Blocks are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the block `sage/accordion`, your block view would be located at:
    |   ↪ `views/blocks/accordion.blade.php`
    |
    | Block views have the following variables available:
    |   ↪ $data    – An object containing the block data.
    |   ↪ $content – A string containing the InnerBlocks content.
    |                Returns `null` when empty.
    |
    */

    'block' => [
        'sage/swiperlogo' => [
            'attributes' => [
                'images' => [
                    'type' => 'array',
                    'default' => [],
                ],
                'imagesAlt' => [
                    'type' => 'array',
                    'default' => [],
                ],
                'totalImage' => [
                    'type' => 'number',
                    'default' => 0,
                ],
            ],
        ],
        'sage/testimonials' => [
            'attributes' => [
                'clients' => [
                    'type' => 'array',
                    'default' => []
                ],
                'classNames' => [
                    'type' => 'string',
                    'default' => ''
                ],
                'styles' => [
                    'type' => 'object',
                    'default' => (object)[]
                ]
            ],
        ],
        'sage/icon' => [
            'attributes' => [
                'icon' => [
                    'type' => 'object',
                    'default' => (object)[]
                ],
                'link' => [
                    'type' => 'string'
                ],
                'target' => [
                    'type' => 'boolean',
                    'default' => false
                ],
                'color' => [
                    'type' => 'string',
                ],
                'size' => [
                    'type' => 'string',
                    'default' => '16px'
                ],
                'defaultIconStyle' => [
                    'type' => 'boolean',
                    'default' => false
                ],
                'hover' => [
                    'type' => 'string',
                    'enum' => ['hover', 'nohover'],
                    'default' => 'hover'
                ],
                'paddingIconStyle' => [
                    'type' => 'array',
                    'default' => [
                        'top' => '22px',
                        'bottom' => '22px',
                        'left' => '22px',
                        'right' => '22px'
                    ]
                ]
            ]
        ],
        'sage/faq' => [
            'attributes' => [
                'faq' => [
                    'type' => 'object',
                    'default' => (object)[]
                ]
            ]
        ],
        'sage/link' => [
            'attributes' => [
                'link' => [
                    'type' => 'string'
                ],
                'newTab' => [
                    'type' => 'boolean',
                    'default' => false
                ],
                'text' => [
                    'type' => 'string'
                ],
                'border' => [
                    'type' => 'object'
                ],
                'borderRadius' => [
                    'type' => 'object',
                    'default' => [
                        'top' => '0px',
                        'left' => '0px',
                        'right' => '0px',
                        'bottom' => '0px'
                    ]
                ]
            ]
        ],
        'sage/fixed' => [
            'attributes' => [
                'title' => [
                    'type' => 'string'
                ],
                'mobilePosition' => [
                    'type' => 'string',
                    'default' => 'bottom right'
                ],
                'size' => [
                    'type' => 'string',
                    'default' => '40px'
                ],
                'icon' => [
                    'type' => 'object'
                ],
                'paddingIcon' => [
                    'type' => 'object',
                    'default' => [
                        'top' => '22px',
                        'bottom' => '22px',
                        'left' => '22px',
                        'right' => '22px'
                    ]
                ],
                'marginMobile' => [
                    'type' => 'object',
                    'default' => [
                        'top' => '0px',
                        'bottom' => '0px',
                        'left' => '0px',
                        'right' => '0px'
                    ]
                ],
                'iconColor' => [
                    'type' => 'string'
                ],
                'backgroundIconColor' => [
                    'type' => 'string'
                ],
                'border' => [
                    'type' => 'object'
                ],
                'borderRadius' => [
                    'type' => 'object',
                    'default' => [
                        'top' => '0px',
                        'left' => '0px',
                        'right' => '0px',
                        'bottom' => '0px'
                    ]
                ]
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block categories to be registered by Poet for use
    | in the editor.
    |
    */

    'block_category' => [
        'flexor' => [
            'title' => 'Flexor',
            'icon' => 'art',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Patterns
    |--------------------------------------------------------------------------
    |
    | Here you may specify block patterns to be registered by Poet for use
    | in the editor.
    |
    | Patterns are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the pattern `sage/hero`, your pattern content would be located at:
    |   ↪ `views/block-patterns/hero.blade.php`
    |
    | See: https://developer.wordpress.org/reference/functions/register_block_pattern/
    */

    'block_pattern' => [
        // 'sage/hero' => [
        //     'title' => 'Page Hero',
        //     'description' => 'Draw attention to the main focus of the page, and highlight key CTAs',
        //     'categories' => ['all'],
        // ],
        'sage/banner' => [
            'title' => 'Banner',
            'description' => 'Home Page Banner',
            'categories' => ['home'],
            'keywords' => ['banner', 'home', 'images'],
        ],
        'sage/about' => [
            'title' => 'About Us',
            'description' => 'Home Page About Us',
            'categories' => ['home'],
            'keywords' => ['about', 'two columns', 'image', 'text'],
        ],
        'sage/services' => [
            'title' => 'Services',
            'description' => 'Home Page Services',
            'categories' => ['services'],
            'keywords' => ['icons', 'services'],
        ],
        'sage/altservices' => [
            'title' => 'Alternate Services',
            'description' => 'Features/Services',
            'categories' => ['services'],
            'keywords' => ['alt', 'services'],
        ],
        'sage/testimonials' => [
            'title' => 'Testimonials',
            'description' => 'Testimonials',
            'categories' => ['testimonials'],
            'keywords' => ['testimonial', 'clients'],
        ],
        'sage/teams' => [
            'title' => 'Teams',
            'description' => 'Teams Section',
            'categories' => ['about'],
            'keywords' => ['about', 'teams']
        ],
        'sage/pricing' => [
            'title' => 'Pricing',
            'description' => 'Pricing Section',
            'categories' => ['pricing'],
            'keywords' => ['pricing', 'price', 'columns']
        ],
        'sage/faq' => [
            'title' => 'FAQ',
            'description' => 'FAQ Section',
            'categories' => ['faq'],
            'keywords' => ['faq', 'frequent asked questions', 'questions']
        ],
        'sage/posts' => [
            'title' => 'News & Events',
            'description' => 'News & Events Section',
            'categories' => ['posts'],
            'keywords' => ['blogs', 'post', 'posts', 'events', 'news']
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Pattern Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block pattern categories to be registered by Poet for
    | use in the editor.
    |
    */

    'block_pattern_category' => [
        'home' => [
            'label' => 'Home',
        ],
        'blog' => [
            'label' => 'Blog',
        ],
        'testimonials' => [
            'label' => 'Testimonials'
        ],
        'pricing' => [
            'label' => 'Pricing'
        ],
        'faq' => [
            'label' => 'FAQ'
        ],
        'posts' => [
            'label' => 'Posts'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Palette
    |--------------------------------------------------------------------------
    |
    | Here you may specify the color palette registered in the Gutenberg
    | editor.
    |
    | A color palette can be passed as an array or by passing the filename of
    | a JSON file containing the palette.
    |
    | If a color is passed a value directly, the slug will automatically be
    | converted to Title Case and used as the color name.
    |
    | If the palette is explicitly set to `true` – Poet will attempt to
    | register the palette using the default `palette.json` filename generated
    | by <https://github.com/roots/palette-webpack-plugin>
    |
    */

    'palette' => [],

    /*
    |--------------------------------------------------------------------------
    | Admin Menu
    |--------------------------------------------------------------------------
    |
    | Here you may specify admin menu item page slugs you would like moved to
    | the Tools menu in an attempt to clean up unwanted core/plugin bloat.
    |
    | Alternatively, you may also explicitly pass `false` to any menu item to
    | remove it entirely.
    |
    */

    'admin_menu' => [
        // 'gutenberg',
    ],
];

<?php

/**
 * Customizer controls and options
 * 
 * @package WordPress
 */

use Kirki\Util\Helper;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Do not proceed if Kirki does not exist.
if (!class_exists('Kirki')) {
    return;
}

Kirki::add_config(
    'theme_options_config',
    [
        'option_type' => 'theme_mod',
        'capability'  => 'manage_options',
    ]
);

/**
 * Add a panel
 */
$panel_id = 'theme_options';
new \Kirki\Panel(
    $panel_id,
    [
        'priority'    => 10,
        'title'       => __('Opções do Tema'),
    ]
);

$sections = [
    'contact' => __('Contatos'),
    'blog' => __('Blog'),
    'home' => 'Home',
];

$section_title_class = 'customize-section-title';

/**
 * Add all sections
 */
foreach ($sections as $section_id => $title) {
    $section_args = [
        'title' => $title,
        'panel' => $panel_id
    ];

    new \Kirki\Section(
        $section_id,
        $section_args
    );
}


/** ----- Contatos ----- */

$section = 'contact';

new \Kirki\Field\URL(
    [
        'settings' => 'portal_cliente',
        'label'    => __('Link do Portal do Cliente'),
        'section'  => $section,
    ]
);

new \Kirki\Field\Generic(
    [
        'settings'    => 'info_title',
        'section'     => $section,
        'default'   => 'Contatos',
        'choices'     => [
            'element' => 'h3',
            'class'   => $section_title_class,
        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'info_phone',
        'label'    => __('Telefone'),
        'section'  => $section,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'info_whatsapp',
        'label'    => __('WhatsApp'),
        'section'  => $section,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'info_email',
        'label'    => __('Email'),
        'section'  => $section,
    ]
);

new \Kirki\Field\Editor(
    [
        'settings' => 'info_address',
        'label'    => __('Endereço'),
        'section'  => $section,
    ]
);


new \Kirki\Field\Generic(
    [
        'settings'    => 'social_title',
        'section'     => $section,
        'default'   => 'Redes Sociais',
        'choices'     => [
            'element' => 'h3',
            'class'   => $section_title_class,
        ],
    ]
);

new \Kirki\Field\Repeater(
    [
        'settings'    => 'social_icons',
        'label'       => __('Ícones Redes Sociais'),
        'section'     => $section,
        'button_label' => esc_html__('Adicionar nova'),
        'row_label' => [
            'type'  => 'field',
            'value' => __('Ícone'),
            'field' => 'icon',
        ],
        'default'     => [
            [
                'icon' => 'facebook',
                'url'  => 'https://www.facebook.com/',
            ],
            [
                'icon' => 'instagram',
                'url'  => 'https://www.instagram.com/',
            ],
        ],
        'fields'      => [
            'icon' => [
                'type' => 'text',
                'label' => __('Ícone'),
                'description' => __('Utilize os ícones do') . ' Bootstrap Icons',
            ],
            'url'  => [
                'type' => 'text',
                'label' => __('Link'),
            ],
        ],
    ]
);

/** ----- Blog ----- */

$section = 'blog';

new \Kirki\Field\Generic(
    [
        'settings'    => 'cta_blog',
        'section'     => $section,
        'default'   => 'CTA Blog',
        'choices'     => [
            'element' => 'h3',
            'class'   => $section_title_class,
        ],
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'cta_blog_title',
        'label'    => __('Título'),
        'section'  => $section,
    ]
);

new \Kirki\Field\Editor(
    [
        'settings' => 'cta_blog_text',
        'label'    => __('Texto'),
        'section'  => $section,
    ]
);

/** ----- Home ----- */

$section = 'home';

new \Kirki\Field\Generic(
    [
        'settings'    => 'lux_no_caminho',
        'section'     => $section,
        'default'   => 'Uma Lux no seu caminho',
        'choices'     => [
            'element' => 'h3',
            'class'   => $section_title_class,
        ],
    ]
);

new \Kirki\Field\Editor(
    [
        'settings' => 'lux_no_caminho_text',
        'label'    => __('Texto'),
        'section'  => $section,
    ]
);


new \Kirki\Field\Image(
    [
        'settings' => 'lux_no_caminho_image',
        'label'    => __('Imagem'),
        'section'  => $section,
    ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'link_consultoria',
        'label'    => __('Link "consultoria de marketing"'),
        'section'  => $section,
        ]
);

new \Kirki\Field\URL(
    [
        'settings' => 'link_trabalhar',
        'label'    => __('Link "trabalhar com a Lux Digital"'),
        'section'  => $section,
    ]
);
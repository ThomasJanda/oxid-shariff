<?php
$sMetadataVersion = '2.0';

$aModule = array(
    'id'          => 'rs-shariff',
    'title'       => '*RS Shariff',
    'description' => 'Social media buttons',
    'thumbnail'   => '',
    'version'     => '0.0.1',
    'author'      => '',
    'url'         => '',
    'email'       => '',
    'extend'      => array(
        \OxidEsales\Eshop\Core\ViewConfig::class => rs\shariff\Core\ViewConfig::class,
    ),
    'controllers' => array(),
    'templates'   => array(
        'rs/shariff/views/tpl/layout/footer__dd_footer_social_links.tpl'        => 'rs/shariff/views/tpl/layout/footer__dd_footer_social_links.tpl',
        'rs/shariff/views/tpl/layout/base__base_style.tpl'        => 'rs/shariff/views/tpl/layout/base__base_style.tpl',
        'rs/shariff/views/tpl/layout/base__base_js.tpl'           => 'rs/shariff/views/tpl/layout/base__base_js.tpl',
        'rs/shariff/views/tpl/page/details/inc/productmain__details_productmain_productlinksselector.tpl'   => 'rs/shariff/views/tpl/page/details/inc/productmain__details_productmain_productlinksselector.tpl',
    ),
    'blocks'      => array(
        array(
            'template' => 'layout/footer.tpl',
            'block'    => 'dd_footer_social_links',
            'file'     => '/views/blocks/layout/footer__dd_footer_social_links.tpl',
        ),
        array(
            'template' => 'layout/base.tpl',
            'block'    => 'base_style',
            'file'     => '/views/blocks/layout/base__base_style.tpl',
        ),
        array(
            'template' => 'layout/base.tpl',
            'block'    => 'base_js',
            'file'     => '/views/blocks/layout/base__base_js.tpl',
        ),
        array(
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_productlinksselector',
            'file'     => '/views/blocks/page/details/inc/productmain__details_productmain_productlinksselector.tpl',
        ),
    ),
    'settings'    => array(
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_with_jquery',
            'type'  => 'bool',
            'value' => false,
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_with_font_awesome',
            'type'  => 'bool',
            'value' => false,
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_data-info-url',
            'type'  => 'str',
            'value' => 'http://ct.de/-2467514',
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_data-info-display',
            'type'  => 'select',
            'value' => 'blank',
            'constraints' => 'blank|popup|self',
            'position' => 0
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_data-mail-url',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_data-mail-subject',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_data-mail-body',
            'type'  => 'str',
            'value' => '{url}',
        ),
        array(
            'group' => 'rs-shariff_main',
            'name'  => 'rs-shariff_main_data-services',
            'type'  => 'str',
            'value' => 'facebook|twitter|linkedin|pinterest|xing|whatsapp|addthis|tumblr|diaspora|reddit|stumbleupon|threema|weibo|tencent-weibo|qzone|print|telegram|vk|flipboard|pocket|buffer|mail|info',
        ),


        array(
            'group' => 'rs-shariff_detail_page',
            'name'  => 'rs-shariff_detail_page_display',
            'type'  => 'bool',
            'value' => false,
        ),
        array(
            'group' => 'rs-shariff_detail_page',
            'name'  => 'rs-shariff_detail_page_data-button-style',
            'type'  => 'select',
            'value' => 'standard',
            /*'constraints' => 'standard|icon|icon-count',*/
            'constraints' => 'standard|icon',
            'position' => 0
        ),
        array(
            'group' => 'rs-shariff_detail_page',
            'name'  => 'rs-shariff_detail_page_data-orientation',
            'type'  => 'select',
            'value' => 'vertical',
            'constraints' => 'horizontal|vertical',
            'position' => 1
        ),
        array(
            'group' => 'rs-shariff_detail_page',
            'name'  => 'rs-shariff_detail_page_data-theme',
            'type'  => 'select',
            'value' => 'standard',
            'constraints' => 'standard|grey|white',
            'position' => 0
        ),


        array(
            'group' => 'rs-shariff_footer',
            'name'  => 'rs-shariff_footer_display',
            'type'  => 'bool',
            'value' => false,
        ),
        array(
            'group' => 'rs-shariff_footer',
            'name'  => 'rs-shariff_footer_data-button-style',
            'type'  => 'select',
            'value' => 'standard',
            /*'constraints' => 'standard|icon|icon-count',*/
            'constraints' => 'standard|icon',
            'position' => 0
        ),
        array(
            'group' => 'rs-shariff_footer',
            'name'  => 'rs-shariff_footer_data-orientation',
            'type'  => 'select',
            'value' => 'horizontal',
            'constraints' => 'horizontal|vertical',
            'position' => 0
        ),
        array(
            'group' => 'rs-shariff_footer',
            'name'  => 'rs-shariff_footer_data-theme',
            'type'  => 'select',
            'value' => 'standard',
            'constraints' => 'standard|grey|white',
            'position' => 0
        ),

    ),
);
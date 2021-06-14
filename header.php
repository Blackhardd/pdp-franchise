<!doctype html>
<html <?php language_attributes(); ?> <?php pdpf_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a href="#content" class="skip-link screen-reader-text"><?php esc_html_e( 'Перейти к содержанию', 'pdpf' ); ?></a>

    <?php get_template_part( 'template-parts/header/site-header' ); ?>

    <div id="content" class="site-content">
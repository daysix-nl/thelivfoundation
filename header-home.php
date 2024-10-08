<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/gill-sans" rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<style>
    .navone {
    opacity: 0;
    transition: 0s;
    transition-delay: 0s;
    transform: translate(0px,0px);
}
</style>
<body <?php body_class( 'page bg-livbrown' ); ?>>

<header class="fixed top-0 right-0 left-0 z-10">
    <section class="bg-transparant  md:mt-1 pl-1 pr-2 md:pl-3 md:pr-5 flex justify-between w-full items-center">
        <a href="/">
            <span class="clip-the font-gill">The</span>
            <?php include get_template_directory() . '/img/local/logo.php'; ?>
            <span class="clip-foundation font-gill">Foundation</span>
        </a>
        <menu>
            <button class="hamburger-menu">
                <?php include get_template_directory() . '/img/icons/hamburger.php'; ?>
            </button>
        </menu>
    </section>
</header>

<?php include get_template_directory() . '/componenten/overlay-hamburger.php'; ?>



<?php
/*
Template Name: Gabarit S'engager.
*/
?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php get_header(); ?>

<h1 id="title_nj">Veuillez remplir les champs ci-dessous</h1>
<?php echo do_shortcode('[ninja_form id=2]'); ?>



<?php get_footer(); ?>
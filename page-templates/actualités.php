<?php
/*
Template Name: Gabarit Actualités
*/
?>

<?php get_header(); ?>

<main>
<div id="thumbnail_title">
    <?php echo get_the_post_thumbnail(null)?>
    <h1 id="atitle">Actualités</h1>
</div>

<div id="articles">
    <h1 id="articles_title">Ecologie</h1>
    <div id="group_one">
        <div id="article_actu">
            <?php echo get_field('actualites'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
        <div id="article_actu2">
            <?php echo get_field('actualite_2'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
        <div id="article_actu">
            <?php echo get_field('actualite_3'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
    </div>

    <h1 id="articles_title2">Retraites</h1>
    <div id="group_two">
        <div id="article_">
            <?php echo get_field('actualite_4'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
        <div id="article_">
            <?php echo get_field('actualite_5'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
        <div id="article_3">
            <?php echo get_field('actualite_6'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
    </div>

    <h1 id="articles_title3">Education</h1>
    <div id="group_three">
        <div id="article_">
            <?php echo get_field('actualite_7'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
        <div id="article_">
            <?php echo get_field('actualite_8'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
        <div id="article_">
            <?php echo get_field('actualite_9'); ?>
            <a id="more" href="#">Lire l'article</a>
        </div>
    </div>
    
</div>

</main>

<?php get_footer(); ?>
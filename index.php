
<?php get_header(); ?>

<body>
    <main>

    
    <?php
    // Boucle
    if (have_posts('description')){
        while (have_posts('dexcription')){
            the_post('description');
    ?>
    <div id="container">
        <?php echo get_field('title1')?>
        <h1 id="title_contb">|</h1>
        <?php echo get_field('title2')?>
    </div>

    <img id="thumbnails" <?php echo get_the_post_thumbnail( null )?>>
    
    <div id="articless">
        <div id=article_one>
            <?php echo get_field('article_one')?>
            <div id="description_article_home">
                <p>Ecologie</p>
            </div>
        </div>
        <div id=article_two>
            <?php echo get_field('article_two')?>
            <div id="description_article_home">
                <p>Retraite</p>
            </div>
        </div>
        
    </div>
    <div id="button_home">
        <a id="link_a" href="http://localhost/wordpress-pm/actualites/">Voir plus</a>
    </div>
    

    <?php
        }
    /* Restore original Post Data */
    wp_reset_postdata();
    }
    else {
    // no posts found
    };

    ?>
        
     
</main>

<?php get_footer(); ?>
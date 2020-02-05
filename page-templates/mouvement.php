<?php
/*
Template Name: Gabarit Mouvement.
*/
?>
<body>
<?php get_header(); ?>

    <main>

    <?php
    // Boucle
    if (have_posts('description')){
        while (have_posts('dexcription')){
            the_post('description');
    ?>


    <div id="thumbnail">
        <?php echo get_the_post_thumbnail( null )?>
    </div>
    

    <article id="candidat">
        <?php echo get_field('description_candidat');?>
        <div id="button">
            <a href="#content1">Voir le programme</a> 
        </div>
    </article>
    
    
    
    
    <div id="content1">
        <h1 id="title1">{Ecologie}</h1>
        <div id="container1">
            <p id="para_one"><?php echo get_field('description_ecologie');?></p>
        </div>
    </div>
    <div id="content2">
        <h1 id="title2">{Retraites}</h1>
        <div id="container2">
            <p id="para_two"><?php echo get_field('description_retraite');?></p>
        </div>
    </div>
    <div id="content">
        <h1 id="title">{Education}</h1>
        <div id="container">
            <p id="para_three"><?php echo get_field('description_education');?></p>
        </div>
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
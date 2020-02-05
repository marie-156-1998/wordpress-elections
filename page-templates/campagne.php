<?php
/*
Template Name: Gabarit Campagne.
*/
?>

<?php get_header(); ?>

<main id="main">

   
<?php
    // Boucle
    if (have_posts('description')){
        while (have_posts('description')){
            the_post('description');
    ?>

    <section class="content">
        <div id="image">
            <div id="filter"></div>
            <div id="titles">
                <h2 id="title0"><?php the_title(); ?></h2> <br>
                <h1 id="title0">Campagne des élections municipales de 2020</h1>
            </div>
        </div>

        <div id="program-container">
            <!-- Les propositions de Marie -->
            <div id="container_">
                <div id="marie_proposals">
                    <h3 id="title_1">Ce que Marie propose</h3>
                    <div id="écologie">
                        <h4 id="title_2">Ecologie</h4>
                        <p id="para_one1"><?php echo get_field('ecologie_proposal');?></p>
                    </div>
                    <div id="retraite">
                        <h4 id="title_2">Retraite</h4>
                        <p id="para_one1"><?php echo get_field('retraite_proposal');?></p>
                    </div>
                    <div id="éducation">
                        <h4 id="title_2">Education</h4>
                        <p id="para_one1"><?php echo get_field('education_proposal');?></p>
                    </div>
                </div>
            </div>
            <!-- Pourquoi (ses arguments) -->
            <div id="container_">
                <div id="pourquoi">
                    <h3 id="title_1_">Pourquoi ?</h3>
                    <div id="écologie">
                        <h4 id="title_2_">Ecologie</h4>
                        <p id="para_two2"><?php echo get_field('ecologie_why');?></p>
                    </div>
                    <div id="retraite2">
                        <h4 id="title_2_">Retraite</h4>
                        <p id="para_two2_"><?php echo get_field('retraite_why');?></p>
                    </div>
                    <div id="éducation2">
                        <h4 id="title_2_">Education</h4>
                        <p id="para_two2_2"><?php echo get_field('education_why');?></p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <div id="thumbnail_c">
        <?php echo get_the_post_thumbnail( null )?>
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
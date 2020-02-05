<?php
/*
Template Name: Gabarit Evenement.
*/
?>
<?php get_header(); ?>

  <main>


    <?php
    $the_query = new WP_Query(array('post_type'=> 'event'));
    //  $the_query = new WP_Query();


    // The Loop
    if ( $the_query->have_posts('conf') ) {
      
        while ( $the_query->have_posts('conf') ) {
            $the_query->the_post('conf');
    ?>

          

        <div id="conf">
          <h1 id="text"><?php echo get_the_title();?></h1>  
            <?php echo get_the_content();?>          
          <a href="http://localhost/wordpress-pm/sengager/">Participer</a>
        </div>

        
            
    <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }

    ?>
  </main>

<?php get_footer(); ?>
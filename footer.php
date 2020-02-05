
<footer id= "footer">
    <!--
        Tout le contenu de la partie head de mon site
     -->
    </footer>

    <!-- Execution de la fonction wp_footer() obligatoire ! -->
    <?php wp_footer();  ?>

    <?php
          $args=array(
              'theme_location' => 'footer_menu', // nom du slug
              'menu' => 'footer_menu', // nom à donner cette occurence du menu
              'menu_class' => 'footer_menu', // class à attribuer au menu
              'menu_id' => 'menu_id' // id à attribuer au menu
              // voir les autres arguments possibles sur le codex
          );
          wp_nav_menu($args);
          ?>
</body>
</html>
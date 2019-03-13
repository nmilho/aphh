<?php
/**
 *
 * @package Botega_Scratch_Theme
 */
?>

<?php
    get_header();
?>


<!------- MAIN <body>  ------->



<header>
    <!--Main Navigation-->
        <?php require_once('components/navbar2.inc.php'); ?>
    <!--Main Navigation-->
</header>



  

      <header>
         <h1><?php bloginfo('name'); ?></h1>
         <h3><?php bloginfo('description'); ?></h3>
      </header>

        <?php
        if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
            endwhile;
        endif;
        ?>

<!------- END MAIN </body>  ------->


<?php
    get_footer();
?>

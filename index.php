<?php
/**
 *
 * @package Botega_Scratch_Theme
 */
?>

<?php
    get_header();
?>


<!-- MAIN <body>  -->



<header>
    <!--Main Navigation-->
        <?php require_once('components/navbar2.inc.php'); ?>
    <!--Main Navigation-->
</header>

<main class="mt-5 pt-5">
	<div class="container">

		<!--Grid row-->
		<div class="row wow fadeIn">
			<?php
				if ( have_posts() ) {
					$counter = 1;
					while ( have_posts() ) {
						the_post();
			?>

		    <!--Grid column-->
		    <div class="col-lg-4 col-md-12 mb-4">
		        <!--Featured image-->
		        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
		            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
		            <a href="<?php echo get_permalink() ?>">
		                <div class="mask"></div>
		            </a>
		        </div>

		        <!--Excerpt-->
		        <a href="" class="pink-text">
		            <h6 class="mb-3 mt-4">
		                <i class="fa fa-bolt"></i>
		                <strong> <?php the_category(', '); ?></strong>
		            </h6>
		        </a>
		        <h4 class="mb-3 font-weight-bold dark-grey-text">
		            <strong><?php the_title(); ?></strong>
		        </h4>
		        <p>by
		            <a href="<?php echo get_permalink() ?>" class="font-weight-bold dark-grey-text"><?php get_the_author(); ?></a>, <?php echo get_the_date(); ?></p>
		        <p class="grey-text"><?php the_excerpt(); ?></p>
		        <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-rounded btn-md">Read more</a>
		    </div>
		    <!--Grid column-->

			<?php
						if ($counter % 3 == 0) {
			?>
			</div>
			<!--Grid row-->
			<!--Grid dynamic row-->
			<div class="row wow fadeIn">
			<?php
						}
						$counter++;
					} // end while
				} // end if
			?>
		  </div>
		  <!--Grid row-->











		<!--Section: Jumbotron-->
		<section class="card wow fadeIn" style="background-image: url(&quot;https://mdbootstrap.com/img/Photos/Others/background3.jpg&quot;); visibility: visible; animation-name: fadeIn;">

			<!-- Content -->
			<div class="card-body text-white text-center py-5 px-5 my-5">

				<h1 class="mb-4">
					<strong>Learn Bootstrap 4 with MDB</strong>
				</h1>
				<p>
					<strong>Best &amp; free guide of responsive web design</strong>
				</p>
				<p class="mb-4">
					<strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions available. Create your own, stunning website.</strong>
				</p>
				<a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg waves-effect waves-light">
					Start free tutorial <i class="fas fa-graduation-cap ml-2"></i>
				</a>

			</div>
			<!-- Content -->
      </section>
      <!--Section: Jumbotron-->

	</div>
</main>


<!-- END MAIN </body>  -->


<?php
    get_footer();
?>

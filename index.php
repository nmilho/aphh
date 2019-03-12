<?php  get_header(); 
require_once('components/navbar.inc.php'); ?>

    <!--Main Navigation-->
    <header>

        <!-- Intro -->
        <div class="card card-intro blue-gradient mb-4">

            <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

                <!--Grid row-->
                <div class="row d-flex justify-content-center">

                    <!--Grid column-->
                    <div class="col-md-6">

                        <h1 class="font-weight-bold mb-4">Website Name</h1>
                        <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad impedit corporis ratione facere?
                            Cupiditate unde aliquid reiciendis animi, quas inventore, praesentium neque voluptatem, iusto
                            perferendis placeat similique dolor eum?
                        </p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>

        </div>
        <!-- Intro -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Dynamic Content Wrapper-->
            <section>
              <div id="dynamic-content"></div>

            </section>
            <!--Section: Dynamic Content Wrapper-->

            <!--Section: Articles-->
            <section class="text-center">

                <!--Section heading-->
                <h1 class="h2 font-weight-bold my-4">Recent articles</h1>
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
                            <strong><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></strong>
                        </h4>
                        <p>by
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>, <?php echo get_the_date(); ?></p>
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

                <!--Pagination -->
                <nav class="d-flex justify-content-center my-4 wow fadeIn">
                    <ul class="pagination pagination-circle pg-info mb-0">

                        <!--First-->
                        <li class="page-item disabled">
                            <a class="page-link">First</a>
                        </li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">5</a>
                        </li>

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--Last-->
                        <li class="page-item">
                            <a class="page-link">Last</a>
                        </li>

                    </ul>
                </nav>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Download MDB
                <i class="fa fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Start free tutorial
                <i class="fa fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->
<?php  get_footer(); ?>
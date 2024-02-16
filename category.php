<?php get_header(); ?>
      <!-- Content -->
      <section class="content blog-standard">
        <div class="container relative">
          <div class="row">

            <!-- post content -->
            <div class="col-md-9 post-content mb-50">

              <!-- category description -->
							<div class="category-description">
								<h1><?php single_cat_title(); ?></h1>
								<?php echo category_description(); ?>
							</div>


              <!-- grid posts -->
              <?php if( have_posts() ) : ?>
                <div class="row items-grid">
                  <?php while( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template_parts/post', 'content') ?>
                  <?php endwhile; ?>
                </div> 
              <?php else: ?>
                <p>Empty categorie!</p> 
              <?php endif; ?>
              <!-- end grid posts -->

              <div class="row mt-20">
                <div class="col-md-12 text-center pagination">
                  <a href="#" class=""><i class="icon arrow_carrot-left"></i></a>
									<a href="#" class="">2</a>
									<a href="#" class="">3</a>
									<a href="#" class="">4</a>
									<span class="current">5</span>
									<span>...</span>
									<a href="#" class="">4</a>
									<a href="#" class=""><i class="icon arrow_carrot-right"></i></a>

                </div>
              </div>


            </div> <!-- end col -->

            <!-- Sidebar -->
            <?php get_sidebar(); ?>
            <!-- end sidebar -->

          </div> <!-- end row -->
        </div> <!-- end container -->
      </section> <!-- end content -->
<?php get_footer(); ?>
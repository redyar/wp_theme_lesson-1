<?php get_header(); ?>
      <!-- Content -->
      <section class="content blog-standard">
        <div class="container relative">
          <div class="row">

            <!-- post content -->
            <div class="col-md-9 post-content mb-50">

              <!-- category description -->
							<div class="category-description">
								<h1>Лайфстайл CAtegories</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet nec ullamcorper sit amet risus. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Diam sit amet nisl suscipit adipiscing bibendum est...
								</p>
							</div>


              <!-- grid posts -->
              <?php if( have_posts() ) : ?>
                <div class="row items-grid">
                  <?php while( have_posts() ) : the_post(); ?>
                    <div class="col-sm-6">
                      <article class="entry-item">
                        <div class="entry-img">
                          <a href="blog-single.html">
                            <img src="img/post_1.jpg" alt="">
                          </a>
                        </div>
                        <div class="entry-header">
                          <a href="#" class="entry-category">Лайфстайл</a>
                          <h2 class="entry-title">
                            <a href="blog-single.html"><?php the_title(); ?></a>
                          </h2>
                        </div>
                        <div class="entry-wrap">
                          <div class="entry">
                            <div class="entry-content">
                              <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="entry-meta-wrap clearfix">
                              <ul class="entry-meta">
                                <li class="entry-date">
                                  <a href="#"><?php the_time('j M Y') ?></a>
                                </li>
                                <li class="entry-comments">
                                  <a href="blog-single.html">5 комментариев</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
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
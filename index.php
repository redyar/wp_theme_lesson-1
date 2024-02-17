<?php get_header(); ?>

      <!-- Content -->
      <section class="content blog-standard">
        <div class="container relative">
          <div class="row">

            <!-- post content -->
            <div class="col-md-9 post-content mb-50">

              <!-- large post -->
              <article class="entry-item large-post">
                <?php
                $i = 0;
 
                while( have_posts() ) : the_post();
                  $i++;
                  if( 1 === $i ) {
                    // если первая запись, то подключаем файл entry-featured.php
                    get_template_part( 'template_parts/main', 'post' );
                  } else {
                    // иначе подключаем обычный entry.php
                    get_template_part( 'template_parts/post', 'content' );
                  }
                 
                endwhile;
                
                ?>
              </article> <!-- end large post -->
              
              <div class="row mt-20">
                <div class="col-md-12 text-center pagination">
                <?php echo paginate_links( array(
                  'prev_next' => true,
                  'prev_text' => '<i class="icon arrow_carrot-left"></i>',
                  'next_text' => '<i class="icon arrow_carrot-right"></i>'
                  
                  ) );?>
                  <!-- <a href="#" class=""><i class="icon arrow_carrot-left"></i></a>
									<a href="#" class="">2</a>
									<a href="#" class="">3</a>
									<a href="#" class="">4</a>
									<span class="current">5</span>
									<span>...</span>
									<a href="#" class="">4</a>
									<a href="#" class=""><i class="icon arrow_carrot-right"></i></a> -->

                </div>
              </div>


            </div> <!-- end col -->

            <?php get_sidebar(); ?>

          </div> <!-- end row -->
        </div> <!-- end container -->
      </section> <!-- end content -->


<?php get_footer(); ?>

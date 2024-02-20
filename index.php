<?php get_header(); ?>

      <!-- Content -->
      <section class="content blog-standard">
        <div class="container relative">
          <div class="row">

            <!-- post content -->
            <div class="col-md-9 post-content mb-50">
              <?php if( is_search() ) : ?>
                <div class="category-description">
                  <h1>Results search: &laquo; <?php the_search_query(); ?> &raquo;</h1>
                </div>
              <?php endif; ?>  
              <!-- large post -->
              <?php if( have_posts() ) : ?>
                <?php
                $count = 1;
                
                while( have_posts() ) : the_post();
                  if(is_sticky()){
                    get_template_part( 'template_parts/main', 'post' );   
                    echo '<div class="row items-grid">';
                  }else{
                   
                   
                  
                    get_template_part( 'template_parts/post', 'content' );
                     
                  }
                $count++;
                
                endwhile;
                
                  echo '</div>';
                 
                ?>
              
              
              <div class="row mt-20">
                <div class="col-md-12 text-center pagination">
                <?php echo paginate_links( array(
                  'prev_next' => true,
                  'prev_text' => '<i class="icon arrow_carrot-left"></i>',
                  'next_text' => '<i class="icon arrow_carrot-right"></i>'
                  
                  ) );?>
                </div>
              </div>
              <?php endif; ?>

            </div> <!-- end col -->

            <?php get_sidebar(); ?>

          </div> <!-- end row -->
        </div> <!-- end container -->
      </section> <!-- end content -->


<?php get_footer(); ?>

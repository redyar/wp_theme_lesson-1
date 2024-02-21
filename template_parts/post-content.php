<div class="col-sm-6">
  <article class="entry-item">
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-img">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
    <?php endif; ?>   
    <div class="entry-header">
    <div  class="entry-category"><?php the_category(',  '); ?></div>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
<article <?php post_class('entry-item large-post') ?>>
    <div class="entry-header">
    <div  class="entry-category"><?php the_category(',  '); ?></div>
        <h2 class="entry-title">
        <a href="blog-single.html"><?php the_title(); ?></a>
        </h2>
    </div>

    <div class="entry-img">
        <a href="blog-single.html">
        <?php the_post_thumbnail(); ?>
        </a>
    </div>

    <div class="entry-wrap">
        <div class="entry">

        <div class="entry-content">
            <p><?php the_excerpt(); ?></p>
            <div class="text-center">
            <a href="<?php the_permalink(); ?>" class="read-more underline-link">Читать далее</a>
            </div>
        </div>

        <div class="entry-meta-wrap clearfix">
            <ul class="entry-meta">
            <li class="entry-date">
                <a href="#"><?php the_time('j M F'); ?></a>
            </li>
            <li class="entry-comments">
                <a href="blog-single.html">5 комментариев</a>
            </li>
            </ul>


        </div>

        </div>
    </div>
</article> <!-- end large post -->
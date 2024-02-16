<?php get_header(); the_post();?>

<!-- Content -->
<section class="content post-single pt-70 pt-mdm-60">
  <div class="container relative">
    <div class="row">

      <!-- post content -->
      <div class="col-md-9 post-content mb-50">

        <!-- large post -->
        <article class="entry-item large-post">
          <h1>Single POST</h1>
          <div class="entry-header">
            <div  class="entry-category"><?php the_category(',  '); ?></div>
            
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </div>

          <div class="entry-img">
            <img src="img/featured_post.jpg" alt="">
          </div>

          <div class="entry-wrap">
            <div class="entry">

              <div class="entry-content">
                <div class="article">
                  <p><span class="dropcap style-1">L</span><?php the_content(); ?></p>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque ornare aenean euismod elementum nisi. Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit. Consectetur lorem donec massa sapien faucibus et molestie ac.</p>

                                          <h2>Заголовок H2</h2>
                  <h3>Заголовок H3</h3>
                                          <h4>Заголовок H4</h4>
                                          <h5>Заголовок H5</h5>

                                          <p>Маркированный список</p>

                                          <ul>
                              <li>Элемент списка 1</li>
                              <li>Элемент списка 2</li>
                              <li>Элемент списка 3</li>
                              <li>Элемент списка 4</li>
                            </ul>

                                          <p>Нумерованный список</p>

                                          <ol>
                                              <li>Элемент списка 1</li>
                              <li>Элемент списка 2</li>
                              <li>Элемент списка 3</li>
                              <li>Элемент списка 4</li>
                            </ol>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque ornare aenean euismod elementum nisi. Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit. Consectetur lorem donec massa sapien faucibus et molestie ac.</p>
                </div>

                <!-- tags -->
                <div class="entry-tags tags mb-50 mt-40 clearfix">
                  <?php the_tags( '', '' ); // Первым параметром идёт слово Tags?> 
                </div>

                <div class="entry-meta-wrap clearfix">
                  <ul class="entry-meta">
                    <li class="entry-date">
                      <?php the_time('j M Y') ?>
                    </li>
                    <li class="entry-comments">
                      <a href="blog-single.html">2 комментария</a>
                    </li>
                  </ul>

                </div>

                <!-- entry author -->
                <div class="entry-author-box clearfix">
                  <img src="img/author.jpg" class="author-img" alt="img">
                  <div class="author-info">
                    <h6 class="author-name"><a href="#">Настя Найс</a></h6>
                    <p class="mb-0">Была в около 300 странах, путешествие – это её страсть. Ну и конечно ведёт свой влог на YouTube.
                    </p>
                    <div class="social-icons">
                      <a href="#"><i class="fa fa-instagram"></i></a>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                  </div>
                </div>

                <!-- related posts -->
                <div class="related-posts mt-40">
                  <div class="heading-lines mb-30">
                    <h3 class="heading small">Похожие материалы</h3>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <article class="entry-item">
                        <div class="entry-img">
                          <a href="blog-single.html">
                            <img src="img/post_1.jpg" alt="">
                          </a>
                        </div>
                        <h4 class="entry-title">
                          <a href="blog-single.html">Топ 5 горнолыжных курортов в Европе в 2020</a>
                        </h4>
                        <div class="entry-meta-wrap clearfix">
                          <ul class="entry-meta">
                            <li class="entry-date">
                              <a href="#">15 января 2019</a>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>

                    <div class="col-sm-4">
                      <article class="entry-item">
                        <div class="entry-img">
                          <a href="blog-single.html">
                            <img src="img/post_2.jpg" alt="">
                          </a>
                        </div>
                        <h4 class="entry-title">
                          <a href="blog-single.html">Итальянвская кухня</a>
                        </h4>
                        <div class="entry-meta-wrap clearfix">
                          <ul class="entry-meta">
                            <li class="entry-date">
                              <a href="#">5 января 2020</a>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-4">
                      <article class="entry-item">
                        <div class="entry-img">
                          <a href="blog-single.html">
                            <img src="img/post_3.jpg" alt="">
                          </a>
                        </div>
                        <h4 class="entry-title">
                          <a href="blog-single.html">Рюкзаки для путешетвий</a>
                        </h4>
                        <div class="entry-meta-wrap clearfix">
                          <ul class="entry-meta">
                            <li class="entry-date">
                              <a href="#">5 января 2020</a>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <!-- Comments -->
                <div class="entry-comments mt-20">
                  <div class="heading-lines mb-30">
                    <h3 class="heading small">3 комментария</h3>
                  </div>

                  <ul class="comment-list">
                    <li>
                      <div class="comment-body">
                        <img src="img/comment_1.jpg" class="comment-avatar" alt="">
                        <div class="comment-content">
                          <span class="comment-author">Александр</span>
                          <span class="comment-date">20 января 2020 в 20:20</span>
                          <p>Подскажите пожалуйста, мой код не вставляется!</p>
                          <a href="#">Ответить</a>
                        </div>
                      </div>

                      <ul class="comment-reply">
                        <li>
                          <div class="comment-body">
                            <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                            <div class="comment-content">
                              <span class="comment-author">Настя</span>
                              <span class="comment-date">20 января 2020 в 20:20</span>
                              <p>Александр, попробуйте сначала скопировать свой код, а только потом вставлять.</p>
                              <a href="#">Ответить</a>
                            </div>
                          </div>
                        </li> <!-- end reply comment -->
                      </ul>

                    </li> <!-- end 1-2 comment -->

                    <li>
                      <div class="comment-body">
                        <img src="img/comment_3.jpg" class="comment-avatar" alt="">
                        <div class="comment-content">
                          <span class="comment-author">Миша</span>
                          <span class="comment-date">20 января 2020 в 20:20</span>
                          <p>Ребята, ну вы вообще, Настя, спасибо за помощь!</p>
                          <a href="#">Ответить</a>
                        </div>
                      </div>
                    </li> <!-- end 3 comment -->

                  </ul>
                </div> <!--  end comments -->

                <!-- Leave a Comment -->
                <div class="comment-form mt-60">
                  <div class="heading-lines mb-30">
                    <h3 class="heading small">Оставить комментарий</h3>
                  </div>
                  <form id="form" method="post" action="#">
                    <div class="row row-16">
                      <div class="col-md-4">
                        <input name="name" id="name" type="text" placeholder="Имя*">
                      </div>
                      <div class="col-md-4">
                        <input name="mail" id="mail" type="email" placeholder="E-mail*">
                      </div>
                      <div class="col-md-4">
                        <input name="Website" id="Website" type="text" placeholder="Сайт">
                      </div>
                      <div class="col-md-12">
                        <textarea name="comment" id="comment" placeholder="Сообщение" rows="8"></textarea>
                      </div>
                    </div>

                    <input type="submit" class="btn btn-lg btn-color mt-20" value="Оставить комментарий" id="submit-message">
                  </form>
                </div>

              </div>
            </div>
          </div>
        </article> <!-- end large post -->
      </div> <!-- end col -->

                  <!-- Sidebar -->
      <aside class="col-md-3 sidebar">

        <!-- Search -->
        <div class="widget">
          <div class="heading-lines">
            <h3 class="widget-title heading">Поиск по сайту</h3>
          </div>
          <form class="relative">
            <input type="email" placeholder="Что ищем?">
          </form>
          <input type="submit" value="Искать" id="submit-button" class="btn btn-lg btn-color">
        </div>

        <!-- Categories -->
        <div class="widget categories">
          <div class="heading-lines">
            <h3 class="widget-title heading">Рубрики</h3>
          </div>
          <ul class="list-dividers">
            <li>
              <a href="#">Лайфстайл</a><span>(8)</span>
            </li>
            <li>
              <a href="#">Трэвел</a><span>(14)</span>
            </li>
            <li>
              <a href="#">Бьюти</a><span>(5)</span>
            </li>
            <li>
              <a href="#">Ворк хард</a><span>(3)</span>
            </li>
            <li>
              <a href="#">Еда</a><span>(7)</span>
            </li>
          </ul>
        </div>

        <!-- Ad banner -->
        <div class="widget custom-ad-banner">
          <a href="#">
            <img src="img/banner.jpg" alt="">
          </a>
        </div>

        <!-- Recent Posts -->
        <div class="widget recent-posts">
          <div class="heading-lines">
            <h3 class="widget-title heading">Свежее на блоге</h3>
          </div>
          <div class="entry-list w-thumbs">
            <ul class="posts-list list-dividers">
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/recent_1.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">
                    <h3 class="entry-title"><a href="magazine-single-article.html">Топ 5 горнолыжных курортов в Европе в 2020</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <a href="#">15 января 2020</a>
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/recent_2.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">
                    <h3 class="entry-title"><a href="magazine-single-article.html">Итальянская кухня</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <a href="#">5 января 2020</a>
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/recent_3.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">
                    <h3 class="entry-title"><a href="magazine-single-article.html">Рюкзаки для путешетвий</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <a href="#">5 января 2020</a>
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
              <li class="entry-li">
                <article class="post-small clearfix">
                  <div class="entry-img">
                    <a href="blog-single.html">
                      <img src="img/recent_4.jpg" alt="">
                    </a>
                  </div>
                  <div class="entry">
                    <h3 class="entry-title"><a href="magazine-single-article.html">Новые луки</a></h3>
                    <ul class="entry-meta list-inline">
                      <li class="entry-date">
                        <a href="#">5 января 2020</a>
                      </li>
                    </ul>
                  </div>
                </article>
              </li>
            </ul>
          </div>
        </div>

      </aside> <!-- end sidebar -->

    </div> <!-- end row -->
  </div> <!-- end container -->
</section> <!-- end content -->


<?php get_footer(); ?>
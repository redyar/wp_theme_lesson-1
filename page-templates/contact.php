<?php
/*
*   Template name: Contact page   
*/
get_header();
?>

      <!-- Content -->
      <section class="section-wrap contact pt-mdm-60">
        <div class="container relative">
          <div class="text-center">
            <h1 class="heading underline-title uppercase">Контакты</h1>
          </div>
          <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
              <p>
                Sed at libero mauris. Nullam eget vehicula nulla. Aenean maximus risus ex, at efficitur massa molestie id. Integer sagittis neque ut mauris imperd biet imperdiet. Integer nisi diam, auctor at mi nec, feugiat tempus metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce commodo, velit non faucibus elementum, dolor risus convallis massa, venenatis luctus ante turpis id nisl.
              </p>

              <!-- contact form -->
              <div class="contact-form mt-30">
                <form id="contact-form" action="#">
									<p class="message success">Ваше сообщение успешно отправлено.</p>
									<p class="message error">Что-то пошло не так.</p>
                  <div class="row row-16">
                    <div class="col-md-4">
                      <input name="name" id="name" type="text" placeholder="Имя*">
                    </div>
                    <div class="col-md-4">
                      <input name="mail" id="mail" type="email" placeholder="E-mail*">
                    </div>
                    <div class="col-md-4">
                      <input name="subject" id="subject" type="text" placeholder="Тема">
                    </div>
                    <div class="col-md-12">
                      <textarea name="comment" id="comment" placeholder="Сообщение" rows="8"></textarea>
                    </div>
                  </div>

                  <input type="submit" class="btn btn-lg btn-color mt-20" value="Отправить" id="submit-message">
                  <div id="msg" class="message"></div>
                </form>
              </div>

            </div>
          </div> <!-- end row -->

        </div> <!-- end container -->
      </section> <!-- end content -->

<?php get_footer(); ?>      
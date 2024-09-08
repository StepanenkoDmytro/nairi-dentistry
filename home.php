<?php
/*
TempLate Name: home
*/
?>

<?php get_header();?>

<main>
  <section class="preview" id="preview">
    <div class="containers">
      <div class="preview__inner">

        <?php
          global $post;

          $myposts = get_posts([
            'post_type' => 'post',
            'category_name' => 'preview'
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
                <div class="preview__text montserrat">
                  <p class="preview__text-big"><?php the_title(); ?></p>
                  <div class="preview__text-small"><?php the_content(); ?></div>
                </div>

                <div class="preview__image">
                  <?php the_post_thumbnail(); ?>
                </div>

              <?php
            }
          }

          wp_reset_postdata(); 
        ?>

      </div>
    </div>
  </section>

  <section class="services">
    <div class="containers">
        <p class="title montserrat">Послуги</p>
    </div>

    <div class="containers">
      <ul>

        <?php
          global $post;

          $myposts = get_posts([
              'post_type' => 'post',
              'posts_per_page' => -1,
              'category__in'   => array( get_category_by_slug( 'services' )->term_id )
          ]);

          if ($myposts) {
              $counter = 0;
              foreach ($myposts as $post) {
                  setup_postdata($post);
                  $counter++;
        ?>
        <li class="list__item">
          <?php if ($counter % 2 != 0) : ?>
              <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <div class="list__item-box">
              <p class="list__item-box__primary-text montserrat"><?php the_title(); ?></p>
              <div class="list__item-box__text"><?php the_content(); ?></div>
              <button class="list__item-btn button" onclick="redirectToPrices('<?php echo get_the_title(); ?>')">Детальніше ></button>
          </div>
          <?php if ($counter % 2 == 0) : ?>
              <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <button class="list__item-mobile-btn button montserrat" onclick="redirectToPrices('<?php echo get_the_title(); ?>')">
            <p class="mobile-btn__text"><?php the_title(); ?></p> 
            <p class="mobile-btn__arrow"></p>
          </button>
        </li>
        <?php
            }
        }
        wp_reset_postdata();
        ?>

        <script>
          function redirectToPrices(title) {
            if(title) {
              title = title.replace(/\s+/g, '');
            }
            window.location.href = "<?php echo home_url('/prices?subcategory='); ?>" + title;
          }

          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
              scrollToTopBtn.style.display = "block";
            } else {
              scrollToTopBtn.style.display = "none";
            }
          }

          function scrollToTop() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
          }

        </script>

      </ul>
    </div>
  </section>

  <div class="containers">
    <p class="title montserrat">Команда</p>
  </div>
  
  <section class="carousel">
    <div class="containers">

      <div class="carousel__inner">

        <?php
          global $post;

          $myposts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category_name' => 'team'
          ]);

          if( $myposts ){
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>
              <div class="carousel__item">
                <div class="carousel__item-box">
                  <?php the_post_thumbnail(
                    array(360, 510),
                    array(
                      'class' => 'carousel__item-img'
                    )
                  ); ?>
                  <div class="carousel__item-hidden-info montserrat">
                    <h4 class="carousel__item-title"><?php the_title(); ?></h4>
                    <p class="carousel__item-text"><?php the_content(); ?></p>
                  </div>
                </div>
              </div>
              <?php
            }
          }

          wp_reset_postdata(); 
        ?>

      </div>
    </div>
  </section>

  <div class="containers">
    <p class="title montserrat">Контакти</p>
  </div>

  <section class="contacts">
    <div class="containers">
      <div class="contacts__inner">
        <div class="contacts__info">
          <div class="contacts__info-box">

            <div class="contacts-item">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/location_blue.svg" alt="location_icon">
              
              <div class="contacts-item__text-box">
                <a class="contacts-item__text"><?php the_field('city'); ?></a>
                <a class="contacts-item__text"><?php the_field('street'); ?></a>
              </div>
            </div>

            <div class="contacts-item">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/phone_blue.svg" alt="phone_icon">
              
              <div class="contacts-item__text-box">
                <a class="contacts-item__text bl" href="tel:<?php the_field('phone-1'); ?>"><?php the_field('phone-1'); ?></a>
                <a class="contacts-item__text bl" href="tel:<?php the_field('phone-2'); ?>"><?php the_field('phone-2'); ?></a>
              </div>
            </div>

            <div class="contacts-item">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/clock_blue.svg" alt="clock_icon"> 
              
              <div class="contacts-item__text-box">
                <p class="contacts-item__text"><?php the_field('weekdays'); ?></p>
                <p class="contacts-item__text"><?php the_field('weekend'); ?></p>
              </div>
            </div>

            <div class="contacts-item mobile_visible">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/mail_blue.svg" alt="mail_icon">
              <p class="contacts-item__text"><?php the_field('email'); ?></p>
            </div>

            <div class="contacts-item mobile_visible">
              <a class="contact-social" href="<?php the_field('instagram-link'); ?>">
                <img src="<?php bloginfo('template_url');?>/assets/images/contacts/instagram_blue.svg" alt="instagram_icon">
              </a>
              <a class="contact-social" href="<?php the_field('facebook-link'); ?>">
                <img src="<?php bloginfo('template_url');?>/assets/images/contacts/facebook_blue.svg" alt="facebook_icon">
              </a>
            </div>

          </div>

          <button class="contacts__info-btn button" id="openContactsModal">Записатися зараз</button>
          <div id="modalsContacts" class="modals">
          <div class="modal-cont">
            <div class="footer-contacts__form">
              <h2 class="footer-contacts__title montserrat">Зворотній звʼязок</h2>
              <?php echo do_shortcode('[contact-form-7 id="eb8ab43" title="Контактна форма(footer)"]'); ?>
            </div>
          </div>
        </div>
        </div>

        <div class="contacts__map-box">
          <iframe class="contacts__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.351197792031!2d34.98449397555417!3d48.50733192534869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe21d9f6f902b%3A0xb3c367b75e23e05d!2z0LLRg9C70LjRhtGPINCo0L7Qu9C-0YXQvtCy0LAsIDcsINCU0L3RltC_0YDQviwg0JTQvdGW0L_RgNC-0L_QtdGC0YDQvtCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1suk!2sua!4v1709731496325!5m2!1suk!2sua" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
      </div>
    </div>
  </section>
  <button onclick="scrollToTop()" id="scrollToTopBtn" title="up"></button>
</main>

<?php get_footer();?>

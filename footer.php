<footer class="footer" id="footer">
    <div class="containers">
      <div class="footer__box">
        <div class="logo">
          <img src="<?php bloginfo('template_url');?>/assets/images/logo.svg" alt="">

          <button class="footer__callback button montserrat mobile_visible" id="openModalFooter">Записатися зараз</button>

          <div id="modalsFooter" class="modals">
            <div class="modal-cont">
              <div class="callback__form">
                <h2 class="footer-contacts__title montserrat">Зворотній звʼязок</h2>
                <?php echo do_shortcode('[contact-form-7 id="eb8ab43" title="Контактна форма(footer)"]'); ?>
              </div>
            </div>
          </div>
        </div>
    
        <div class="footer__social-box">
          <div class="footer__social">

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/footer/location_white.png" alt="location_icon">
              <p class="footer__social-text"><?php the_field('city'); ?> <?php the_field('street'); ?></p>
            </div>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/footer/phone_white.png" alt="phone_icon">
              <div class="footer__social-text-box">
                <a class="footer__social-text" href="tel:<?php the_field('phone-1'); ?>"><?php the_field('phone-1'); ?></a>
                <a class="footer__social-text" href="tel:<?php the_field('phone-2'); ?>"><?php the_field('phone-2'); ?></a>
              </div>
            </div>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/footer/clock_white.png" alt="clock_icon">
              <div class="footer__social-text-box">
                <p class="footer__social-text"><?php the_field('weekdays'); ?></p>
                <p class="footer__social-text"><?php the_field('weekend'); ?></p>
              </div>
            </div>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/footer/mail_white.png" alt="mail_icon">
              <p class="footer__social-text"><?php the_field('email'); ?></p>
            </div>

            <div class="footer__social_links">
              <a class="contact-social" href="<?php the_field('instagram-link'); ?>">
                <img src="<?php bloginfo('template_url');?>/assets/images/footer/instagram_white.png" alt="instagram_icon">
              </a>
              <a class="contact-social" href="<?php the_field('facebook-link'); ?>">
                <img src="<?php bloginfo('template_url');?>/assets/images/footer/facebook_white.png" alt="facebook_icon">
              </a>
            </div>

          </div>

          <div class="footer__social-mobile">
            <p class="footer__social-mobile-text montserrat">Контактна інформація про клініку</p>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/location_blue.svg" alt="location_icon">
              <p class="footer__social-text"><?php the_field('city'); ?> <?php the_field('street'); ?></p>
            </div>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/phone_blue.svg" alt="phone_icon">
              <div class="footer__social-text-box">
                <a class="footer__social-text" href="tel:<?php the_field('phone-1'); ?>"><?php the_field('phone-1'); ?></a>
                <a class="footer__social-text" href="tel:<?php the_field('phone-2'); ?>"><?php the_field('phone-2'); ?></a>
              </div>
            </div>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/mail_blue.svg" alt="mail_icon">
              <p class="footer__social-text"><?php the_field('email'); ?></p>
            </div>

            <p class="footer__social-mobile-text montserrat">Режим роботи</p>

            <div class="footer__social-inner">
              <img src="<?php bloginfo('template_url');?>/assets/images/contacts/clock_blue.svg" alt="clock_icon">
              <div class="footer__social-text-box">
                <p class="footer__social-text"><?php the_field('weekdays'); ?></p>
                <p class="footer__social-text"><?php the_field('weekend'); ?></p>
              </div>
            </div>

          </div>
        </div>

        <div class="footer-contacts__form">
          <h2 class="footer-contacts__title montserrat">Зворотній звʼязок</h2>
          <?php echo do_shortcode('[contact-form-7 id="eb8ab43" title="Контактна форма(footer)"]'); ?>
        </div>
    
      </div>
    </div>

    <script>

      document.getElementById('openModalFooter').addEventListener('click', function() {
          console.log('openModalFooter');
          document.getElementById('modalsFooter').style.display = 'block';
      });

      document.getElementById('modalsFooter').addEventListener('click', function(event) {
          if (event.target === this) {
              document.getElementById('modalsFooter').style.display = 'none';
          }
      });

    </script>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>
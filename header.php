<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>Nairi Dentistry</title>
  <base href="/">

    <?php wp_head(); ?>
</head>
<body>
<header class="header">
  <div class="containers">
    <div class="header__box">
      <div class="logo">
        <?php the_custom_logo(); ?>
      </div>

      <div class="dropdown">
        <button id="dropdown-close" class="dropbtn burger-icon" onclick="toggleDropdown()"></button>
        <button id="dropdown-open" class="dropbtn burger-close" onclick="toggleDropdown()"></button>
      </div>

      <div class="header-info">
        <div class="header-info__contacts">
          <div class="header-info__contact">
            <img src="<?php bloginfo('template_url');?>/assets/images/location.svg" alt="location">
            <p><?php the_field('city'); ?> <?php the_field('street'); ?></p>
          </div>

          <div class="header-info__contact">
            <img src="<?php bloginfo('template_url');?>/assets/images/clock.svg" alt="clock">
            <div>
                <p><?php the_field('weekdays'); ?></p>
                <p><?php the_field('weekend'); ?></p>
            </div>
          </div>

          <div class="header-info__contact">
            <img src="<?php bloginfo('template_url');?>/assets/images/phone.svg" alt="phone">
            <div class="d-flex flex-column">
                <a href="tel:<?php the_field('phone-1'); ?>"><?php the_field('phone-1'); ?></ф>
                <a href="tel:<?php the_field('phone-2'); ?>"><?php the_field('phone-2'); ?></a>
            </div>
          </div>

          <!-- <div class="header-info__contact">
            <a class="contact-social" href="<?php the_field('instagram-link'); ?>">
              <img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="instagram">
            </a>
            <a class="contact-social" href="<?php the_field('facebook-link'); ?>">
              <img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="facebook">
            </a>
          </div> -->

        </div>

        <div class="header-info__btns">
          <div class="header-info__btns-menu">
            <div class="header-info__btn-box">
              <button class="header-info__btn montserrat <?php if (is_front_page()) { echo 'header-info__btn-active'; } ?>" onclick="redirectToHome()">Головна</button>
            </div>
            <div class="header-info__btn-box">
              <button class="header-info__btn montserrat  <?php if (is_page('prices')) { echo 'header-info__btn-active'; } ?>" onclick="redirectToPrices(null)">Ціни</button>
            </div>
            <div class="header-info__btn-box" style="flex: 0.7">
              <button class="header-info__btn montserrat" onclick="moveToSection('footer')">Контакти</button>
            </div>
          </div>
          <button class="header-info__callback button" id="openModal">Записатися зараз</button>
        </div>
        

        <div id="modals" class="modals">
          <div class="modal-cont">
            <div class="footer-contacts__form">
              <h2 class="footer-contacts__title montserrat">Зворотній звʼязок</h2>
              <?php echo do_shortcode('[contact-form-7 id="eb8ab43" title="Контактна форма(footer)"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown-content" id="myDropdown">
      <button class="header-info__btn" onclick="redirectToHome()">Головна</button>
      <button class="header-info__btn" onclick="redirectToPrices(null)">Ціни</button>
      <button class="header-info__btn" onclick="moveToSection('footer')">Контакти</button>
    </div>
  </div>
  
  <script>
    function toggleDropdown() {
      var dropdown = document.getElementById("myDropdown");
      var buttonClose = document.getElementById("dropdown-close");
      var buttonOpen = document.getElementById("dropdown-open");
      
      if (dropdown.style.display === "flex") {
        dropdown.style.display = "none";
        buttonClose.style.display = "block";
        buttonOpen.style.display = "none";
      } else {
        dropdown.style.display = "flex";
        buttonClose.style.display = "none";
        buttonOpen.style.display = "block";
      }
    }

    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.style.display === "flex") {
            openDropdown.style.display = "none";
          }
        }
      }
    }

    function redirectToHome() {
      const currentPage = window.location.pathname;
      if(currentPage !== '/') {
        window.location.href = "<?php echo home_url('/'); ?>";
      }
    }

    function moveToSection(sectionName) {
      const section = document.getElementById(sectionName);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    }

  </script>
  
</header>

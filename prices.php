<?php
/*
TempLate Name: prices
*/
?>

<?php get_header();?>

<main>
  <div class="containers">
    <p class="table-title">
      Ціни на послуги клініки
    </p>
    <div class="accordion accordion-flush" id="accordionFlushExample">
    <?php 
      $parent_cat = get_category_by_slug('services');
      $subcategories = get_categories( array(
          'parent' => $parent_cat->term_id,
          'hide_empty' => false,
      ) );
      
      foreach( $subcategories as $subcategory ) {
        $myposts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category' => $subcategory->term_id,
        ]);
        $subcategory_name = get_cat_name( $subcategory->term_id );
        $accordion_id = 'accordion-' . str_replace(' ', '', $subcategory_name);
        ?>
        <div class="accordion-item item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="header-list montserrat accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordion_id; ?>" aria-expanded="false" aria-controls="<?php echo $accordion_id; ?>">
              <?php echo $subcategory_name ?>
            </button>
          </h2>
          <div id="<?php echo $accordion_id; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <table class="list">
                <tbody>
            <?php
            foreach( $myposts as $post ){
              setup_postdata( $post );
              ?>

              
                  <tr>
                      <th>
                        <?php the_title(); ?>
                      </th>
                      <td>
                        <?php if (trim(get_the_content()) != '0') : ?>
                          <span><?php the_content(); ?></span>грн
                        <?php endif; ?>
                      </td>
                    </tr>
                
              
              <?php } ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>

        <?php

        wp_reset_postdata(); 
      }
      
    ?>
    <script>
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
        const openAccordion = document.querySelector('.accordion-collapse.show');
        if (openAccordion) {
          const accordionHeader = openAccordion.previousElementSibling;
          accordionHeader.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
          document.body.scrollTop = 0; 
          document.documentElement.scrollTop = 0;
        }
      }

      document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
          
        const subcategoryParam = urlParams.get('subcategory');
        if (!subcategoryParam || subcategoryParam === 'undefined') {
          const urlWithoutParam = window.location.href.split('?')[0];
          window.history.replaceState({}, document.title, urlWithoutParam);
        }

        if (subcategoryParam) {
          const accordionId = 'accordion-' + subcategoryParam;
          const accordion = document.getElementById(accordionId);
          if (accordion) {
            accordion.classList.add('show');
            
            const accordionButton = accordion.previousElementSibling.querySelector('.accordion-button');
            if (accordionButton) {
              accordionButton.classList.remove('collapsed');
              accordionButton.setAttribute('aria-expanded', 'true');
              accordion.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
          }
        }
      });
    </script>

    </div>
  </div>
  <button onclick="scrollToTop()" id="scrollToTopBtn" title="up"></button>
</main>

<?php get_footer();?>

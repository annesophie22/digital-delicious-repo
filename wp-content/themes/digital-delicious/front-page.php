<?php

/**
 * Site Front Page
 *
 * @package Digital_Delicious
 */


get_header();
?>

<main id="primary" class="site-main">
   <div class="hero-banner">
      <div class="hero-banner__text-wrapper">
         <h1 class="hero-banner__title"><?php esc_html_e('Vietnamese Homemade Food', 'digital-delicious'); ?></h1>
         <p class="hero-banner__subtitle"><?php esc_html_e('Invite a tasty bit of Vietnam in your plate', 'digital-delicious'); ?></p>
      </div>
   </div>
   <!-- SECTION A LA CARTE -->
   <section id="a-la-carte" class="section-alacarte">
      <div class="heading-block u-center-text">
         <h2 class="heading-primary heading-block__title"><?php esc_html_e('A la carte this week', 'digital-delicious'); ?></h2>
         <p class="heading-block__subtitle"><?php esc_html_e('Check out what dishes are specially cooked for you this week', 'digital-delicious'); ?></p>
         <span class="heading-block__separator"></span>
      </div>

      <!-- WEEK MENU GRID -->
      <div class="week-menu">
         <!-- week-menu__dish-grid -->
         <?php
         $homepageMenu = new WP_Query(
            array(
               'post_type' => 'service-days',
               'orderby' => 'meta_value_num', // = order by date defined in custom field
               'meta_key' => 'calendar_day',
               'order' => 'ASC',
            )
         );

         if ($homepageMenu->have_posts()) {
            while ($homepageMenu->have_posts()) {
               $homepageMenu->the_post();

               get_template_part('template-parts/content', 'weekmenu');
            } /* end while */
         } else {
         ?>
            <p class="heading-block__subtitle"><?php esc_html_e('The kitchen is closed for now !', 'digital-delicious'); ?></p>;
         <?php
         }/* end ifelse */

         wp_reset_postdata();
         ?>
      </div> <!-- end week-menu__dish-grid -->

      <!-- DELIVERY CONDITIONS -->
      <div class="delivery-conditions u-center-text">
         <!-- delivery-conditions__item -->
         <div class="delivery-conditions__item">
            <h3 class="heading-secondary delivery-conditions__item-title"><?php esc_html_e('Delivery Service', 'digital-delicious'); ?></h3>
            <ul class="delivery-conditions__item-details">
               <li><?php esc_html_e('Available in Geneva', 'digital-delicious'); ?></li>
               <li><?php esc_html_e('CHF 10.00 per delivery', 'digital-delicious'); ?></li>
               <li><?php esc_html_e('Free delivery for orders from CHF 150.00', 'digital-delicious'); ?></li>
               <li><?php esc_html_e('Packed in paper bowl : + CHF 1.00', 'digital-delicious'); ?></li>
            </ul>
         </div>
         <!-- delivery-conditions__item -->
         <div class="delivery-conditions__item">
            <h3 class="heading-secondary delivery-conditions__item-title"><?php esc_html_e('Order Pick-Up', 'digital-delicious'); ?></h3>
            <ul class="delivery-conditions__item-details">
               <li><?php echo esc_html('Avenue de Feuillasse 5'); ?></li>
               <li><?php echo esc_html('1217 Meyrin'); ?></li>
            </ul>
         </div>
         <!-- delivery-conditions__item -->
         <div class="delivery-conditions__item">
            <h3 class="heading-secondary delivery-conditions__item-title"><?php esc_html_e('Pick Up & Delivery Time', 'digital-delicious'); ?></h3>
            <ul class="delivery-conditions__item-details">
               <li><?php echo esc_html('12h-13h // 18h-19h30'); ?></li>
               <li><?php esc_html_e('Tuesdays, Thursdays and Saturdays', 'digital-delicious'); ?></li>
            </ul>
         </div>
         <p class="delivery-conditions__notice"><?php esc_html_e('Please order at least 1 day in advance', 'digital-delicious'); ?></p>
         <!-- order-details -->
         <div class="order-details">
            <h3 class="heading-secondary order-details__title"><?php esc_html_e('Order now', 'digital-delicious'); ?></h3>
            <hr class="order-details__hr">
            <ul class="order-details__contact">
               <li><span class="order-details__contact-phone"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_phone.svg')); ?></span><a class="order-details__contact-link-tel" href="<?php echo esc_url('tel:#'); ?>"><?php echo esc_html('079 123 45 67'); ?></a></li>
               <li><span class="order-details__contact-email"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_email.svg')); ?></span><a class="order-details__contact-link-email" href="<?php echo esc_url('mailto:#'); ?>"><?php echo esc_html('lastella.thitrang@gmail.com'); ?></a></li>
               <li><span class="order-details__contact-social"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_fb.svg')); ?></span><a class="order-details__contact-link-social" href="<?php echo esc_url('https://www.facebook.com/Home-made-food-383350752019254'); ?>" class="facebook"><?php echo esc_html('Home made food'); ?><br><?php echo esc_html('Pho Bep Oi'); ?></a></li>
            </ul>
         </div>
      </div>
   </section> <!-- end section alacarte -->


   <!-- SECTION ALL DISHES -->
   <div class="u-wrapper--white">
      <section id="all-our-dishes" class="section-alldishes">
         <div class="heading-block u-center-text">
            <h2 class="heading-primary heading-block__title"><?php esc_html_e('Discover a wide range of Vietnamese savoury dishes', 'digital-delicious'); ?></h2>
            <p class="heading-block__subtitle"><?php esc_html_e('Depending on fresh vegetables and meat arrivals, the Chef decides what to put', 'digital-delicious'); ?> <span><?php esc_html_e('à la carte', 'digital-delicious') ?></span> <?php esc_html_e('every week', 'digital-delicious') ?></p>
            <span class="heading-block__separator"></span>
         </div>

         <!-- ALL DISHES GRID -->
         <div class="alldishes-grid">
            <?php
            $homepageDishes = new WP_Query(
               array(
                  'post_type' => 'dish',
               )
            );
            if ($homepageDishes->have_posts()) {
               while ($homepageDishes->have_posts()) {
                  $homepageDishes->the_post();
                  get_template_part('template-parts/content', 'dish');
               }
            } else {
            ?>
               <p class="heading-block__subtitle"><?php esc_html_e('Something might got wrong, there is no dish to display. Drop us a message to know what we have on the menu this week', 'digital-delicious'); ?></p>;
            <?php
            }
            wp_reset_postdata();
            ?>
         </div> <!-- alldishes-grid -->
      </section> <!-- end section all dishes -->
   </div>



   <!-- SECTION TESTIMONIALS -->
   <section class="section-testimonials">
      <div class="heading-block u-center-text">
         <h2 class="heading-primary heading-block__title"><?php esc_html_e('What our customers say about Pho Bep Oi', 'digital-delicious'); ?></h2>
         <p class="heading-block__subtitle"><?php esc_html_e('Have a look at some reviews left on our Facebook page', 'digital-delicious'); ?></p>
         <span class="heading-block__separator"></span>
      </div>

      <!-- TESTIMONIAL GRID -->
      <div class="testimonial-grid">
         <!-- INDIVIDUAL TEST. ITEM -->
         <div class="testimonial-grid__item testimonial-grid__item--1">
            <div class="testimonial-grid__icon"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/quotation_mark.svg')); ?></div>
            <div class="testimonial-grid__text testimonial-grid__text--1">
               <p><?php echo esc_html('Portions généreuses et Phò délicieux! Et prix plus que correct! N’hésitez pas à commander.') ?></p>
            </div>
         </div> <!-- end individual test. item -->
         <!-- INDIVIDUAL TEST. ITEM -->
         <div class="testimonial-grid__item">
            <div class="testimonial-grid__icon"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/quotation_mark.svg')); ?></div>
            <div class="testimonial-grid__text testimonial-grid__text--2">
               <p><?php echo esc_html('Excellent qualité et trop bon. Je recommande Home made food les yeux fermés'); ?></p>
            </div>
         </div> <!-- end individual test. item -->
         <!-- INDIVIDUAL TEST. ITEM -->
         <div class="testimonial-grid__item">
            <div class="testimonial-grid__icon"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/quotation_mark.svg')); ?></div>
            <div class="testimonial-grid__text testimonial-grid__text--3">
               <p><?php echo esc_html('such delicious and fresh home cooked food, I really recommend!'); ?></p>
            </div>
         </div> <!-- end individual test. item -->
      </div> <!-- end testimonial grid -->
   </section> <!-- end section testimonials -->


   <!-- SECTION ABOUT -->
   <div class="u-wrapper--white">
      <section id="about" class="section-about u-center-text">
         <div class="about__desc">
            <h2 class="heading-primary about__title"><?php esc_html_e('Hello, my name is Trang, I am the Chef at Pho Bep Oi', 'digital-delicious'); ?></h2>
            <p class="about__text"><?php esc_html_e('Risus, nec id velit morbi amet. Id cursus volutpat sollicitudin cras elit. Dolor, ullamcorper nibh et a. Id nunc, dictum ornare sed et nullam arcu in malesuada. Placerat eget gravida mi scelerisque sed est rhoncus. Enim, arcu urna et bibendum sit. Aliquam morbi bibendum facilisis massa sollicitudin felis, ut ut. Luctus auctor orci nunc diam quam facilisi sit ut molestie.', 'digital-delicious'); ?></p>
         </div> <!-- end about desc -->
         <div class="about__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about.jpg')); ?>" alt=<?php esc_html_e('chef at Pho Bep Oi') ?>>
         </div>
      </section> <!-- end section about -->
   </div>

   <!-- SECTION ORDER -->
   <section id="contact" class="section-order u-center-text">
      <div class="order__desc">
         <h2 class="heading-primary order__title"><?php esc_html_e('Order now', 'digital-delicious'); ?></h2>
         <p class="heading-block__subtitle order__subtitle"><?php esc_html_e('Tuesdays, Thursdays and Saturdays', 'digital-delicious'); ?> <span><?php echo esc_html('12h-13h // 18h-19h30'); ?></span></p>
         <p class="order__contact"><span class="order__contact-phone"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_phone.svg')); ?></span><a class="order__contact-phone-link" href="<?php echo esc_url('tel:#'); ?>"><?php echo esc_html('079 123 45 67'); ?></a></p>

         <p class="order__contact"><span class="order__contact-email"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_email.svg')); ?></span><a class="order__contact-email-link" href="<?php echo esc_url('mailto:#'); ?>"><?php echo esc_html('lastella.thitrang@gmail.com'); ?></a></p>

         <p class="order__contact"><span class="order__contact-social"><?php echo file_get_contents(esc_url(get_stylesheet_directory_uri() . '/images/icon_fb.svg')); ?></span><a href="<?php echo esc_url('https://www.facebook.com/Home-made-food-383350752019254'); ?>" class="facebook order__contact-social-link"><?php echo esc_html('Home made food (Pho Bep Oi)'); ?></a></p>
      </div> <!-- end order desc -->
      <div class="order__img">
         <img src="<?php echo esc_url(get_theme_file_uri('/images/hanged_lights.jpg')); ?>" alt=<?php esc_html('') ?>>
      </div>
   </section> <!-- end section order -->
</main><!-- #main -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><?php echo esc_html('Top'); ?></button>
<?php
get_sidebar();
get_footer();

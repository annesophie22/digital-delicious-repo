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
      <h1 class="hero-banner__title">Vietnamese Homemade Food</h1>
      <p class="hero-banner__subtitle">Invite a tasty bit of Vietnam in your plate</p>
   </div>
   <!-- SECTION A LA CARTE -->
   <section id="a-la-carte" class="section-alacarte">
      <div class="heading-block u-center-text">
         <h2 class="heading-primary heading-block__title">A la carte this week</h2>
         <p class="heading-block__subtitle">Check out what dishes are specially cooked for you this week</p>
         <span class="heading-block__separator"></span>
      </div>

      <!-- WEEK MENU GRID -->
      <div class="week-menu">
         <!-- week-menu__dish-grid -->
         <?php
         $homepageMenu = new WP_Query(
            array(
               "post_type" => "service-days",
               "orderby" => "meta_value_num", // = order by date defined in custom field
               "meta_key" => "calendar_day",
               "order" => "ASC",
            )
         );

         if ($homepageMenu->have_posts()) {
            while ($homepageMenu->have_posts()) {
               $homepageMenu->the_post();

               get_template_part("template-parts/content", "weekmenu");
            } /* end while */
         } /* end if */

         wp_reset_postdata();
         ?>
      </div> <!-- end week-menu__dish-grid -->

      <!-- DELIVERY CONDITIONS -->
      <div class="delivery-conditions u-center-text">
         <!-- delivery-conditions__item -->
         <div class="delivery-conditions__item">
            <h3 class="heading-secondary delivery-conditions__item-title">Delivery Service</h3>
            <ul class="delivery-conditions__item-details">
               <li>Available in Geneva</li>
               <li>CHF 10.00 per delivery</li>
               <li>Free delivery for orders from CHF 150.00</li>
               <li>Packed in paper bowl : + CHF 1.00</li>
            </ul>
         </div>
         <!-- delivery-conditions__item -->
         <div class="delivery-conditions__item">
            <h3 class="heading-secondary delivery-conditions__item-title">Order Pick-Up</h3>
            <ul class="delivery-conditions__item-details">
               <li>Avenue de Feuillasse 5</li>
               <li>1217 Meyrin</li>
            </ul>
         </div>
         <!-- delivery-conditions__item -->
         <div class="delivery-conditions__item">
            <h3 class="heading-secondary delivery-conditions__item-title">Pick Up & Delivery Time</h3>
            <ul class="delivery-conditions__item-details">
               <li>12h-13h // 18h-19h30</li>
               <li>Tuesdays, Thursdays and Saturdays</li>
            </ul>
         </div>
         <p class="delivery-conditions__notice">Please order at least 1 day in advance</p>
         <!-- order-details -->
         <div class="order-details">
            <h3 class="heading-secondary order-details__title">Order now</h3>
            <hr class="order-details__hr">
            <ul class="order-details__contact">
               <li><span class="order-details__contact-phone"><?php echo file_get_contents(get_theme_file_uri("/images/icon_phone.svg")); ?></span><a class="order-details__contact-link-tel" href="tel:+#">079 123 45 67</a></li>
               <li><span class="order-details__contact-email"><?php echo file_get_contents(get_theme_file_uri("/images/icon_email.svg")); ?></span><a class="order-details__contact-link-email" href="mailto:#">lastella.thitrang@gmail.com</a></li>
               <li><span class="order-details__contact-social"><?php echo file_get_contents(get_theme_file_uri("/images/icon_fb.svg")); ?></span><a class="order-details__contact-link-social" href="https://www.facebook.com/Home-made-food-383350752019254" class="facebook">Home made food<br>(Pho bep Oi)</a></li>
            </ul>
         </div>
      </div>
   </section> <!-- end section alacarte -->


   <!-- SECTION ALL DISHES -->
   <div class="u-wrapper--white">
      <section id="all-our-dishes" class="section-alldishes">
         <div class="heading-block u-center-text">
            <h2 class="heading-primary heading-block__title">Discover a wide range of Vietnamese savoury dishes</h2>
            <p class="heading-block__subtitle">Depending on fresh vegetables and meat arrivals, the Chef decides what to put <span>à la carte</span> every week</p>
            <span class="heading-block__separator"></span>
         </div>

         <!-- ALL DISHES GRID -->
         <div class="alldishes-grid">
            <?php
            $homepageDishes = new WP_Query(
               array(
                  "post_type" => "dish",
               )
            );
            if ($homepageDishes->have_posts()) {
               while ($homepageDishes->have_posts()) {
                  $homepageDishes->the_post();
                  get_template_part("template-parts/content", "dish");
               }
            }
            wp_reset_postdata();
            ?>
         </div> <!-- alldishes-grid -->
      </section> <!-- end section all dishes -->
   </div>



   <!-- SECTION TESTIMONIALS -->
   <section class="section-testimonials">
      <div class="heading-block u-center-text">
         <h2 class="heading-primary heading-block__title">What our customers say about Pho Bep Oi</h2>
         <p class="heading-block__subtitle">Have a look at some reviews left on our Facebook page</p>
         <span class="heading-block__separator"></span>
      </div>

      <!-- TESTIMONIAL GRID -->
      <div class="testimonial-grid">
         <!-- INDIVIDUAL TEST. ITEM -->
         <div class="testimonial-grid__item testimonial-grid__item--1">
            <img class="testimonial-grid__icon" src="<?php echo get_theme_file_uri("/images/quotation_mark.svg") ?>" alt="testimonial">
            <div class="testimonial-grid__text testimonial-grid__text--1">
               <p>Portions généreuses et Phò délicieux! Et prix plus que correct! N’hésitez pas à commander.</p>
            </div>
         </div> <!-- end individual test. item -->
         <!-- INDIVIDUAL TEST. ITEM -->
         <div class="testimonial-grid__item">
            <img class="testimonial-grid__icon" src="<?php echo get_theme_file_uri("/images/quotation_mark.svg") ?>" alt="testimonial">
            <div class="testimonial-grid__text testimonial-grid__text--2">
               <p>Excellent qualité et trop bon. Je recommande Home made food les yeux fermés</p>
            </div>
         </div> <!-- end individual test. item -->
         <!-- INDIVIDUAL TEST. ITEM -->
         <div class="testimonial-grid__item">
            <img class="testimonial-grid__icon" src="<?php echo get_theme_file_uri("/images/quotation_mark.svg") ?>" alt="testimonial">
            <div class="testimonial-grid__text testimonial-grid__text--3">
               <p>such delicious and fresh home cooked food, I really recommend!</p>
            </div>
         </div> <!-- end individual test. item -->
      </div> <!-- end testimonial grid -->
   </section> <!-- end section testimonials -->


   <!-- SECTION ABOUT -->
   <div class="u-wrapper--white">
      <section id="about" class="section-about u-center-text">
         <div class="about__desc">
            <h2 class="heading-primary about__title">Hello, my name is Trang, I am the Chef at Pho Bep Oi</h2>
            <p class="about__text">Risus, nec id velit morbi amet. Id cursus volutpat sollicitudin cras elit. Dolor, ullamcorper nibh et a. Id nunc, dictum ornare sed et nullam arcu in malesuada. Placerat eget gravida mi scelerisque sed est rhoncus. Enim, arcu urna et bibendum sit. Aliquam morbi bibendum facilisis massa sollicitudin felis, ut ut. Luctus auctor orci nunc diam quam facilisi sit ut molestie.</p>
         </div> <!-- end about desc -->
         <div class="about__img">
            <img src="<?php echo get_theme_file_uri("/images/about.jpg") ?>" alt="">
         </div>
      </section> <!-- end section about -->
   </div>

   <!-- SECTION ORDER -->
   <section id="contact" class="section-order u-center-text">
      <div class="order__desc">
         <h2 class="heading-primary order__title">Order now</h2>
         <p class="heading-block__subtitle order__subtitle">Tuesdays, Thursdays and Saturdays <span>12h-13h // 18h-19h30</span></p>
         <p class="order__contact"><span class="order__contact-phone"><?php echo file_get_contents(get_theme_file_uri("/images/icon_phone.svg")); ?></span><a href="tel:+41762473419">079 123 45 67</a></p>
         <p class="order__contact"><span class="order__contact-social"><?php echo file_get_contents(get_theme_file_uri("/images/icon_fb.svg")); ?></span><a href="https://www.facebook.com/Home-made-food-383350752019254" class="facebook">Home made food (Pho bep Oi)</a></p>
      </div> <!-- end order desc -->
      <div class="order__img">
         <img src="<?php echo get_theme_file_uri("/images/hanged_lights.jpg") ?>" alt="">
      </div>
   </section> <!-- end section order -->

</main><!-- #main -->

<?php
get_sidebar();
get_footer();

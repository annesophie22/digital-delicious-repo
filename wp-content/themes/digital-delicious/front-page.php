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
      <section class="section-alacarte">
         <div class="heading-block u-center-text">
            <h2 class="heading-primary heading-block__title">A la carte this week</h2>
            <p class="heading-block__subtitle">Check out what dishes are specially cooked for you this week</p>
            <span class="heading-block__separator"></span>
         </div>
         <!-- WEEK-MENU -->
         <div class="week-menu">
            <!-- WEEK MENU GRID --> 
            <div class="week-menu__dish-grid">
               <p class="week-menu__day">Tuesday</p>

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="heading-secondary card-dish__name">Bo Bun</h3>
                  <p class="card-dish__price">CHF 15.00/portion</p>
                  <p class="card-dish__desc">Noodle salad with stir fried beef</p>
               </div> <!-- end card-dish -->

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="heading-secondary card-dish__name">Spring Roll Chicken</h3>
                  <p class="card-dish__price">CHF 2.50/big roll</p>
                  <p class="card-dish__desc">Crispy roll filled in with vegetables and chicken</p>
               </div> <!-- end card-dish -->

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="heading-secondary card-dish__name">Banh Mi</h3>
                  <p class="card-dish__price">CHF 10.00/portion</p>
                  <p class="card-dish__desc">Vietnamese sandwich  filled with beef or chicken and veggies</p>
               </div> <!-- end card-dish -->
            </div><!-- end week-menu__dish-grid -->
            <hr>
            <!-- WEEK MENU GRID -->
            <div class="week-menu__dish-grid">
               <p class="week-menu__day">Saturday</p>

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="heading-secondary card-dish__name">Bo Bun</h3>
                  <p class="card-dish__price">CHF 15.00/portion</p>
                  <p class="card-dish__desc">Noodle salad with stir fried beef</p>
               </div> <!-- end card-dish -->
            </div><!-- end week-menu__dish-grid -->
         </div>

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
               <ul class="order-details__contact">
                  <li><a href="tel:+41762473419">076 247 34 19</a></li>
                  <li><a href="mailto:lastella.thitrang@gmail.com">lastella.thitrang@gmail.com</a></li>
                  <li><a href="https://www.facebook.com/Home-made-food-383350752019254" class="facebook">Home made food (Pho bep Oi)</a></li>
               </ul>
            </div>
         </div>
      </section> <!-- end section alacarte -->
      
      

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

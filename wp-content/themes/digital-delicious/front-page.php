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
      <section class="section-alacarte u-container-80">
         <div class="heading-block u-center-text">
            <h2 class="heading-primary u-margin-bottom-xs">A la carte this week</h2>
            <p class="heading-secondary u-margin-bottom-m">Check out what dishes are specially cooked for you this week</p>
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
                  <h3 class="card-dish__name">Bo Bun</h3>
                  <p class="card-dish__price">CHF 15.00/portion</p>
                  <p class="card-dish__desc">Noodle salad with stir fried beef</p>
               </div> <!-- end card-dish -->

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="card-dish__name">Spring Roll Chicken</h3>
                  <p class="card-dish__price">CHF 2.50/big roll</p>
                  <p class="card-dish__desc">Crispy roll filled in with vegetables and chicken</p>
               </div> <!-- end card-dish -->

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="card-dish__name">Banh Mi</h3>
                  <p class="card-dish__price">CHF 10.00/portion</p>
                  <p class="card-dish__desc">Vietnamese sandwich  filled with beef or chicken and veggies</p>
               </div> <!-- end card-dish -->
            </div><!-- end week-menu__dish-grid -->

            <!-- WEEK MENU GRID -->
            <div class="week-menu__dish-grid">
               <p class="week-menu__day">Saturday</p>

               <!-- CARD DISH -->
               <div class="card-dish">
                  <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
                  <h3 class="card-dish__name">Bo Bun</h3>
                  <p class="card-dish__price">CHF 15.00/portion</p>
                  <p class="card-dish__desc">Noodle salad with stir fried beef</p>
               </div> <!-- end card-dish -->
            </div><!-- end week-menu__dish-grid -->
         </div>

         <!-- DELIVERY CONDITIONS -->
         <div class="delivery-conditions">
            <!-- delivery-conditions__item -->
            <div class="delivery-conditions__item">
               <h3 class="delivery-condition__item-title">Delivery Service</h3>
               <ul class="delivery-condition__item-details">
                  <li>Available in Geneva</li>
                  <li>CHF 10.00 per delivery</li>
                  <li>Free delivery for orders from CHF 150.00</li>
                  <li>Packed in paper bowl : + CHF 1.00</li>
               </ul>
            </div>
            <!-- delivery-conditions__item -->
            <div class="delivery-conditions__item">
               <h3 class="delivery-condition__item-title">Order Pick-Up</h3>
               <ul class="delivery-condition__item-details">
                  <li>Avenue de Feuillasse 5<span>1217 Meyrin</span></li>
               </ul>
            </div>
            <!-- delivery-conditions__item -->
            <div class="delivery-conditions__item">
               <h3 class="delivery-condition__item-title">Pick Up & Delivery Time</h3>
               <ul class="delivery-condition__item-details">
                  <li>12h-13h // 18h-19h30</li>
                  <li>Tuesdays, Thursdays and Saturdays</li>
               </ul>
            </div>
            <p class="delivery-conditions__notice">Please order at least 1 day in advance</p>
            <!-- order-details -->
            <div class="order-details">
               <h3 class="order-details__title">Order now</h3>
               <ul class="order-details__contact">
                  <li>079 247 34 19</li>
                  <li>lastella.thitran@gmail.com</li>
                  <li><span>Facebook</span>Home made food (Pho bep Oi)</li>
               </ul>
            </div>
         </div>
      </section> <!-- end section alacarte -->
      
      

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

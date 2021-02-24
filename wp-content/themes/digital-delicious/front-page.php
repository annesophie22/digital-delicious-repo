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
      <section class="section-alacarte">
         <div class="u-center-text">
            <h2 class="heading-primary u-margin-bottom-small">A la carte this week</h2>
            <p class="heading-secondary">Check out what dishes are specially cooked for you this week</p>
         </div>
         <div class="week-menu">  
            <div class="week-menu__dish-grid">
               <p class="week-menu__day">Tuesday</p>
               <div class="card-dish-menu">
                  <h3 class="card-dish-menu__name">Bo Bun</h3>
                  <p class="card-dish-menu__price">CHF 15.00/portion</p>
                  <p class="card-dish-menu__desc">Noodle salad with stir fried beef</p>
               </div> <!-- card-dish-menu -->
            </div><!-- week-menu__dish-grid -->

            <div class="week-menu__dish-grid">
               <p class="week-menu__day">Saturday</p>
               <div class="card-dish-menu">
                  <h3 class="card-dish-menu__name">Tom Bun</h3>
                  <p class="card-dish-menu__price">CHF 17.00/portion</p>
                  <p class="card-dish-menu__desc">Noodle salad with stir fried shrimps</p>
               </div><!-- card-dish-menu -->
            </div> <!-- week-menu__dish-grid -->
         </div> <!-- week-menu -->
         <div class="delivery-conditions">
            <div class="delivery-conditions__item">
               <h3 class="delivery-condition__item-title">Delivery Service</h3>
               <ul class="delivery-condition__item-details">
                  <li>Available in Geneva</li>
                  <li>CHF 10.00 per delivery</li>
                  <li>Free delivery for orders from CHF 150.00</li>
                  <li>Packed in paper bowl : + CHF 1.00</li>
               </ul>
            </div><!-- delivery-conditions__item -->
            <div class="delivery-conditions__item">
               <h3 class="delivery-condition__item-title">Order Pick-Up</h3>
               <ul class="delivery-condition__item-details">
                  <li>Avenue de Feuillasse 5<span>1217 Meyrin</span></li>
               </ul>
            </div><!-- delivery-conditions__item -->
            <div class="delivery-conditions__item">
               <h3 class="delivery-condition__item-title">Pick Up & Delivery Time</h3>
               <ul class="delivery-condition__item-details">
                  <li>12h-13h // 18h-19h30</li>
                  <li>Tuesdays, Thursdays and Saturdays</li>
               </ul>
            </div><!-- delivery-conditions__item -->
            <p class="delivery-conditions__notice">Please order at least 1 day in advance</p>
            <div class="order-details">
               <h3 class="order-details__title">Order now</h3>
               <ul class="order-details__contact">
                  <li>079 247 34 19</li>
                  <li>lastella.thitran@gmail.com</li>
                  <li><span>Facebook</span>Home made food (Pho bep Oi)</li>
               </ul>
            </div><!-- order-details -->
         </div> <!-- delivery-conditions -->
      </section> <!-- alacarte -->
      
      

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

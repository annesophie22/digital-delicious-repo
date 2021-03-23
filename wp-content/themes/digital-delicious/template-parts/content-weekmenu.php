<?php

/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */
?>

<?php
// Retrieving the date and spliting it with "Name of the day", "Day number", "Month", "Year"
$relatedCalendar = new DateTime(get_field('calendar_day'));

$relatedTextDay = $relatedCalendar->format('l');
$relatedNumDay = $relatedCalendar->format('j');
$relatedMonth = $relatedCalendar->format('F');
$relatedYear = $relatedCalendar->format('Y');

?>

<p class="day-grid__title"><mark class="highlighted">
      <span><?php echo esc_html($relatedTextDay); ?></span>
      <span><?php echo esc_html($relatedNumDay); ?></span>
      <span><?php echo esc_html($relatedMonth); ?></span>
      <span><?php echo esc_html($relatedYear); ?></span>
   </mark></p>

<div class="day-grid">
   <?php
   // Retrieving and displaying the dish(es) associated with the calendar day, through ACF
   $relatedDish = get_field('dishes_today');
   if ($relatedDish) {
      foreach ($relatedDish as $dish) {
         $dishTitle = get_the_title($dish);
         $dishPrice = get_field('dish_price', $dish->ID);
         $dishDesc = get_field('dish_desc', $dish->ID);
   ?>
         <div class="card-dish">
            <!-- card dish -->
            <div class="card-dish__img-container">
               <?php echo get_the_post_thumbnail($dish->ID, '', array(
                  'class' => 'card-dish__img',
                  'alt' => '',
               )); ?>
            </div>
            <h3 class="heading-secondary card-dish__name"><?php printf(esc_html__('%s', 'digital-delicious'), $dishTitle); ?></h3>
            <p class="card-dish__price"><?php echo esc_html('CHF ') ?><?php printf(esc_html__('%s', 'digital-delicious'), $dishPrice); ?></p>
            <p class="card-dish__desc"><?php printf(esc_html__('%s', 'digital-delicious'), $dishDesc); ?></p>
         </div> <!-- end card dish -->
      <?php
      }
   } else {
      ?>
      <p class="heading-block__subtitle" style="margin: 1.6rem 0 0;"><?php esc_html_e('Sorry, no dish will be cooked today!', 'digital-delicious'); ?></p>;
   <?php
   }

   ?>
</div> <!-- end day grid -->

<hr class="day-grid__hr">
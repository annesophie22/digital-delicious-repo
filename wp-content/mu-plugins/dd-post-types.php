<?php 
function digital_delicious_post_types() {
   /* Dish post type */
   $labels = array(
      "name"   => _x( "Dishes", "digital-delicious" ),
      "menu_name" => _x( "Dishes", "digital-delicious" ),
      "singular_name" => _x( "Dish", "digital-delicious" ),
      "add_new_item" => __( "Add New Dish", "digital-delicious" ),
      "edit_item" => __( "Edit Dish", "digital-delicious" ),
      "all_items" => __( "All Dishes", "digital-delicious" ),
   );
   $args = array(
      "labels" => $labels,
      "public" => false,
      "supports" => array( "title", "thumbnail" ),
      "show_ui" => true,
      "menu_icon" => "dashicons-food",
   );

   register_post_type("dish", $args);

    /* Service days post type */
    $labels = array(
        "name"   => _x( "Service Days", "digital-delicious" ),
        "menu_name" => _x( "Service Days", "digital-delicious" ),
        "singular_name" => _x( "Service Day", "digital-delicious" ),
        "add_new_item" => __( "Add New Service Day", "digital-delicious" ),
        "edit_item" => __( "Edit Service Day", "digital-delicious" ),
        "all_items" => __( "All Service Days", "digital-delicious" ),
     );
     $args = array(
        "labels" => $labels,
        "public" => false,
        "supports" => array( "title" ),
        "show_ui" => true,
        "menu_icon" => "dashicons-calendar",
     );

     register_post_type("service-days", $args);

}

add_action("init", "digital_delicious_post_types");
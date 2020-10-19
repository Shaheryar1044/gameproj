<?php
/**
 * Child theme functions
 *
 * Mit einem ChildTheme kannst du wichtige Dinge anpassen, sodass diese bei einem
 * Theme Update nicht überschrieben werden können.
 */

/**
 * Ich lade jetzt die parent style.css Datei
 *
 */
function get_data(){
   require_once($_SERVER['DOCUMENT_ROOT'] .'/gaming/wp-config.php');
    $conn= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
     global $current_user;
    get_currentuserinfo();
    $email =  $current_user->user_email;
    //$email = 'bilal2@info.com';
    $sql = "SELECT * FROM wp_woocommerce_order_itemmeta as meta JOIN wp_woocommerce_order_items as items ON meta.order_item_id = items.order_item_id  JOIN wp_wc_order_product_lookup as p ON items.order_id = p.order_id JOIN wp_posts as post ON p.product_id = post.ID WHERE meta_value = '$email'";
    $result = $conn->query($sql);
    //print_r($result);
    
    if ($result->num_rows > 0) {
        echo "<pre>";
        while($row = $result->fetch_assoc()) {
            echo $row['post_name'];
        }
    }else{
         echo $mysqli->error;
    }
}
add_shortcode('greeting', 'get_data');

function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

//ACF shortcodes im Frontend anzeigen
//
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

/*Woocommerce Warenkorb Button im Shop anzeigen*/

// add_action( ‘woocommerce_after_shop_loop_item’, ‘woocommerce_template_loop_add_to_cart’, 10 );

/* Fehlermeldung beim Formular in Single Products, wenn Form nicht ausgefüllt wurde */

add_filter( 'gform_validation_message_6', function ( $message, $form ) {
    if ( gf_upgrade()->get_submissions_block() ) {
        return $message;
    }
 
    $message = "<div class='validation_error'><p>Achtung, bevor du das Produkt in den Warenkorb legst, fülle bitte das Formular zu den Gästen und zum Gastgeber aus (Name / Emailadresse)</p>";
    $message .= '<ul>';
 
    foreach ( $form['fields'] as $field ) {
        if ( $field->failed_validation ) {
            $message .= sprintf( '<li>%s - %s</li>', GFCommon::get_label( $field ), $field->validation_message );
        }
    }
 
    $message .= '</ul></div>';
 
    return $message;
}, 10, 2 );


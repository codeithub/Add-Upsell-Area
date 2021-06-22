/**
 * @snippet       Upsell Area - WooCommerce Checkout
 * @author        Codeithub
 */
 
add_action( 'woocommerce_review_order_before_submit', 'codeithub_checkout_add_on', 9999 );
 
function codeithub_checkout_add_on() {
   $product_ids = array( 14877, 14879, 15493 );
   $in_cart = false;
   foreach( WC()->cart->get_cart() as $cart_item ) {
      $product_in_cart = $cart_item['product_id'];
      if ( in_array( $product_in_cart, $product_ids ) ) {
         $in_cart = true;
         break;
      }
   }
   if ( ! $in_cart ) {
      echo '<h4>Make a Donation?</h4>';
      echo '<p><a class="button" style="margin-right: 1em; width: auto" href="?add-to-cart=14877"> €10 </a><a class="button" style="margin-right: 1em; width: auto" href="?add-to-cart=14879"> €20 </a><a class="button" style="width: auto" href="?add-to-cart=15493"> €50 </a></p>';
   }
}

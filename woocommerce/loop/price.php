<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) :
  // Get the prices
    $price_excl_tax = wc_get_price_excluding_tax( $product ); // price without VAT
    $price_incl_tax = wc_get_price_including_tax( $product );  // price with VAT
    $tax_amount     = $price_incl_tax - $price_excl_tax; // VAT amount

    // Display the prices
?>
    <span class="price price-excl"><?php echo wc_price( $price_excl_tax ); ?></span><br>
    <span class="price tax-price"><?php  echo wc_price( $tax_amount ); ?></span><br>
    <span class="price price-incl"><?php echo wc_price( $price_incl_tax ); ?></span>
<?php endif; ?>
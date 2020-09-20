<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Get the prices
$price_excl_tax = wc_get_price_excluding_tax( $product ); // price without VAT
$price_incl_tax = wc_get_price_including_tax( $product );  // price with VAT
$tax_amount     = ((($price_incl_tax / $price_excl_tax) - 1) * 100); // VAT amount

// Display the prices
?>

<p class="price-excl"><?php echo wc_price( $price_excl_tax ); ?></p>
<p class="tax-price"><?php  echo $tax_amount . '% VAT'; ?></p>
<p class="price-incl"><?php  echo wc_price( $price_incl_tax ); ?></p>
<?php
/**
 * The template for displaying demo plugin content.
 *
 * Override this template by copying it to yourtheme/dc-product-vendor/emails/approved-vendor-account.php
 *
 * @author 		WC Marketplace
 * @package 	dc-product-vendor/Templates
 * @version   0.0.1
 */
 
global $WCMp;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
?>
<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>
<p><?php printf( __( "Felicitări! Înregistrarea ta pe %s a fost aprobată!", 'dc-woocommerce-multi-vendor' ), get_option( 'blogname' ) ); ?></p>
<p>
	<?php _e( "Status înregistrare: Aprobat",  'dc-woocommerce-multi-vendor' ); ?><br/>
	<?php printf( __( "Nume de utilizator: %s",  'dc-woocommerce-multi-vendor' ), $user_login ); ?>
</p>
<p><?php _e('Îți mulțumim că ai ales să faci parte din inițiativa ROSurse și încă o dată, bine ai venit!', 'dc-woocommerce-multi-vendor') ?> <p>
<?php do_action( 'wcmp_email_footer' );?>
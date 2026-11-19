<?php
/**
 * The buttons under the steps
 *
 * @package WPMultiStepCheckout
 */

defined( 'ABSPATH' ) || exit;

// phpcs:disable

$buttons_class = apply_filters( 'wmsc_buttons_class', 'button alt wp-element-button' );
$wrapper_class = apply_filters( 'wmsc_buttons_wrapper_class', 'wpmc-nav-wrapper' );
$back_to_cart  = ( isset( $options['show_back_to_cart_button'] ) && $options['show_back_to_cart_button'] ) ? true : false;
if ( ! $back_to_cart ) {
	$wrapper_class .= ' wpmc-no-back-to-cart';
}

?>

<!-- The steps buttons -->
<div class="<?php echo $wrapper_class; ?>">
	<?php if ( $back_to_cart ) : ?>
		<button data-href="<?php echo wc_get_cart_url(); ?>" id="wpmc-back-to-cart" class="<?php echo $buttons_class; ?>" type="button"><?php echo $options['t_back_to_cart']; ?></button>
	<?php endif; ?>
	<button id="wpmc-prev" class="<?php echo $buttons_class; ?> button-inactive wpmc-nav-button" type="button"><?php echo $options['t_previous']; ?></button>
	<?php if ( $options['show_login_step'] && $show_login_step ) : ?>
		<button id="wpmc-next" class="<?php echo $buttons_class; ?> button-active wpmc-nav-button" type="button"><?php echo $options['t_next']; ?></button>
		<button id="wpmc-skip-login" class="<?php echo $buttons_class; ?> button-active current wpmc-nav-button" type="button"><?php echo $options['t_skip_login']; ?></button>
	<?php else : ?>
		<button id="wpmc-next" class="<?php echo $buttons_class; ?> button-active current wpmc-nav-button" type="button"><?php echo $options['t_next']; ?></button>
	<?php endif; ?>
</div>

<div style="clear: both;"></div>

<?php // phpcs:enable ?>

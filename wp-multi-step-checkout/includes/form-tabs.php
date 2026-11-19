<?php
/**
 * The steps tabs
 *
 * @package WPMultiStepCheckout
 */

defined( 'ABSPATH' ) || exit;

// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

$i                  = 0;
$number_of_steps    = ( $show_login_step && $options['show_login_step'] ) ? count( $steps ) + 1 : count( $steps );
$current_step_title = ( $show_login_step ) ? 'login' : key( array_slice( $steps, 0, 1, true ) );

do_action( 'wpmc_before_tabs' );

?>

<!-- The steps tabs -->
<div class="wpmc-tabs-wrapper">
	<ul class="wpmc-tabs-list wpmc-<?php echo esc_attr( $number_of_steps ); ?>-tabs" data-current-title="<?php echo esc_attr( $current_step_title ); ?>">
	<?php if ( $show_login_step && $options['show_login_step'] ) : ?>
		<li class="wpmc-tab-item current wpmc-login" data-step-title="login">
			<div class="wpmc-tab-number"><?php echo esc_html( $i = $i + 1 ); ?></div>
			<div class="wpmc-tab-text"><?php echo esc_html( $options['t_login'] ); ?></div>
		</li>
	<?php endif; ?>
	<?php
	foreach ( $steps as $_id => $_step ) :
		$class = ( ! ( $show_login_step && $options['show_login_step'] ) && $i == 0 ) ? ' current' : '';
		?>
		<li class="wpmc-tab-item<?php echo esc_attr( $class ); ?> wpmc-<?php echo esc_attr( $_id ); ?>" data-step-title="<?php echo esc_attr( $_id ); ?>">
			<div class="wpmc-tab-number"><?php echo esc_html( $i = $i + 1 ); ?></div>
			<div class="wpmc-tab-text"><?php echo esc_html( $_step['title'] ); ?></div>
		</li>
	<?php endforeach; ?>
	</ul>
</div>

<?php // phpcs:enable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound ?>

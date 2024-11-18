<?php
/*Template name: Change Password*/
get_header();?>
<div id="page" class="site-page">
	<div class="breadcrumb-heading">
		<div class="container">
<?php if(is_user_logged_in()) {?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content woocommerce">
		<?php wc_print_notices( $return ); ?>
		
		<?php
		/**
		 * Edit account form
		 *
		 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
		 *
		 * HOWEVER, on occasion WooCommerce will need to update template files and you
		 * (the theme developer) will need to copy the new files to your theme to
		 * maintain compatibility. We try to do this as little as possible, but it does
		 * happen. When this occurs the version of the template file will be bumped and
		 * the readme will list any important changes.
		 *
		 * @see https://docs.woocommerce.com/document/template-structure/
		 * @package WooCommerce\Templates
		 * @version 3.5.0
		 */

		defined( 'ABSPATH' ) || exit;
		?>

		<?php 
		$user = wp_get_current_user();
		if(get_user_meta($user->ID, '_reset_pw', true) == 1){
		?>
		<div class="u-columns col2-set">
		<div class="u-column1 col-1">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<form class="woocommerce-EditAccountForm change-password" action="" method="post">


			<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<input type="hidden" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
				<input type="hidden" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
				<input type="hidden" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> 
				<input type="hidden" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password_1"><?php esc_html_e( 'New password', 'woocommerce' ); ?></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
			</p>

			<p>
				<?php wp_nonce_field( 'save_account_lk', 'save-account-nonce' ); ?>
				<button type="submit" class="woocommerce-Button button" name="save_account_details_lk" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
				<input type="hidden" name="action" value="save_account_details_lk" />
			</p>

		</form>
		</div>
		</div>
	<?php }
	else echo __('Restricted Content.'); ?>
	</div>
</article>
<?php } 
else
	echo '<p>'.__('Please login.').'</p>';
?>
</div>
</div>
</div>
<?php get_footer(); ?>
<?php

add_action( 'admin_menu', 'fashion_designer_mart_getting_started' );
function fashion_designer_mart_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fashion-designer-mart'), esc_html__('Get Started', 'fashion-designer-mart'), 'edit_theme_options', 'fashion-designer-mart-guide-page', 'fashion_designer_mart_test_guide');
}

function fashion_designer_mart_admin_enqueue_scripts() {
	wp_enqueue_style( 'fashion-designer-mart-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'fashion_designer_mart_admin_enqueue_scripts' );

if ( ! defined( 'FASHION_DESIGNER_MART_DOCS_FREE' ) ) {
define('FASHION_DESIGNER_MART_DOCS_FREE',__('https://www.misbahwp.com/docs/fashion-designer-mart-free-docs/','fashion-designer-mart'));
}
if ( ! defined( 'FASHION_DESIGNER_MART_DOCS_PRO' ) ) {
define('FASHION_DESIGNER_MART_DOCS_PRO',__('https://www.misbahwp.com/docs/fashion-designer-mart-pro-docs','fashion-designer-mart'));
}
if ( ! defined( 'FASHION_DESIGNER_MART_BUY_NOW' ) ) {
define('FASHION_DESIGNER_MART_BUY_NOW',__('https://www.misbahwp.com/themes/fashion-wordpress-theme/','fashion-designer-mart'));
}
if ( ! defined( 'FASHION_DESIGNER_MART_SUPPORT_FREE' ) ) {
define('FASHION_DESIGNER_MART_SUPPORT_FREE',__('https://wordpress.org/support/theme/fashion-designer-mart','fashion-designer-mart'));
}
if ( ! defined( 'FASHION_DESIGNER_MART_REVIEW_FREE' ) ) {
define('FASHION_DESIGNER_MART_REVIEW_FREE',__('https://wordpress.org/support/theme/fashion-designer-mart/reviews/#new-post','fashion-designer-mart'));
}
if ( ! defined( 'FASHION_DESIGNER_MART_DEMO_PRO' ) ) {
define('FASHION_DESIGNER_MART_DEMO_PRO',__('https://www.misbahwp.com/demo/fashion-designer-mart/','fashion-designer-mart'));
}
if( ! defined( 'FASHION_DESIGNER_MAR_THEME_BUNDLE' ) ) {
define('FASHION_DESIGNER_MAR_THEME_BUNDLE',__('https://www.misbahwp.com/themes/wordpress-bundle/','fashion-designer-mart'));
}

function fashion_designer_mart_test_guide() { ?>
	<?php $fashion_designer_mart_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( FASHION_DESIGNER_MART_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'fashion-designer-mart' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'fashion-designer-mart' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( FASHION_DESIGNER_MART_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'fashion-designer-mart' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( FASHION_DESIGNER_MART_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'fashion-designer-mart' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','fashion-designer-mart'); ?><?php echo esc_html( $fashion_designer_mart_theme ); ?>  <span><?php esc_html_e('Version: ', 'fashion-designer-mart'); ?><?php echo esc_html($fashion_designer_mart_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $fashion_designer_mart_theme->get_screenshot() ); ?>" />
				<div id="description-inside">
					<?php
						$fashion_designer_mart_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $fashion_designer_mart_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'fashion-designer-mart' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','fashion-designer-mart'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( FASHION_DESIGNER_MAR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'fashion-designer-mart' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( FASHION_DESIGNER_MAR_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'fashion-designer-mart' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( FASHION_DESIGNER_MAR_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'fashion-designer-mart' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'fashion-designer-mart' ); ?></h3>
				<div class="inside theme-bundle">
					<p class="offer"><?php esc_html_e('Get 50+ Perfect WordPress Theme In A Single Package at just $79."','fashion-designer-mart'); ?></p>
					<p class="coupon"><?php esc_html_e('Exclusive Offer !! Get Our Theme Pack At 10% Off','fashion-designer-mart'); ?><span class="coupon-code"><?php esc_html_e('"Themespack10"','fashion-designer-mart'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( FASHION_DESIGNER_MAR_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'fashion-designer-mart' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','fashion-designer-mart'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','fashion-designer-mart'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','fashion-designer-mart'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','fashion-designer-mart'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>

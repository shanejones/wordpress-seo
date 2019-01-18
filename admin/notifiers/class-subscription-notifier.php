<?php


class WPSEO_Subscription_Notifier implements WPSEO_Banner_Notification {

	/**
	 * WPSEO_Subscription_Notifier constructor.
	 */
	public function __construct() {
	}

	public function notify() {
		// translators: %1$s expands to Yoast
		$title = sprintf(  __( 'One or more %1$s plugins are about to expire!', 'wordpress-seo' ), 'Yoast' );
		$image_url = esc_url( plugin_dir_url( WPSEO_FILE ) . 'images/subscription-notification.svg' );

		return WPSEO_Notification::display( $title, '', $image_url );
	}

	/**
	 * Registers all hooks to WordPress
	 */
	public function register_hooks() {
		// TODO: Implement register_hooks() method.
	}
}

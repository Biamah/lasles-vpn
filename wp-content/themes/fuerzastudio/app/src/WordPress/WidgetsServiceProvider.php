<?php

namespace Fuerza\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Register widgets and sidebars.
 */
class WidgetsServiceProvider implements ServiceProviderInterface {

	/**
	 * Register function
	 *
	 * @param \Pimple\Container $container container to register.
	 * @return void
	 */
	public function register( $container ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
		// Nothing to register.
	}

	/**
	 * Bootstrap function
	 *
	 * @param \Pimple\Container $container container to register.
	 * @return void
	 */
	public function bootstrap( $container ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
		add_action( 'widgets_init', [ $this, 'registerWidgets' ] );
		add_action( 'widgets_init', [ $this, 'registerSidebars' ] );
	}

	/**
	 * Register widgets.
	 *
	 * @return void
	 */
	public function registerWidgets() {
		// phpcs:ignore
		// register_widget( MyWidgetClass::class );
	}

	/**
	 * Register sidebars.
	 *
	 * @return void
	 */
	public function registerSidebars() {
		/**
		 * Array of default options.
		 *
		 * @var array
		 */
		$default_options = [
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		];

		/**
		 * Default sidebar.
		 */
		register_sidebar(
			array_merge(
				$default_options,
				[
					'name' => __( 'Default Sidebar', 'fuerza' ),
					'id'   => 'default-sidebar',
				]
			)
		);
	}
}

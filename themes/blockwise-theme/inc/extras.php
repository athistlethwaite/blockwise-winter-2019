<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Blockwise_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function blockwise_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter('body_class', 'blockwise_body_classes');

function blockwise_login_logo()
{
	$logo_url = get_template_directory_uri() . '/assets/images/blockwise-login.png';
	echo '<style>
		.login h1 a {
			background-image: url(' . $logo_url . ');
			background-repreat: no-repreat;
			background-size: 100% 100%;
			height: 100px;
			width: 100%;
			margin: 0;
		}
		.login .button.button-primary {
			background-color : $color__brand-blue-sapphire;
		}
	</style>';
}
add_action('login_head', 'blockwise_login_logo');

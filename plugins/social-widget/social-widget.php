<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Social_Widget
 * @author    Alysha Thistlethwaite <alysha.thistlethwaite@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2019 RED Academy
 *
 * @wordpress-plugin
 * Plugin Name:       Blockwise Social Widget
 * Plugin URI:        https://github.com/athistlethwaite/inhabitent
 * Description:       A widget that displays social media icons for the Blockwise website.
 * Version:           1.0.0
 * Author:            Alysha Thistlethwaite
 * Author URI:        https://github.com/redacademy/blockwise-winter-2019 
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Social_Widget extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'social-media-icon';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Blockwise Social Media',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Add social media.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
	
		$facebook = empty( $instance['facebook'] ) ? '' : apply_filters( 'facebook', $instance['facebook'] );
		$instagram = empty( $instance['instagram'] ) ? '' : apply_filters( 'instagram', $instance['instagram'] );
		$linkedin = empty( $instance['linkedin'] ) ? '' : apply_filters( 'linkedin', $instance['linkedin'] );
		$twitter = empty( $instance['twitter'] ) ? '' : apply_filters( 'twitter', $instance['twitter'] );
	
		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );


		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'facebook' => '',
				'instagram' => '',
				'linkedin' => '', 
				'twitter' => '', 
			)
		);

		$facebook = strip_tags( $instance['facebook'] );
		$instagram = strip_tags( $instance['instagram'] );
		$linkedin = strip_tags( $instance['linkedin'] );
		$twitter = strip_tags( $instance['twitter'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Social_Widget' );	
});

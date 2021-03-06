<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists('Filterable_Portfolio_Single_Post') ):

class Filterable_Portfolio_Single_Post
{
	private $plugin_path;
	private $options;

	/**
	 * class construct of filterable portfolio single post
	 * 
	 * @param string $plugin_path
	 * @param array $options
	 */
	public function __construct( $plugin_path, $options )
	{
		$this->plugin_path 	= $plugin_path;
		$this->options 		= $options;

		add_filter( 'post_thumbnail_html', array( $this, 'post_thumbnail_html' ) );
		add_filter( 'the_content', array( $this, 'portfolio_content' ), 20 );
	}

	/**
	* Filters the post thumbnail HTML for portfolio.
	*
	* @param string $html The post thumbnail HTML.
	*/
	public function post_thumbnail_html( $html )
	{
		if ( is_singular( 'portfolio' ) ) {

			if ( $this->single_portfolio_loaded_in_theme() ) {
				return $html;
			}

			$ids = get_post_meta( get_the_ID(), '_project_images', true );
			$ids = array_filter(explode(',', rtrim( $ids, ',') ) );
			if ( count($ids) > 1 ){
				return;
			}

			return $html;
		}

		return $html;
	}

	/**
	 * Filterable portfolio single page content
	 * 
	 * @param  string $content
	 * @return string
	 */
	public function portfolio_content( $content )
	{
		if ( is_singular( 'portfolio' ) ) {

			if ( $this->single_portfolio_loaded_in_theme() ) {
				return $content;
			}

			ob_start();
			require $this->plugin_path . '/templates/single-portfolio.php';

			if ($this->options['show_related_projects']) {
			    require $this->plugin_path . '/templates/related-project.php';
			}
		    $project = ob_get_contents();
		    ob_end_clean();

			return $project;
		}

		return $content;
	}

	/**
	 * Check if single-portfolio.php file loaded in theme directory
	 * 
	 * @return boolean
	 */
	public function single_portfolio_loaded_in_theme()
	{
		if (locate_template("single-portfolio.php") != ''){
			return true;
		}

		return false;
	}

}

endif;
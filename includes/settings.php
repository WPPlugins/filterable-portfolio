<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$optionPage = new ShaplaTools_Settings_API;
$optionPage->add_menu(array(
	'page_title' 	=> __('Settings', 'filterable-portfolio'),
	'menu_title' 	=> __('Settings', 'filterable-portfolio'),
	'menu_slug' 	=> 'fp-settings',
	'parent_slug' 	=> 'edit.php?post_type=portfolio',
	'option_name' 	=> 'filterable_portfolio',
));

// Add settings page tab
$optionPage->add_tab([
    'id' => 'general',
    'title' => __('General Settings', 'filterable-portfolio'),
]);
$optionPage->add_tab([
    'id' => 'responsive-settings',
    'title' => __('Responsive Settings', 'filterable-portfolio'),
]);
$optionPage->add_tab([
    'id' => 'single-portfolio-settings',
    'title' => __('Single Portfolio Settings', 'filterable-portfolio'),
]);
$optionPage->add_tab([
    'id' => 'advanced-settings',
    'title' => __('Advanced Settings', 'filterable-portfolio'),
]);

$optionPage->add_field(array(
	'id' 	=> 'columns',
	'type' 	=> 'select',
	'std' 	=> 'l4',
	'name' 	=> __('Columns', 'filterable-portfolio'),
	'desc' 	=> __('The number of items you want to see on the Large Desktop Layout.', 'filterable-portfolio'),
	'options' => array(
		'l12' => __('1 Column', 'filterable-portfolio'),
		'l6' => __('2 Columns', 'filterable-portfolio'),
		'l4' => __('3 Columns', 'filterable-portfolio'),
		'l3' => __('4 Columns', 'filterable-portfolio'),
		'l2' => __('6 Columns', 'filterable-portfolio'),
	),
    'tab'   => 'responsive-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'columns_desktop',
	'type' 	=> 'select',
	'std' 	=> 'm4',
	'name' 	=> __('Columns:Desktop', 'filterable-portfolio'),
	'desc' 	=> __('The number of items you want to see on the Desktop Layout (Screens size from 993 pixels DP to 1199 pixels DP)', 'filterable-portfolio'),
	'options' => array(
		'm12' => __('1 Column', 'filterable-portfolio'),
		'm6' => __('2 Columns', 'filterable-portfolio'),
		'm4' => __('3 Columns', 'filterable-portfolio'),
		'm3' => __('4 Columns', 'filterable-portfolio'),
	),
    'tab'   => 'responsive-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'columns_tablet',
	'type' 	=> 'select',
	'std' 	=> 's6',
	'name' 	=> __('Columns:Tablet', 'filterable-portfolio'),
	'desc' 	=> __('The number of items you want to see on the Tablet Layout (Screens size from 601 pixels DP to 992 pixels DP)', 'filterable-portfolio'),
	'options' => array(
		's12' => __('1 Column', 'filterable-portfolio'),
		's6' => __('2 Columns', 'filterable-portfolio'),
		's4' => __('3 Columns', 'filterable-portfolio'),
		's3' => __('4 Columns', 'filterable-portfolio'),
	),
    'tab'   => 'responsive-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'columns_phone',
	'type' 	=> 'select',
	'std' 	=> 'xs12',
	'name' 	=> __('Columns:Phone', 'filterable-portfolio'),
	'desc' 	=> __('The number of items you want to see on the Mobile Layout (Screens size from 320 pixels DP to 600 pixels DP)', 'filterable-portfolio'),
	'options' => array(
		'xs12' => __('1 Column', 'filterable-portfolio'),
		'xs6' => __('2 Columns', 'filterable-portfolio'),
		'xs4' => __('3 Columns', 'filterable-portfolio'),
		'xs3' => __('4 Columns', 'filterable-portfolio'),
	),
    'tab'   => 'responsive-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'portfolio_theme',
	'type' 	=> 'select',
	'std' 	=> 'two',
	'name' 	=> __('Portfolio Theme', 'filterable-portfolio'),
	'desc' 	=> __('Choose portfolio theme.', 'filterable-portfolio'),
	'options' => array(
		'one' => __('Theme One - Classic Layout', 'filterable-portfolio'),
		'two' => __('Theme Two - Classic Layout', 'filterable-portfolio'),
	),
));
$optionPage->add_field(array(
	'id' 	=> 'image_size',
	'type' 	=> 'image_sizes',
	'std' 	=> 'filterable-portfolio',
	'name' 	=> __('Image Size', 'filterable-portfolio'),
	'desc' 	=> __('Choose portfolio images size.', 'filterable-portfolio'),
));
$optionPage->add_field(array(
	'id' 	=> 'button_color',
	'type' 	=> 'color',
	'std' 	=> '#4cc1be',
	'name' 	=> __('Button Color', 'filterable-portfolio'),
	'desc' 	=> __('Choose color for filter buttons, border color and details buttons.', 'filterable-portfolio'),
));
$optionPage->add_field(array(
	'id' 	=> 'order',
	'type' 	=> 'select',
	'std' 	=> 'DESC',
	'name' 	=> __('Portfolio Order', 'filterable-portfolio'),
	'desc' 	=> __('Choose portfolio ascending or descending order.', 'filterable-portfolio'),
	'options' => array(
		'ASC' => __('Ascending order', 'filterable-portfolio'),
		'DESC' => __('Descending order', 'filterable-portfolio'),
	),
));
$optionPage->add_field(array(
	'id' 	=> 'orderby',
	'type' 	=> 'select',
	'std' 	=> 'ID',
	'name' 	=> __('Portfolio Order By', 'filterable-portfolio'),
	'desc' 	=> __('Sort retrieved portfolios by parameter.', 'filterable-portfolio'),
	'options' => array(
		'ID' 		=> __('ID', 'filterable-portfolio'),
		'title' 	=> __('Title', 'filterable-portfolio'),
		'date' 		=> __('Date created', 'filterable-portfolio'),
		'modified' 	=> __('Date modified', 'filterable-portfolio'),
		'rand' 		=> __('Random', 'filterable-portfolio'),
	),
));
$optionPage->add_field(array(
	'id' 	=> 'posts_per_page',
	'type' 	=> 'number',
	'std' 	=> -1,
	'name' 	=> __('# of portfolio to show', 'filterable-portfolio'),
	'desc' 	=> __('Number of portfolio to show per page. -1 to show all portfolios', 'filterable-portfolio'),
));
$optionPage->add_field(array(
	'id' 	=> 'all_categories_text',
	'type' 	=> 'text',
	'std' 	=> __('All', 'filterable-portfolio'),
	'name' 	=> __('All Categories Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for all filter button.', 'filterable-portfolio'),
    // 'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'details_button_text',
	'type' 	=> 'text',
	'std' 	=> __('Details', 'filterable-portfolio'),
	'name' 	=> __('Details Button Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for details button.', 'filterable-portfolio'),
    // 'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'custom_css',
	'type' 	=> 'textarea',
	'std' 	=> '',
	'name' 	=> __('Custom CSS', 'filterable-portfolio'),
	'desc' 	=> __('Quickly add some CSS to your theme by adding it to this block.', 'filterable-portfolio'),
	'placeholder' 	=> '.portfolio-items { font-size: 20px; }',
    'tab'   => 'advanced-settings',
));

// Single Portfolio Settings
$optionPage->add_field(array(
	'id' 	=> 'show_related_projects',
	'type' 	=> 'checkbox',
	'std' 	=> 1,
	'name' 	=> __('Show Related Projects', 'filterable-portfolio'),
	'desc' 	=> __('Enable to show related projects on portfolio single page.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'related_projects_number',
	'type' 	=> 'number',
	'std' 	=> 3,
	'name' 	=> __('Number of Related Projects', 'filterable-portfolio'),
	'desc' 	=> __('How many related projects you want to show in single portfolio page.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_description_text',
	'type' 	=> 'text',
	'std' 	=> __('Project Description', 'filterable-portfolio'),
	'name' 	=> __('Project Description Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project description.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_details_text',
	'type' 	=> 'text',
	'std' 	=> __('Project Details', 'filterable-portfolio'),
	'name' 	=> __('Project Details Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project details.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_skills_text',
	'type' 	=> 'text',
	'std' 	=> __('Skills Needed:', 'filterable-portfolio'),
	'name' 	=> __('Skills Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project skills.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_categories_text',
	'type' 	=> 'text',
	'std' 	=> __('Categories:', 'filterable-portfolio'),
	'name' 	=> __('Categories Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project categories.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_url_text',
	'type' 	=> 'text',
	'std' 	=> __('Project URL:', 'filterable-portfolio'),
	'name' 	=> __('Project URL Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project url.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_date_text',
	'type' 	=> 'text',
	'std' 	=> __('Project Date:', 'filterable-portfolio'),
	'name' 	=> __('Project date Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project date.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'project_client_text',
	'type' 	=> 'text',
	'std' 	=> __('Client:', 'filterable-portfolio'),
	'name' 	=> __('Client Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for project client.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
$optionPage->add_field(array(
	'id' 	=> 'related_projects_text',
	'type' 	=> 'text',
	'std' 	=> __('Related Projects', 'filterable-portfolio'),
	'name' 	=> __('Related Projects Text', 'filterable-portfolio'),
	'desc' 	=> __('Enter the text for related projects.', 'filterable-portfolio'),
    'tab'   => 'single-portfolio-settings',
));
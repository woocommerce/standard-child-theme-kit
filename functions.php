<?php

/*
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ INSTRUCTIONS /\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\

	The following functions in Standard 3 are able to be overridden in your child 
	theme.
	
		standard_page_menu
		standard_add_theme_background
		standard_add_theme_editor_style
		standard_add_theme_menus
		standard_add_theme_sidebars
		standard_add_theme_features
		standard_set_theme_colors
		standard_header_style
		standard_admin_header_style
		standard_admin_header_image
		standard_custom_comment
		standard_process_link_post_format_content
		standard_process_link_post_format_title
		standard_remove_paragraph_on_media
		standard_wrap_embeds
		standard_search_form
		standard_post_format_rss
		standard_modify_widget_titles
		standard_add_title_to_single_post_pagination
		standard_comment_form
    
    Do not modify anything in-between the "DO NOT MODIFY" start and end sections.
    
	You may place any functions outlined in our FAQs & tutorials on the support
	forum in this file, as instructed, or any other code you create yourself or find
	from around the web below the "CUSTOMIZATIONS" section at the end of the file.
	
	Be forewarned that even the simplest mistake within this file can completely
	bring down your website. Please make sure to create backups and have FTP
	access to your server before modifying this file so you amy correct any issues.
	
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\
*/


/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/ DO NOT MODIFY START /\/\/\/\/\/\/\/\/\/\/\/\/\/\/ */

/**
 * Reorders the loading of Standard's styles to ensure that the child theme kit's
 * styles.css gets loaded last. This allows the child theme kit to override all 
 * Standard styles.
 *
 * @since	3.2.1
 * @version	1.0
 */
function standard_child_theme_kit_reorder_styles() {
    wp_dequeue_style( 'theme-responsive' );
} // end standard_child_theme_kit_reorder_styles

add_action( 'wp_enqueue_scripts', 'standard_child_theme_kit_reorder_styles', 1000 );

/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ DO NOT MODIFY END /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ */



/* /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ CUSTOMIZATIONS /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ */


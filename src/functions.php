<?php

load_theme_textdomain( 'themify', get_template_directory() . '/languages' );

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Custom settings
function custom_settings_add_menu() {
  add_theme_page( 'Huminal Settings', 'Huminal Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Huminal Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Custom Background
function setting_background() { ?>
  <input type="text" name="background" id="background" value="<?php echo get_option('background'); ?>" />
<?php }
function setting_backgroundColor() { ?>
  <input type="text" name="backgroundColor" id="backgroundColor" value="<?php echo get_option('backgroundColor'); ?>" />
<?php }
// Custom Blog Title Color
function setting_titleColor() { ?>
  <input type="text" name="titleColor" id="titleColor" value="<?php echo get_option('titleColor'); ?>" />
<?php }
// Custom Blog Description Color
function setting_desColor() { ?>
  <input type="text" name="desColor" id="desColor" value="<?php echo get_option('desColor'); ?>" />
<?php }
// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }
// Github
function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }
// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }
// Email
function setting_email() { ?>
  <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
<?php }

function custom_settings_page_setup() {
	add_settings_section('section-as', 'Blog Header Settings', null, 'theme-options');
	add_settings_field('background', 'Background URL', 'setting_background', 'theme-options', 'section-as');
	add_settings_field('backgroundColor', 'Background Color', 'setting_backgroundColor', 'theme-options', 'section-as');
	add_settings_field('titleColor', 'Title Color', 'setting_titleColor', 'theme-options', 'section-as');
	add_settings_field('desColor', 'Description Color', 'setting_desColor', 'theme-options', 'section-as');
  add_settings_section('section-sm', 'Social Media Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section-sm');
	add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section-sm');
	add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section-sm');
	add_settings_field('email', 'Email Address', 'setting_email', 'theme-options', 'section-sm');


	register_setting('section', 'background');
	register_setting('section', 'backgroundColor');
	register_setting('section', 'titleColor');
	register_setting('section', 'desColor');
	register_setting('section', 'css');
	register_setting('section', 'twitter');
	register_setting('section', 'github');
	register_setting('section', 'facebook');
	register_setting('section', 'email');


}
add_action( 'admin_init', 'custom_settings_page_setup' );


// Support Featured Images
add_theme_support( 'post-thumbnails' );

get_avatar( $id_or_email, $size, $default, $alt, $args );

if ( ! isset( $content_width ) ) $content_width = 900;
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
wp_list_comments( $args );
wp_link_pages( $args );
comments_template( $file, $separate_comments );
comment_form();
add_theme_support( "title-tag" );
add_theme_support( "automatic-feed-links" );
add_theme_support( "custom-background" );
add_editor_style();

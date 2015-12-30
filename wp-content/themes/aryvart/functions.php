<?php
register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
	) );
add_theme_support( 'post-thumbnails' );
add_action('admin_init', 'my_general_section');  
function my_general_section() {  
    add_settings_section(  
        'my_settings_section', // Section ID 
        'My Options Title', // Section Title
        'my_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'address', // Option ID
        'Address', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_section', // Name of our section
        array( // The $args
            'address' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 3
        'state', // Option ID
        'State', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'state' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 4
        'telephone', // Option ID
        'Telephone', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'telephone' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 5
        'email', // Option ID
        'Email', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'email' // Should match Option ID
        )  
    ); 
    

    register_setting('general','address', 'esc_attr');
    register_setting('general','state', 'esc_attr');
    register_setting('general','telephone', 'esc_attr');
    register_setting('general','email', 'esc_attr');
    
}

function my_section_options_callback() { // Section Callback
    echo '<p>A little message on editing info</p>';  
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" class="regular-text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}
add_action('init', 'event_register');

function event_register() {
    $args = array(
                'labels' =>array(
                        'name' => 'Events',
                        'add_new_item' => 'Add New Events',
                       ),

                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','comments','thumbnail')
    );
    register_post_type( 'events' , $args );
}

function hkdc_admin_styles() {
    wp_enqueue_style( 'jquery-ui-datepicker-style' ,get_template_directory_uri() .'/css/jquery-ui.css');
}
add_action('admin_print_styles', 'hkdc_admin_styles');
function hkdc_admin_scripts() {
    wp_enqueue_script( 'jquery-ui-datepicker' );
}
add_action('admin_enqueue_scripts', 'hkdc_admin_scripts');
function hkdc_post_date_field($post) {
     echo '<input type="text" id="jquery-datepicker" autocomplete="off" name="entry_post_date" value="' . get_post_meta( $post->ID, 'entry_post_date', true ) . '">';
     ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#jquery-datepicker').datepicker();
        });
    </script>
<?php
}
function hkdc_post_date_meta_box() {
    add_meta_box('entry_post_date', 'Date', 'hkdc_post_date_field', 'events', 'side', 'default');
}
add_action('add_meta_boxes', 'hkdc_post_date_meta_box');
add_action('save_post','save_post_date_meta');
function save_post_date_meta($post_id, $post)
{
    if(isset($_POST['entry_post_date']))
    update_post_meta($post_id, 'entry_post_date', $_POST['entry_post_date']);
}
    
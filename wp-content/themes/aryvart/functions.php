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
        'My Footer Settings', // Section Title
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
    add_settings_field( // Option 5
        'title', // Option ID
        'Title', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'title' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 5
        'title1', // Option ID
        'Title1', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'title1' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 5
        'title2', // Option ID
        'Title2', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'title2' // Should match Option ID
        )  
    ); 
    add_settings_field( // Option 5
        'description', // Option ID
        'description', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_section', // Name of our section (General Settings)
        array( // The $args
            'description' // Should match Option ID
        )  
    ); 
    add_settings_field( 
        'upload', 
        'image', 
        'my_upload_callback',
        'general', // Page it will be displayed
        'my_settings_section', 
        array( 'upload '
        )

     );

    register_setting('general','address', 'esc_attr');
    register_setting('general','state', 'esc_attr');
    register_setting('general','telephone', 'esc_attr');
    register_setting('general','email', 'esc_attr');
    register_setting('general','title', 'esc_attr');
    register_setting('general','title1', 'esc_attr');
    register_setting('general','title2', 'esc_attr');
    register_setting('general','description', 'esc_attr');
    register_setting('general','upload', 'esc_html');
    
}

function my_section_options_callback() { // Section Callback
    echo '<p>Footer Field</p>';  
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" class="regular-text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}
function my_upload_callback($args) {  // Textbox Callback
    
    print_r($_FILES);
    $option = get_option($args[0]);
    echo '<input type="file" name="upload" />';
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
    

add_action('admin_menu', 'aryvart_menu');

function aryvart_menu() {
    add_menu_page('Aryvart Options', 'Aryvart Options', 'manage_options', 'aryvart', 'my_plugin_option', '', 6);
    add_submenu_page('aryvart', 'Aryvart Contact', 'Aryvart Contact', 'manage_options', 'aryvart_contact', 'my_custom_submenu_page_callback');
}

function my_plugin_option(){
    
    if(isset($_POST['submit']))
    {
        update_option('service_info', $_POST['service_info']);
    }

    $service_info = get_option('service_info');
   
    $fields = array(
        'successful_years' => 'Successful Years',
        'developers' => 'Developers & UI Engineers',
        'successful_products' => 'Successful Mobile & Web Products',
        'satisfaction' => 'Customer Satisfaction',
        'ourservice' => 'Our Service',
        'ourclient' => 'Our Client',
        'whatwedo' => 'What We Do');

    ?>

    <div class="wrap">
        <h1>General Settings</h1>
        <form novalidate="novalidate" method="post">
            <table class="form-table">
                <tbody>
                    <?php foreach($fields as $name=>$label){?>
                    <tr>
                        <th scope="row">
                            <label for="blogname"><?php _e($label); ?></label>
                        </th>
                        <td>
                            <input id="blogname" class="regular-text" type="text" value="<?php _e(isset($service_info[$name]) ? $service_info[$name] : '');?>" name="service_info[<?php _e($name); ?>]">
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php submit_button();?>
        </form>
    </div>

    <?php
}
function my_custom_submenu_page_callback(){
    echo "Admin Page Test"; 
}
  





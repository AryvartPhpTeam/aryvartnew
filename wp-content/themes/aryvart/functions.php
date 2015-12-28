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
add_action( 'init', 'create_event_postype' );
 
function create_event_postype() {
 
$labels = array(
    'name' => _x('Events', 'post type general name'),
    'singular_name' => _x('Event', 'post type singular name'),
    'add_new' => _x('Add New', 'events'),
    'add_new_item' => __('Add New Event'),
    'edit_item' => __('Edit Event'),
    'new_item' => __('New Event'),
    'view_item' => __('View Event'),
    'search_items' => __('Search Events'),
    'not_found' =>  __('No events found'),
    'not_found_in_trash' => __('No events found in Trash'),
    'parent_item_colon' => '',
);
 
$args = array(
    'label' => __('Events'),
    'labels' => $labels,
    'public' => true,
    'can_export' => true,
    'show_ui' => true,
    '_builtin' => false,
    'capability_type' => 'post',
    'menu_icon' => get_bloginfo('template_url').'/functions/images/event_16.png',
    'hierarchical' => false,
    'rewrite' => array( "slug" => "events" ),
    'supports'=> array('title', 'thumbnail', 'excerpt', 'editor') ,
    'show_in_nav_menus' => true,
    'taxonomies' => array( 'tf_eventcategory', 'post_tag')
);
 
register_post_type( 'tf_events', $args);
 
}
add_filter ("manage_edit-tf_events_columns", "tf_events_edit_columns");
add_action ("manage_posts_custom_column", "tf_events_custom_columns");
 
function tf_events_edit_columns($columns) {
 
$columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "tf_col_ev_cat" => "Category",
    "tf_col_ev_date" => "Dates",
    "tf_col_ev_times" => "Times",
    "tf_col_ev_thumb" => "Thumbnail",
    "title" => "Event",
    "tf_col_ev_desc" => "Description",
    );
return $columns;
}
 
function tf_events_custom_columns($column)
{
global $post;
$custom = get_post_custom();
switch ($column)
{
case "tf_col_ev_cat":
    // - show taxonomy terms -
    $eventcats = get_the_terms($post->ID, "tf_eventcategory");
    $eventcats_html = array();
    if ($eventcats) {
    foreach ($eventcats as $eventcat)
    array_push($eventcats_html, $eventcat->name);
    echo implode($eventcats_html, ", ");
    } else {
    _e('None', 'themeforce');;
    }
break;
case "tf_col_ev_date":
    // - show dates -
    $startd = $custom["tf_events_startdate"][0];
    $endd = $custom["tf_events_enddate"][0];
    $startdate = date("F j, Y", $startd);
    $enddate = date("F j, Y", $endd);
    echo $startdate . '<br /><em>' . $enddate . '</em>';
break;
case "tf_col_ev_times":
    // - show times -
    $startt = $custom["tf_events_startdate"][0];
    $endt = $custom["tf_events_enddate"][0];
    $time_format = get_option('time_format');
    $starttime = date($time_format, $startt);
    $endtime = date($time_format, $endt);
    echo $starttime . ' - ' .$endtime;
break;
case "tf_col_ev_thumb":
    // - show thumb -
    $post_image_id = get_post_thumbnail_id(get_the_ID());
    if ($post_image_id) {
    $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
    if ($thumbnail) (string)$thumbnail = $thumbnail[0];
    echo '<img src="';
    echo bloginfo('template_url');
    echo '/timthumb/timthumb.php?src=';
    echo $thumbnail;
    echo '&h=60&w=60&zc=1" alt="" />';
}
break;
case "tf_col_ev_desc";
    the_excerpt();
break;
 
}
}
add_action( 'admin_init', 'tf_events_create' );
 
function tf_events_create() {
    add_meta_box('tf_events_meta', 'Events', 'tf_events_meta', 'tf_events');
}
 
function tf_events_meta () {
 
// - grab data -
 
global $post;
$custom = get_post_custom($post->ID);
$meta_sd = $custom["tf_events_startdate"][0];
$meta_ed = $custom["tf_events_enddate"][0];
$meta_st = $meta_sd;
$meta_et = $meta_ed;
 
// - grab wp time format -
 
$date_format = get_option('date_format'); // Not required in my code
$time_format = get_option('time_format');
 
// - populate today if empty, 00:00 for time -
 
if ($meta_sd == null) { $meta_sd = time(); $meta_ed = $meta_sd; $meta_st = 0; $meta_et = 0;}
 
// - convert to pretty formats -
 
$clean_sd = date("D, M d, Y", $meta_sd);
$clean_ed = date("D, M d, Y", $meta_ed);
$clean_st = date($time_format, $meta_st);
$clean_et = date($time_format, $meta_et);
 
// - security -
 
echo '<input type="hidden" name="tf-events-nonce" id="tf-events-nonce" value="' .
wp_create_nonce( 'tf-events-nonce' ) . '" />';
 
// - output -
 
?>
<div class="tf-meta">
<ul>
    <li><label>Start Date</label><input name="tf_events_startdate" class="tfdate" value="<?php echo $clean_sd; ?>" /></li>
    <li><label>Start Time</label><input name="tf_events_starttime" value="<?php echo $clean_st; ?>" /><em>Use 24h format (7pm = 19:00)</em></li>
    <li><label>End Date</label><input name="tf_events_enddate" class="tfdate" value="<?php echo $clean_ed; ?>" /></li>
    <li><label>End Time</label><input name="tf_events_endtime" value="<?php echo $clean_et; ?>" /><em>Use 24h format (7pm = 19:00)</em></li>
</ul>
</div>
<?php
}
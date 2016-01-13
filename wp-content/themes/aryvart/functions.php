<?php
register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
	) );
add_theme_support( 'post-thumbnails' );
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

add_action('init', 'partner_register');

function partner_register() {
    $args = array(
                'labels' =>array(
                        'name' => 'Partners',
                        'add_new_item' => 'Add New Partner',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','comments','thumbnail')
    );
    register_post_type( 'partner' , $args );
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

    add_meta_box('entry_post_date', 'Event Date', 'hkdc_post_date_field', 'events', 'normal', 'default');

}
add_action('add_meta_boxes', 'hkdc_post_date_meta_box');
add_action('save_post','save_post_date_meta');
function save_post_date_meta($post_id)

{
    if(isset($_POST['entry_post_date']))
    update_post_meta($post_id, 'entry_post_date', $_POST['entry_post_date']);
}
add_action('admin_menu', 'aryvart_menu');

function aryvart_menu() {
    add_menu_page('Aryvart Options', 'Aryvart Options', 'manage_options', 'aryvart', 'my_plugin_option1', '', 6);
    add_submenu_page('aryvart', 'Aryvart Contact', 'Aryvart Contact', 'manage_options', 'aryvart_contact', 'my_custom_submenu_callback');
    add_submenu_page('aryvart', 'Footer Image', 'Footer Image', 'manage_options', 'footer_image', 'my_plugin_options2');
}
function my_plugin_options2() {
    if (isset($_POST['submit'])) {
        $uploadedfile = $_FILES['footer_image'];

        $upload_overrides = array('test_form' => false);

        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
        $footer_menu = get_option('footer_menu');
       
            if ($movefile && !isset($movefile['error'])) {
                $_POST['footer_menu']['footer_image'] = $movefile['url'];
            }
        
        else if (isset($footer_menu['footer_image'])) {
            $_POST['footer_menu']['footer_image'] = $footer_menu['footer_image'];
        }
        update_option('footer_menu', $_POST['footer_menu']);
    }
    $footer_menu = get_option('footer_menu');
    ?>
    <div class="wrap">
        <h1>Footer Options</h1>
        <form novalidate="novalidate" method="post" enctype="multipart/form-data">
            <table class="form-table">
                <tbody>

                    <tr>
                        <th scope="row"><label for="blogname">Footer Description</label></th>
                        <td><textarea rows="5" cols="50" class="regular-text" name="footer_menu[footer_text]"><?php echo isset($footer_menu['footer_text']) ? $footer_menu['footer_text'] : ''; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="blogname">Footer Image</label></th>
                        <td>
                            <?php if (isset($footer_menu['footer_image'])) { ?>
                                <img src="<?php echo $footer_menu['footer_image']; ?>" /> <br />
                            <?php } ?>
                            <input type="file" class="regular-text"  id="blogname" name="footer_image">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Facebook url</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[facebook]" value="<?php echo isset($footer_menu['facebook']) ? $footer_menu['facebook'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Twitter url</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[twitter]" value="<?php echo isset($footer_menu['twitter']) ? $footer_menu['twitter'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Google Plus url</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[google_plus]" value="<?php echo isset($footer_menu['google_plus']) ? $footer_menu['google_plus'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Linked in url</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[linked_in]" value="<?php echo isset($footer_menu['linked_in']) ? $footer_menu['linked_in'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Youtube url</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[youtube]" value="<?php echo isset($footer_menu['youtube']) ? $footer_menu['youtube'] : ''; ?>">
                        </td>
                    </tr>
                     <tr>
                        <th scope="row"><label for="blogname">Footer News 1</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[news1]" value="<?php echo isset($footer_menu['news1']) ? $footer_menu['news1'] : ''; ?>">
                        </td>
                    </tr>
                     <tr>
                        <th scope="row"><label for="blogname">Footer News 2</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[news2]" value="<?php echo isset($footer_menu['news2']) ? $footer_menu['news2'] : ''; ?>">
                        </td>
                    </tr>
                     <tr>
                        <th scope="row"><label for="blogname">Footer News 3</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[news3]" value="<?php echo isset($footer_menu['news3']) ? $footer_menu['news3'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Address</label></th>
                        <td><textarea class="regular-text" rows="5" cols="39" name="footer_menu[address]"><?php echo isset($footer_menu['address']) ? $footer_menu['address'] : ''; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Website</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[website]" value="<?php echo isset($footer_menu['website']) ? $footer_menu['website'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="blogname">Telephone No</label></th>
                        <td><input type="text" class="regular-text" name="footer_menu[telephone]" value="<?php echo isset($footer_menu['telephone']) ? $footer_menu['telephone'] : ''; ?>">
                        </td>
                    </tr>
                   </tbody>
            </table>
        <?php echo submit_button(); ?>
        </form>
        <?php
    }


function my_plugin_option1(){
    
    if(isset($_POST['submit']))
    {
        update_option('aryvart_info', $_POST['aryvart_info']);
    }

    $aryvart_info = get_option('aryvart_info');
   
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
        <h1>Aryvart Options</h1>
        <form novalidate="novalidate" method="post">
            <table class="form-table">
                <tbody>
                    <?php foreach($fields as $name=>$label){?>
                    <tr>
                        <th scope="row">
                            <label for="blogname"><?php _e($label); ?></label>
                        </th>
                        <td>
                            <input id="blogname" class="regular-text" type="text" value="<?php _e(isset($aryvart_info[$name]) ? $aryvart_info[$name] : '');?>" name="aryvart_info[<?php _e($name); ?>]">
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
function my_custom_submenu_callback(){
    
    if(isset($_POST['submit']))
    {
        update_option('footer_info', $_POST['footer_info']);
    }

    $footer_info = get_option('footer_info');
   
    $fields = array(
        'country' => 'Country',
        'country_address' => 'Country Address',
        'country2' => 'Country2',
        'country_address2' => 'Country Address2',
        'personal_number' => 'Personal Number',
        'office_number' => 'Office Number',
        'fax' => 'Fax',
        'mail' => 'Mail',
        'mail2' => 'Mail2',
        'enquiry'=>'Enquiry');

    ?>


    <div class="wrap">
        <h1>Aryvart Contacts</h1>
        <form novalidate="novalidate" method="post">
            <table class="form-table">
                <tbody>
                    <?php foreach($fields as $name=>$label){?>
                    <tr>
                        <th scope="row">
                            <label for="blogname"><?php _e($label); ?></label>
                        </th>
                        <td>
                            <input id="blogname" class="regular-text" type="text" value="<?php _e(isset($footer_info[$name]) ? $footer_info[$name] : '');?>" name="footer_info[<?php _e($name); ?>]">
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



add_action('admin_menu', 'page_menu');

function page_menu() {
    add_menu_page('Aryvart Options', 'What we are', 'manage_options', 'aryvartpage', 'my_plugin_option', '', 6);
    add_submenu_page('aryvartpage', 'careers', 'careers', 'manage_options', 'careers', 'my_custom_submenu_page_callback');
    add_submenu_page('aryvartpage', 'How It work', 'How It Work', 'manage_options', 'work', 'my_work_option');
    add_submenu_page('aryvartpage', 'What We Do', 'What We Do', 'manage_options', 'design', 'my_option');
}

function my_plugin_option(){
    
    if(isset($_POST['submit']))
    {
        update_option('whatweare_info', $_POST['whatweare_info']);
    }

    $whatweare_info = get_option('whatweare_info');
    //print_r($service_info);
    $fields = array(
        'whoweare' => 'Who we are',
        'overview' => 'Over view',
        'whoweare2' => 'Who we are2',
        'ourview' => 'Our Views',
        'ourmission' => 'Our Mission',
        'ourvision' => 'Our Vision',
        'philosopy' => 'Philosopy',
        'ourteam' => 'Our Team',
        'aryvart' => 'Aryvart',
        'get' => 'Get a Quote',);

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
                          <?php  
    $pages = get_pages( $args ) ;
    echo "<select name='whatweare_info[$name]>' ";
    foreach ( $pages as $page ) {

      $sel = (isset($whatweare_info[$name]) && $page->ID == $whatweare_info[$name]) ? 'selected' : '';
      echo "<option $sel value='{$page->ID}'>{$page->post_title}</option>";
        
    }

    echo "</select>";
    ?>
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
function my_option(){
    
    if(isset($_POST['submit']))
    {
        update_option('whatwedo_info', $_POST['whatwedo_info']);
    }

    $whatwedo_info = get_option('whatwedo_info');
    //print_r($service_info);
    $fields = array(
        'webdevelopement' => 'Website Developement',
        'developement' => 'Php Developement',
        'Webdesign' => 'Web Design',
        'partner' => 'Partners Page',
        'blog' => 'Blog',
        'portifolio' => 'Portifolio'
        );

    ?>

    <div class="wrap">
        <h1>What We Pages</h1>
        <form novalidate="novalidate" method="post">
            <table class="form-table">
                <tbody>
                    <?php foreach($fields as $name=>$label){?>
                    <tr>
                        <th scope="row">
                            <label for="blogname"><?php _e($label); ?></label>
                        </th>
                        <td>
                          <?php  
    $pages = get_pages( $args ) ;
    echo "<select name='whatwedo_info[$name]>' ";
    foreach ( $pages as $page ) {

      $sel = (isset($whatwedo_info[$name]) && $page->ID == $whatwedo_info[$name]) ? 'selected' : '';
      echo "<option $sel value='{$page->ID}'>{$page->post_title}</option>";
        
    }

    echo "</select>";
    ?>
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

    if(isset($_POST['submit']))
    {
        update_option('work_info', $_POST['work_info']);
    }

    $work_info = get_option('work_info');
    //print_r($service_info);
    $fields = array(
        'careers' => 'CAREERS',
        'lorem_ipsum' => 'Lorem Ipsum ',
        'life' => 'Life at aryvart',
        'fun' => 'Its fun',
        'modal' => 'Modal Example'
        );

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
                          <?php  
    $pages = get_pages( $args ) ;
    echo "<select name='work_info[$name]>' ";
    foreach ( $pages as $page ) {
      $sel = (isset($work_info[$name]) && $page->ID == $work_info[$name]) ? 'selected' : '';
      echo "<option $sel value='{$page->ID}'>{$page->post_title}</option>";
    }
    echo "</select>";
    ?>
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
function my_work_option(){
    
    if(isset($_POST['submit']))
    {
        update_option('service_info', $_POST['service_info']);
    }

    $service_info = get_option('service_info');
    //print_r($service_info);
    $fields = array(
        'howitwork' => 'How it works',
        'testing' => 'TESTING',
        'project_management' => 'PROJECT MANAGEMENT',
        'conclusion' => 'Conclusion Page',
        );

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
                          <?php  
    $pages = get_pages( $args ) ;
    echo "<select name='service_info[$name]>' ";
    foreach ( $pages as $page ) {
      $sel = (isset($service_info[$name]) && $page->ID == $service_info[$name]) ? 'selected' : '';
      echo "<option $sel value='{$page->ID}'>{$page->post_title}</option>";
    }
    echo "</select>";
    ?>
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
 add_action('init', 'our_team');
function our_team() {
    $args = array(
                'labels' =>array(
                        'name' => 'Our Team',
                        'add_new_item' => 'Add New Team',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','thumbnail')
    );
    register_post_type( 'ourteam' , $args );
}


add_action( 'init', 'create_service' );

function create_service() {
    register_taxonomy(
        'servicecategory',
        'crm',
        array(
            'label' => __( 'Service category' ),
            'hierarchical' => true,
        )
    );
    register_taxonomy(
        'web_design',
        'crm',
        array(
            'label' => __( 'Web Design' ),
            'hierarchical' => true,
        )
    );

function current_openning() {
  $labels = array(
    'name'               => _x( 'Openings', 'post type general name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New domain' ),
    'edit_item'          => __( 'Edit Domian' ),
    'new_item'           => __( 'New Domian' ),
    'all_items'          => __( 'All Domian' ),
    'view_item'          => __( 'View Domian' ),
    'search_items'       => __( 'Search Domian' ),
    'menu_name'          => 'Current Opening'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Domain and Current Openning in specific domain',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'opening', $args ); 
}
add_action( 'init', 'current_openning' );
add_action('init', 'howit_work');
function howit_work() {
    $args = array(
                'labels' =>array(
                        'name' => 'Issues',
                        'add_new_item' => 'Add New Issues',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','thumbnail')
    );
    register_post_type( 'issues' , $args );
}

}
add_action('init', 'crm_register');
function crm_register() {
    $args = array(
                'labels' =>array(
                        'name' => 'Service provided',
                        'add_new_item' => 'Add New Service',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','comments','thumbnail')
    );
    register_post_type( 'crm' , $args );
}

add_action('init', 'gallery');

function gallery() {
    $args = array(
                'labels' =>array(
                        'name' => 'Gallery',
                        'add_new_item' => 'Add New Gallery',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','author','comments','thumbnail')
    );
    register_post_type( 'gallery' , $args );
}
add_action( 'init', 'create_book_tax' );

function create_book_tax() {
    register_taxonomy(
        'gallerytitle',
        'gallery',
        array(
            'label' => __( 'Gallery title' ),
            //'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        )
    );
    
}
add_action('init', 'blog');

function blog() {
    $args = array(
                'labels' =>array(
                        'name' => 'Blog',
                        'add_new_item' => 'Add New Blog',
                       ),
                'public' => true,
                'capability_type' => 'post',
                'supports' => array('title','editor','tags','author','comments','thumbnail'),
                'taxonomies' => array('post_tag')
    );
    register_post_type( 'blog' , $args );
}
add_action( 'init', 'create_book_tax1' );

function create_book_tax1() {
    register_taxonomy(
        'blogcategory',
        'blog',
        array(
            'label' => __( 'Blog category' ),
            //'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,

        )
    );
    register_taxonomy(
        'blogtags',
        'blog',
        array(
            'label' => __( 'Blog tags' ),
            //'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,

        )
    );
    
}
add_action('admin_enqueue_scripts', 'hkdc_admin_scripts');
function hkdc_post_month_field($post) {
     echo '<input type="text" id="jquery-datepicker" autocomplete="off" name="entry_post_month" value="' . get_post_meta( $post->ID, 'entry_post_month', true ) . '">';
     ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#jquery-datepicker').datepicker();
        });
    </script>
<?php
}
function hkdc_post_month_meta_box() {
    add_meta_box('entry_post_month', 'Blog Date', 'hkdc_post_month_field', 'blog', 'normal', 'default');
}
add_action('add_meta_boxes', 'hkdc_post_month_meta_box');
add_action('save_post','save_post_month_meta');
function save_post_month_meta($post_id)
{
    if(isset($_POST['entry_post_month']))
    update_post_meta($post_id, 'entry_post_month', $_POST['entry_post_month']);
}

register_sidebars(1, array(
    'description'   => '',
    'class'         => 'standard',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1 class="recent">',
    'after_title'   => '</h1>'
    ));

if(isset($_GET['tag']))
$_GET['post_type']='blog';




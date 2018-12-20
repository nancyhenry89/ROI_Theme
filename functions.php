<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}
//main section
add_action('init', 'main_register');

function main_register() {

	$labels = array(
		'name' => _x('Main', 'post type general name'),
		'singular_name' => _x('main Item', 'post type singular name'),
		'add_new' => _x('Add New', 'main item'),
		'add_new_item' => __('Add New main Item'),
		'edit_item' => __('Edit main Item'),
		'new_item' => __('New main Item'),
		'view_item' => __('View main Item'),
		'search_items' => __('Search main'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title')
	  ); 

	register_post_type( 'main' , $args );
}	
add_action("admin_init", "admin_init");

function admin_init(){
  add_meta_box("credits_meta", "Numbers", "credits_meta", "main", "normal", "low");
}




function credits_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $roi = $custom["roi"][0];
  $countries = $custom["countries"][0];
  $epc = $custom["epc"][0];
  $vidLink = $custom["vidLink"][0];
  ?>
    <p><label>video Link</label><br />
  <input type="text" name="vidLink" value=<?php echo $vidLink; ?>></p>
  <p><label>Roi</label><br />
  <input type="number" name="roi" value=<?php echo $roi; ?>></p>
  <p><label>Countries</label><br />
  <textarea name="countries"><?php echo $countries; ?></textarea></p>
  <p><label>EPC</label><br />
  <textarea name="epc"><?php echo $epc; ?></textarea></p>
  <?php
}
add_action('save_post', 'save_details');
function save_details(){
	global $post;
    update_post_meta($post->ID, "vidLink", $_POST["vidLink"]);
	update_post_meta($post->ID, "roi", $_POST["roi"]);
	update_post_meta($post->ID, "countries", $_POST["countries"]);
    update_post_meta($post->ID, "epc", $_POST["epc"]);
  }


  add_action("manage_posts_custom_column",  "main_custom_columns");
add_filter("manage_edit-main_columns", "main_edit_columns");

function main_edit_columns($columns){
  $columns = array(
    "cb" => "<input  />",
    "title" => "Main Title",
    "description" => "Description",


  );

  return $columns;
}
function main_custom_columns($column){
  global $post;
  switch ($column) {
    case "description":
    echo $custom["roi"][0];
      break;
    case "roi":
      $custom = get_post_custom();
      echo $custom["roi"][0];
      break;
    case "skills":
      echo get_the_term_list($post->ID, 'Skills', '', ', ','');
      break;
  }

}



//advertisers section
add_action('init', 'advertisers_register');





//Add Metabox

//this is to enable media upload
add_action('add_meta_boxes', 'add_upload_file_metaboxes');
function my_admin_load_styles_and_scripts() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'my_admin_load_styles_and_scripts' );
////////











function advertisers_register() {

	$labels = array(
		'name' => _x('Advertisers', 'post type general name'),
		'singular_name' => _x('advertisers Item', 'post type singular name'),
		'add_new' => _x('Add New', 'main item'),
		'add_new_item' => __('Add New main Item'),
		'edit_item' => __('Edit main Item'),
		'new_item' => __('New main Item'),
		'view_item' => __('View main Item'),
		'search_items' => __('Search main'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor')
	  ); 

	register_post_type( 'advertisers' , $args );
}	
add_action("admin_init", "admin_init_advertisers");

function admin_init_advertisers(){
  add_meta_box("credits_meta_advertisers", "advertisers", "credits_meta_advertisers", "advertisers", "normal", "low");
}

function add_upload_file_metaboxes() {
    add_meta_box('swp_file_upload', 'File Upload', 'swp_file_upload', 'podcasts', 'normal', 'default');
}


function swp_file_upload() {
  // global $post;
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="podcastmeta_noncename" id="podcastmeta_noncename" value="'.
    wp_create_nonce(plugin_basename(__FILE__)).
    '" />';
    global $wpdb;
    $strFile = get_post_meta($post -> ID, $key = 'podcast_file', true);
    $media_file = get_post_meta($post -> ID, $key = '_wp_attached_file', true);
    if (!empty($media_file)) {
        $strFile = $media_file;
    } ?>

          <?php
    function admin_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    function admin_styles() {
        wp_enqueue_style('thickbox');
    }
    add_action('admin_print_scripts', 'admin_scripts');
    add_action('admin_print_styles', 'admin_styles');
}




function credits_meta_advertisers() {
  global $post;
  $custom = get_post_custom($post->ID);
  $sectionName = $custom["sectionName"][0];
  $sectionLabel = $custom["sectionLabel"][0];
  $text = $custom["text"][0];
  $linkText = $custom["linkText"][0];
  $link = $custom["link"][0];
  $podcast_file = $custom["podcast_file"][0];

?>
<p><label>Section Name</label><br />
  <input type="text" name="sectionName" value=<?php echo $sectionName; ?>></p>
  <p><label>Section Label</label><br />
  <textarea type="text" name="sectionLabel"><?php echo $sectionLabel; ?></textarea></p>
  <p><label>Text</label><br />
  <textarea name="text"><?php echo $text; ?></textarea></p>
  <p><label>Link text</label><br />
  <textarea type="text" name="linkText"><?php echo $linkText; ?></textarea></p>
  <p><label>Link</label><br />
  <textarea type="text" name="link"><?php echo $link; ?></textarea></p>
  <div>

<table>
<tr valign = "top">
<td>
<input type = "text"
name = "podcast_file"
id = "podcast_file"
size = "70"
value = "<?php echo $podcast_file; ?>" />
<input id = "upload_image_button"
type = "button"
value = "Upload">
</td> </tr> </table> <input type = "hidden"
name = "img_txt_id"
id = "img_txt_id"
value = "" />
</div>  
<script type = "text/javascript">


        // Uploading files
        var file_frame;
    jQuery('#upload_image_button').live('click', function(podcast) {
        podcast.preventDefault();

        // If the media frame already exists, reopen it.
        if (file_frame) {
            file_frame.open();
            return;
        }

        // Create the media frame.
        file_frame = wp.media.frames.file_frame = wp.media({
            title: jQuery(this).data('uploader_title'),
            button: {
                text: jQuery(this).data('uploader_button_text'),
            },
            multiple: false // Set to true to allow multiple files to be selected
        });

        // When a file is selected, run a callback.
        file_frame.on('select', function(){
            // We set multiple to false so only get one image from the uploader
            attachment = file_frame.state().get('selection').first().toJSON();

            // here are some of the variables you could use for the attachment;
            //var all = JSON.stringify( attachment );      
            //var id = attachment.id;
            //var title = attachment.title;
            //var filename = attachment.filename;
            var url = attachment.url;
            //var link = attachment.link;
            //var alt = attachment.alt;
            //var author = attachment.author;
            //var description = attachment.description;
            //var caption = attachment.caption;
            //var name = attachment.name;
            //var status = attachment.status;
            //var uploadedTo = attachment.uploadedTo;
            //var date = attachment.date;
            //var modified = attachment.modified;
            //var type = attachment.type;
            //var subtype = attachment.subtype;
            //var icon = attachment.icon;
            //var dateFormatted = attachment.dateFormatted;
            //var editLink = attachment.editLink;
            //var fileLength = attachment.fileLength;

            var field = document.getElementById("podcast_file");

            field.value = url; //set which variable you want the field to have
        });

        // Finally, open the modal
        file_frame.open();
    });

    </script>
  <?php
}


//Saving the file
/*function save_podcasts_meta($post_id, $post) {
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if (!wp_verify_nonce($_POST['podcastmeta_noncename'], plugin_basename(__FILE__))) {
        return $post -> ID;
    }
    // Is the user allowed to edit the post?
    if (!current_user_can('edit_post', $post -> ID))
        return $post -> ID;
    // We need to find and save the data
    // We'll put it into an array to make it easier to loop though.
    $podcasts_meta['podcast_file'] = $_POST['podcast_file'];
    // Add values of $podcasts_meta as custom fields

    foreach($podcasts_meta as $key => $value) {
        if ($post -> post_type == 'revision') return;
        $value = implode(',', (array) $value);
        if (get_post_meta($post -> ID, $key, FALSE)) { // If the custom field already has a value it will update
            update_post_meta($post -> ID, $key, $value);
        } else { // If the custom field doesn't have a value it will add
            add_post_meta($post -> ID, $key, $value);
        }
        if (!$value) delete_post_meta($post -> ID, $key); // Delete if blank value
    }
}*/
//add_action('save_post', 'save_podcasts_meta', 1, 2); // save the custom fields








add_action('save_post', 'save_details_advertisers','save_podcasts_meta');
function save_details_advertisers(){
	global $post;
    update_post_meta($post->ID, "sectionName", $_POST["sectionName"]);
	update_post_meta($post->ID, "sectionLabel", $_POST["sectionLabel"]);
	update_post_meta($post->ID, "text", $_POST["text"]);
    update_post_meta($post->ID, "linkText", $_POST["linkText"]);
    update_post_meta($post->ID, "link", $_POST["link"]);
    update_post_meta($post->ID, "podcast_file", $_POST["podcast_file"]);

    

}


    add_action("manage_posts_custom_column",  "advertisers_custom_columns");
    add_filter("manage_edit-advertisers_columns", "advertisers_edit_columns");

function advertisers_edit_columns($columns){
  $columns = array(
    "cb" => "<input  />",
    "title" => "advertisers Title",
    "description" => "Description",


  );

  return $columns;
}
function advertisers_custom_columns($column){
  global $post;
  switch ($column) {
    case "description":
    echo $custom["text"][0];
      break;

  }

}
























add_action('init', 'portfolio_register');

function portfolio_register() {

	$labels = array(
		'name' => _x('My Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio Item', 'post type singular name'),
		'add_new' => _x('Add New', 'portfolio item'),
		'add_new_item' => __('Add New Portfolio Item'),
		'edit_item' => __('Edit Portfolio Item'),
		'new_item' => __('New Portfolio Item'),
		'view_item' => __('View Portfolio Item'),
		'search_items' => __('Search Portfolio'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'portfolio' , $args );
}	
register_taxonomy("Skills", array("portfolio"), array("hierarchical" => true, "label" => "Skills", "singular_label" => "Skill", "rewrite" => true));
add_action("admin_init", "admin_init_p");

function admin_init_p(){
  add_meta_box("year_completed-meta", "Year Completed", "year_completed", "portfolio", "side", "low");
  add_meta_box("credits_meta_p", "Design & Build Credits", "credits_meta_p", "portfolio", "normal", "low");
}

function year_completed(){
  global $post;
  $custom = get_post_custom($post->ID);
  $year_completed = $custom["year_completed"][0];
  ?>
  <label>Year:</label>
  <input name="year_completed" value="<?php echo $year_completed; ?>" />
  <?php
}

function credits_meta_p() {
  global $post;
  $custom = get_post_custom($post->ID);
  $designers = $custom["designers"][0];
  $developers = $custom["developers"][0];
  $producers = $custom["producers"][0];
  ?>
  <p><label>Designed By:</label><br />
  <textarea cols="50" rows="5" name="designers"><?php echo $designers; ?></textarea></p>
  <p><label>Built By:</label><br />
  <textarea cols="50" rows="5" name="developers"><?php echo $developers; ?></textarea></p>
  <p><label>Produced By:</label><br />
  <textarea cols="50" rows="5" name="producers"><?php echo $producers; ?></textarea></p>
  <?php
}
add_action('save_post', 'save_details_p');
function save_details_p(){
	global $post;
  
	update_post_meta($post->ID, "year_completed", $_POST["year_completed"]);
	update_post_meta($post->ID, "designers", $_POST["designers"]);
	update_post_meta($post->ID, "developers", $_POST["developers"]);
	update_post_meta($post->ID, "producers", $_POST["producers"]);
  }


  add_action("manage_posts_custom_column",  "portfolio_custom_columns");
add_filter("manage_edit-portfolio_columns", "portfolio_edit_columns");

function portfolio_edit_columns($columns){
  $columns = array(
    "cb" => "<input  />",
    "title" => "Portfolio Title",
    "description" => "Description",
    "year" => "Year Completed",
    "skills" => "Skills",
  );

  return $columns;
}
function portfolio_custom_columns($column){
  global $post;

  switch ($column) {
    case "description":
      the_excerpt();
      break;
    case "year":
      $custom = get_post_custom();
      echo $custom["year_completed"][0];
      break;
    case "skills":
      echo get_the_term_list($post->ID, 'Skills', '', ', ','');
      break;
  }
}









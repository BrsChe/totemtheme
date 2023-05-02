<?php
function enqueue_styles() {
  wp_enqueue_style( 'naumov-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Header title',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Top 1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Top 2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Top phone',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
add_theme_support( 'post-thumbnails' );

add_filter('excerpt_length', 'the_except');
function the_except() {
    if ( is_page_template('page-torgi.php') )     // 4 ID страницы, либо возможно использовать ссылку страницы типа: popular
{
    return 55; }
    else{ return 20;} }
    function rd_duplicate_post_as_draft(){
global $wpdb;
if (! ( isset( $_GET['post']) || isset( $_POST['post']) || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
wp_die('No post to duplicate has been supplied!');
}
 
/*
* Nonce verification
*/
if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
return;
 
/*
* get the original post id
*/
$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
/*
* and all the original post data then
*/
$post = get_post( $post_id );
 
/*
* if you don't want current user to be the new post author,
* then change next couple of lines to this: $new_post_author = $post->post_author;
*/
$current_user = wp_get_current_user();
$new_post_author = $current_user->ID;
 
/*
* if post data exists, create the post duplicate
*/
if (isset( $post ) && $post != null) {
 
/*
* new post data array
*/
$args = array(
'comment_status' => $post->comment_status,
'ping_status' => $post->ping_status,
'post_author' => $new_post_author,
'post_content' => $post->post_content,
'post_excerpt' => $post->post_excerpt,
'post_name' => $post->post_name,
'post_parent' => $post->post_parent,
'post_password' => $post->post_password,
'post_status' => 'draft',
'post_title' => $post->post_title,
'post_type' => $post->post_type,
'to_ping' => $post->to_ping,
'menu_order' => $post->menu_order
);
 
/*
* insert the post by wp_insert_post() function
*/
$new_post_id = wp_insert_post( $args );
 
/*
* get all current post terms ad set them to the new post draft
*/
$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
foreach ($taxonomies as $taxonomy) {
$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
}
 
/*
* duplicate all post meta just in two SQL queries
*/
$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
if (count($post_meta_infos)!=0) {
$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
foreach ($post_meta_infos as $meta_info) {
$meta_key = $meta_info->meta_key;
if( $meta_key == '_wp_old_slug' ) continue;
$meta_value = addslashes($meta_info->meta_value);
$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
}
$sql_query.= implode(" UNION ALL ", $sql_query_sel);
$wpdb->query($sql_query);
}
 
/*
* finally, redirect to the edit post screen for the new draft
*/
wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
exit;
} else {
wp_die('Post creation failed, could not find original post: ' . $post_id);
}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
 
/*
* Add the duplicate link to action list for post_row_actions
*/
function rd_duplicate_post_link( $actions, $post ) {
if (current_user_can('edit_posts')) {
$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Копировать данный элемент" rel="permalink">Копировать</a>';
}
return $actions;
}
 
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
 
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

/** Добавление произвольных полей в редактирование записей / страниц */
add_action('add_meta_boxes', 'extra_fields', true);

function extra_fields(){
    add_meta_box('extra_fields', 'Блок дополнительных полей', 'extra_fields_box_func', array('post'), 'normal', 'high');
}
?>
<?php function extra_fields_box_func($post){ ?>

<label>Адрес</label>
<input type="text" name="extra[address]" value="<?php echo get_post_meta($post->ID, 'address', true); ?>" style="width:100%">

<label>Квадратура</label>
<input type="text" name="extra[quadrature]" value="<?php echo get_post_meta($post->ID, 'quadrature', true); ?>" style="width:100%">

<label>Тип пространства</label>
<textarea name="extra[type_of_space]" style="width:100%">
<?php echo get_post_meta($post->ID, 'type_of_space', true); ?>
</textarea>
<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>">

<?php }
    // включить обновление полей при сохранении
    add_action('save_post', 'extra_fields_update', 0);
    // Сохраняем данные, при сохранении поста
    function extra_fields_update( $post_id ){
    if (!isset($_POST['extra_fields_nonce'])||!wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__)) return false; // проверка
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false; // если это автосохранение
    if (!current_user_can('edit_post', $post_id)) return false; // если юзер не имеет право редактировать запись
    if (!isset($_POST['extra'])) return false;
    // теперь, нужно сохранить/удалить данные
    $_POST['extra'] = array_map('trim', $_POST['extra']);
    foreach($_POST['extra'] as $key => $value){
    if(empty($value)){
    delete_post_meta($post_id, $key); // удаляем поле если значение пустое
    continue;
    }
    update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}?>
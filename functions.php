<?php
// -------------------------------------------------------- CSSの登録
// function my_register_style() {
// 	wp_register_style( 'style', get_template_directory_uri().'/css/style.css' );
// }
// -------------------------------------------------------- CSSの読み込み
// function add_stylesheet() {
// 	my_register_style();
// 	wp_enqueue_style( 'style' );
// }
// add_action( 'wp_enqueue_scripts', 'add_stylesheet' );
// -------------------------------------------------------- JSの登録
// function register_script(){
// 	wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js');
// 	wp_register_script('main', get_template_directory_uri().'/assets/js/main.js');
// }
// -------------------------------------------------------- JSの読み込み
// function add_script(){
// 	register_script();
// 	wp_enqueue_script('jquery', '', array(), '1.0', false);
// 	wp_enqueue_script('main', '', array(), '1.0', true); //フッターで読み込みはtrue
// }
// add_action('wp_print_scripts','add_script');


// -------------------------------------------------------- wpデフォルトのjqueryを削除
function delete_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
	}
}
add_action('init', 'delete_jquery');
// -------------------------------------------------------- haed整理
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra',3);
remove_action('wp_head', 'index_rel_link' );
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head' );
remove_action('wp_head', 'wp_oembed_add_discovery_links' );
remove_action('wp_head', 'wp_oembed_add_host_js' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles');
add_filter( 'emoji_svg_url', '__return_false' );
// -------------------------------------------------------- wpバージョンの削除
function vc_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
			$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// -------------------------------------------------------- <title>タグを出力
add_theme_support( 'title-tag' );
// -------------------------------------------------------- 外観 ＞ メニューの追加
add_theme_support( 'menus' );
// -------------------------------------------------------- アイキャッチ画像の追加
add_theme_support( 'post-thumbnails', array( 'post','page','latest_news' ) );
// -------------------------------------------------------- アイキャッチ画像から width height を削除
function custom_attribute( $html ){
	$html = preg_replace('/(width|height)="\d*"\s/', '', $html);
	return $html;
}
add_filter( 'post_thumbnail_html', 'custom_attribute' );
// -------------------------------------------------------- サイトタイトルの区切り文字を「|」にする
function my_document_title_separator($separator){
  $separator = '|';
  return $separator;
}
add_filter( 'document_title_separator','my_document_title_separator' );
// -------------------------------------------------------- 投稿アーカイブのurl
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// -------------------------------------------------------- 投稿の「カテゴリー」と「タグ」の非表示
function my_unregister_taxonomies() {
  global $wp_taxonomies;
  // 「タグ」の非表示
  if (!empty($wp_taxonomies['post_tag']->object_type)) {
    foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
      if ($object_type == 'post') {
        unset($wp_taxonomies['post_tag']->object_type[$i]);
      }
    }
  }
  return true;
}
add_action('init', 'my_unregister_taxonomies');

// -------------------------------------------------------- 自動pタグの出力を無効
function wpautop_filter($content) {
	global $post;
	$remove_filter = false;
	$arr_types = array('page');
	$post_type = get_post_type( $post->ID );
	if (in_array($post_type, $arr_types)) $remove_filter = true;
	if ( $remove_filter ) {
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
	}
	return $content;
}
add_filter('the_content', 'wpautop_filter', 9);
// -------------------------------------------------------- 固定ページのビジュアルエディタを無効
// function disable_visual_editor( $wp_rich_edit ) {
// 	$posttype = get_post_type();
// 	if ( $posttype === 'page' ) {
// 			return false;
// 	} else {
// 			return $wp_rich_edit;
// 	}
// }
// add_filter( 'user_can_richedit', 'disable_visual_editor' );

// -------------------------------------------------------- 固定ページのエディタを無効
add_action( 'init', function() { 
	remove_post_type_support( 'page', 'editor' ); 
}, 99);

// -------------------------------------------------------- ビジュアルエディタにcss適用
function block_editor_css() {
  add_theme_support( 'editor-styles' );
  add_editor_style( '/public/css/style.css' );
}
add_action('after_setup_theme', 'block_editor_css');


// -------------------------------------------------------- global-styles-inline-cssを排除
add_action('wp_enqueue_scripts', 'remove_global_styles_inline');
function remove_global_styles_inline() {
wp_dequeue_style('remove_global-styles_inline');
}
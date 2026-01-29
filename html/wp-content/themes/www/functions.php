<?php

/* ヘッダーメニュー：現在のボタンに「is-current」クラスを付与 */
function menu_current($page)
{
    $page_num= $page;
    $url_end = $_SERVER["REQUEST_URI"];
    $url_slug = str_replace('/', '', $url_end);

    if ($page =="home" && $url_slug=="") {
        echo 'is-current';
    } elseif ($page == $url_slug) {
        echo 'is-current';
    }
}

/* ---------- news一覧(archive.php)を有効 ---------- */
add_filter('register_post_type_args', function($args, $post_type) {
  if ('post' == $post_type) {
      global $wp_rewrite;
      $archive_slug = 'news'; //URLスラッグ
      // $args['label'] = 'News'; //管理画面左ナビに「投稿」の代わりに表示される
      $args['has_archive'] = $archive_slug;
      $archive_slug = $wp_rewrite->root.$archive_slug;
      $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
      add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
      add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
      add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
      add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
  }
  return $args;
}, 10, 2);

/* ---------- news個別ページ(single.php)のパーマリンクを変更 ---------- */
function add_article_post_permalink( $permalink ) {
  $permalink = '/news' . $permalink;
  return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );

function add_article_post_rewrite_rules( $post_rewrite ) {
  $return_rule = array();
  foreach ( $post_rewrite as $regex => $rewrite ) {
      $return_rule['news/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );

// /* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

/*---------- News一覧 カテゴリー名の前にテキスト追加 ----------- */
add_filter ( 'wp_list_categories', 'span_before_link_list_categories' );
function span_before_link_list_categories( $list ) {
// $list = str_replace('<a ','<span> / </span><a ',$list); //リンクテキストの前に「<span>・</span>」を追加（before）
// $list = str_replace('</a>','<span>・</span></a>',$list); //リンクテキストの後に「<span>・</span>」を追加（after）
return $list;
}


/* アーカイブページの表示件数を定義 */
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  /* アーカイブページの時に表示件数を10件にセット */
  if ( $query->is_archive('news') ) {
    if (is_mobile()) {
      $query->set( 'posts_per_page', '8' );
    } else {
      $query->set( 'posts_per_page', '10' );
    }
  }
  /* blog一覧の時に表示件数を10件にセット */
  if ( $query->is_post_type_archive('blog') ) {
      $query->set( 'posts_per_page', '13' );
  }
  if ( $query->is_tax('cat_blog') ) {
      $query->set( 'posts_per_page', '13' );
  }
  if ( $query->is_tax('tag_blog') ) {
      $query->set( 'posts_per_page', '13' );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

/* 講師一覧archive-teacher.phpをID順に */
function my_pre_get_posts( $query ) {
  if( is_admin() || ! $query->is_main_query() ){
  //管理画面、メインループ以外は処理しない
    return;
  }
  if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'teacher' ) {
  //POST_TYPEがeventの時のみ
    $query->set('orderby', 'meta_value_num'); //カスタムフィールドで並べ替える指定
    $query->set('meta_key', 'teacher_id'); //カスタムフィールドのキーを指定
    $query->set('order', 'ASC'); //昇順で並び替える
    $query->set( 'posts_per_page', '10' );
  }
  return $query;
}
add_action('pre_get_posts', 'my_pre_get_posts');

/* サムネイルの投稿を可能にする */
add_theme_support('post-thumbnails');

/* 親ページを持つ子ページの場合、親ページのスラッグを取得する */
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
      $post_data = get_post($post->post_parent);
      return $post_data->post_name;
  }
}

/* パンくずリスト */
function bcn_add($bcnObj) {
  // デフォルトの投稿一覧ページに「お知らせ一覧」を追加
  if (is_post_type_archive('post')) {
      $bcnObj->add(new bcn_breadcrumb('お知らせ一覧', null, array('archive', 'post-clumn-archive', 'current-item')));
      $trail_tmp = clone $bcnObj->trail[1];
      $bcnObj->trail[1] = clone $bcnObj->trail[0];
      $bcnObj->trail[0] = $trail_tmp;
  }
  // カスタム投稿blog一覧ページ
  if (is_post_type_archive('blog')) {
      $bcnObj->add(new bcn_breadcrumb('ブログ一覧', null, array('archive', 'post-clumn-archive', 'current-item')));
      $trail_tmp = clone $bcnObj->trail[1];
      $bcnObj->trail[1] = clone $bcnObj->trail[0];
      $bcnObj->trail[0] = $trail_tmp;
  }
  if (is_post_type_archive('teacher')) {
      $bcnObj->add(new bcn_breadcrumb('講師紹介', null, array('archive', 'post-clumn-archive', 'current-item')));
      $trail_tmp = clone $bcnObj->trail[1];
      $bcnObj->trail[1] = clone $bcnObj->trail[0];
      $bcnObj->trail[0] = $trail_tmp;
  }
  // recruitページのタイトルを変更
  // if (is_page('recruit')) {
  //     $bcnObj->add(new bcn_breadcrumb('採用情報', null, array('archive', 'post-clumn-archive', 'current-item')));
  //     $trail_tmp = clone $bcnObj->trail[2];
  //     $bcnObj->trail[2] = null;
  //     // $bcnObj->trail[1] = clone $bcnObj->trail[1];
  //     $bcnObj->trail[0] = $trail_tmp;
  // }
  // recruitページのタイトルを変更
  // if (is_parent_slug() === 'recruit') {
  //     $bcnObj->add(new bcn_breadcrumb('採用情報', null, array('archive', 'post-clumn-archive', 'current-item')));
  //     $trail_tmp = clone $bcnObj->trail[2];
  //     $bcnObj->trail[2] = null;
  //     // $bcnObj->trail[1] = clone $bcnObj->trail[1];
  //     $bcnObj->trail[0] = $trail_tmp;
  // }
  return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

  
/* スマホかどうかの条件分岐関数「is_mobile」を定義 */
function is_mobile(){
  $useragents = array(
      'iPhone', // iPhone
      'iPod', // iPod touch
      'Android.*Mobile', // 1.5+ Android *** Only mobile
      'Windows.*Phone', // *** Windows Phone
      'dream', // Pre 1.5 Android
      'CUPCAKE', // 1.5+ Android
      'blackberry9500', // Storm
      'blackberry9530', // Storm
      'blackberry9520', // Storm v2
      'blackberry9550', // Storm v2
      'blackberry9800', // Torch
      'webOS', // Palm Pre Experimental
      'incognito', // Other iPhone browser
      'webmate' // Other iPhone browser

  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/* MW WP FORM 半角英字にスペースを許可 */
// function coop_applicate_validation_rule($Validation, $data) {
//   //ここの「name_roma」は英数入力にしたい入力項目の名前に変更してください
//   $Validation->set_rule('name-en', 'alpha_space');

//   return $Validation;
// }
// //ここの「7」は設定したいフォームのIDに変更してください
// add_filter('mwform_validation_mw-wp-form-105', 'coop_applicate_validation_rule', 10, 2);

// function my_validation_rule( $validation_rules, $key ) {
//   $validation_rules['alpha_space'] = new MW_WP_Form_Validation_Rule_Alpha_Space($key);
//   return $validation_rules;
// }
// add_filter('mwform_validation_rules', 'my_validation_rule', 10, 2);

// class MW_WP_Form_Validation_Rule_Alpha_Space extends MW_WP_Form_Abstract_Validation_Rule
// {
//   protected $name = 'alpha_space';

//   public function rule( $key, array $options = []) {
//       $value = $this->Data->get( $key );
//       if ( !MWF_Functions::is_empty( $value ) ) {
//     $defaults = [];
//           if ( preg_match("/\A[a-zA-Z\s]+\z/", $value) === 0 ) {
//               $message_str = "半角英字で入力してください";
               
//               $defaults = ['message' => $message_str];
//           }
//           $options = array_merge( $defaults, $options );
//           return $options['message'];
//       }
//   }

//   public function admin( $key, $value ) {}
// }
<?php
function hamal_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_image_size( 'page_eyecatch',1200,900,true );
    add_image_size( 'banner_square',450,450,true );
    add_image_size( 'tool_icon',50,50,true );
    register_nav_menus( array(
        'main-menu'     => 'メインメニュー',
        'footer-menu'   => 'フッターメニュー',
    ));
}
add_action( 'after_setup_theme','hamal_theme_setup' );

//JS・CSS読込み
function hamal_enqueue_scripts() {
    //WP同梱のjQueryを削除（外部のjQueryを読込）
    if( !is_admin() ){
        wp_deregister_script( 'jquery' );
        }

    //JS読込み
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        array(),
        '3.6.0',
        true);
    wp_enqueue_script(
        'g-nav',
        get_template_directory_uri().'/assets/js/g-nav.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'chart.js',
        'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js',
        array(),
        '3.8.0'
    );
    wp_enqueue_script(
        'skillChart.js',
        get_template_directory_uri().'/assets/js/skillChart.js',
        array(),
        '1.0.0'
    );


    //CSS読込み
    wp_enqueue_style(
        'destyle',
        get_template_directory_uri().'/assets/css/destyle.css',
        array(),
        '1.0.0'
    );
    //"style.min.css"を優先的に読込み（なければ"style.css"読込み）
    if ( ! is_admin() ) {
    
        function min_style( $style_uri, $style_dir_uri ) {
    
            $style = str_replace( trailingslashit( $style_dir_uri ), '', $style_uri );
            $style = str_replace( '.css', '.min.css', $style );
    
            if ( file_exists( trailingslashit( STYLESHEETPATH ) . $style ) ) {
                $style_uri = trailingslashit( $style_dir_uri ) . $style;
            }
    
            return $style_uri;
    
        }
        add_filter( 'stylesheet_uri', 'min_style', 10, 2 );
    
    }
    wp_enqueue_style(
        'template-parts',
        get_template_directory_uri().'/assets/css/template-parts.min.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts','hamal_enqueue_scripts' );

//ウィジェットエリア定義
function hamal_widgets_init() {
    //サイドバーのウィジェットエリア追加
    register_sidebar(
        array(
            'name'          =>'サイドバー',
            'id'            =>'sidebar-widget-area',
            'description'   =>'投稿・固定ページサイドバー',
            'before_widget' =>'<div id="%1$s" class="%2$s">',
            'after_widget'  =>'</div>'
        )
    );
    //フッターウィジェットエリア追加
    register_sidebars(
		3,
		array(
            'name'          =>'フッター %d',
            'id'            =>'footer-widget-area',
            'description'   =>'フッターサイドバー',
            'before_widget' =>'<div id="%1$s" class="%2$s">',
            'after_widget'  =>'</div>',
		)
	);
}
add_action( 'widgets_init','hamal_widgets_init' );

//ブロックエディター対応
function hamal_block_setup() {
    //ブロック用CSS有効化
    add_theme_support( 'wp-block-styles' );
    //埋込み要素のレスポンシブ対応
    add_theme_support( 'responsive-embeds' );
    //「幅広」「全幅」対応
    add_theme_support( 'align-wide' );
    //カラーパレット設定
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  =>'スカイブルー',
                'slug'  =>'skyblue',
                'color' =>'#00A1C6',
            ),
            array(
                'name'  =>'ライトスカイブルー',
                'slug'  =>'light-skyblue',
                'color' =>'#ECF5F7',
            ),
            array(
                'name'  =>'ライトグレー',
                'slug'  =>'light-gray',
                'color' =>'#F7F6F5',
            ),
            array(
                'name'  =>'グレー',
                'slug'  =>'light-gray',
                'color' =>'#767268',
            ),
            array(
                'name'  =>'ダークグレー',
                'slug'  =>'dark-gray',
                'color' =>'#43413B',
            ),
        )
    );
    //フォントサイズ設定
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'  =>'極小',
                'size'  =>'14',
                'slug'  =>'x-small',
            ),
            array(
                'name'  =>'小',
                'size'  =>'16',
                'slug'  =>'small',
            ),
            array(
                'name'  =>'標準',
                'size'  =>'18',
                'slug'  =>'normal',
            ),
            array(
                'name'  =>'大',
                'size'  =>'24',
                'slug'  =>'large',
            ),
            array(
                'name'  =>'特大',
                'size'  =>'36',
                'slug'  =>'huge',
            ),
        ),
    );
    //エディター側のスタイル適用設定
    add_theme_support( 'editor-styles' );
    //エディタースタイルのCSSパス
    add_editor_style( 'assets/css/editor-styles.css' );
    //Google Fonts読込み
    add_editor_style( 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap' );
}
add_action( 'after_setup_theme','hamal_block_setup' );

//既存ブロックパターン追加・削除
function hamal_remove_block_patterns() {
    //コアのブロックパターンを全削除
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme','hamal_remove_block_patterns' );

//投稿アーカイブページ有効化
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //スラッグ名
    }
    return $args;
}

add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/*function new_excerpt_mblength($length) {
    return 100; //抜粋する文字数を100文字に設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more) {
	return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');*/


define('EXCERPT_NEW_LENGTH', 180 );   // 抜粋の文字数指定（半角を1文字、全角を2文字と数える）
 
// 抜粋の文字数の設定
//（抜粋にHTMLタグが含まれている場合を想定し少し多めに設定しておく）
function new_excerpt_length($length) {
	$excerpt_length_new	= EXCERPT_NEW_LENGTH + 420;
    return $excerpt_length_new;
}	
add_filter( 'excerpt_length', 'new_excerpt_length', 999 );



define('EXCERPT_END_MARK', '…' );  // 抜粋の最後につけるマーク（続きを読むマーク）
 
// 抜粋の切り出し
function excerpt_input_new( $excerpt ) {
	// ① 抜粋からHTMLタグを削除
	$excerpt	= strip_tags( $excerpt );
 
	// ② 抜粋文が指定文字数より多いかチェック
	if( mb_strwidth( $excerpt ) > EXCERPT_NEW_LENGTH ){
		// ③ 指定文字数より多ければ先頭から指定文字数分を切り出し
		$excerpt 	= mb_strimwidth( $excerpt , 0, EXCERPT_NEW_LENGTH );
		// ④ 抜粋文の最後に続きを読むマークを付ける
		$excerpt 	= $excerpt.EXCERPT_END_MARK;
	}
	
	// ⑤ 抜粋文を返す
	return	$excerpt;
}
add_filter( 'get_the_excerpt', 'excerpt_input_new' );
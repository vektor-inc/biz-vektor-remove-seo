<?php
/**
 * Plugin Name:     Biz Vektor Remove SEO
 * Plugin URI:
 * Description:     BizVektorのタイトル / ディスクリプション / キーワードの出力を停止します
 * Author:          Vektor,Inc.
 * Author URI:      https://www.vektor-inc.co.jp
 * Text Domain:     biz-vektor-remove-seo
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Biz_Vektor_Remove_Seo
 */

add_action( 'after_setup_theme', 'biz_vektor_remove_seo', 11 );
function biz_vektor_remove_seo() {
	remove_theme_support( 'title-tag' );
	remove_action( 'wp_head', 'biz_vektor_setHeadDescription', 5 );
	remove_action( 'wp_head', 'biz_vektor_seo_set_HeadKeywords', 1 );
}

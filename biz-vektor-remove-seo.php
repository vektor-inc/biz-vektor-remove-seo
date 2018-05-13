<?php
/**
 * Plugin Name:     BizVektor Remove SEO
 * Plugin URI:
 * Description:     BizVektorのタイトル / ディスクリプション / キーワードの出力を停止します
 * Author:          Vektor,Inc.
 * Author URI:      https://www.vektor-inc.co.jp
 * Text Domain:     biz-vektor-remove-seo
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Biz_Vektor_Remove_Seo
 */

function bv_is_new_version() {
	$version     = wp_get_theme()->get( 'Version' );
	$old_version = '1.11.4';
	if ( version_compare( $version, $old_version ) >= 0 ) {
		return true;
	} else {
		return false;
	}
}

add_action( 'after_setup_theme', 'biz_vektor_remove_seo', 11 );
function biz_vektor_remove_seo() {
	/*
	1.11.4 以前 function.php の after_setup_theme から add_theme_support
	1.11.5 以降
	 */
	if ( bv_is_new_version() ) {
		remove_action( 'init', 'biz_vektor_print_title' );
	} else {
		remove_theme_support( 'title-tag' );
	}
	remove_action( 'wp_head', 'biz_vektor_setHeadDescription', 5 );
	remove_action( 'wp_head', 'biz_vektor_seo_set_HeadKeywords', 1 );
}

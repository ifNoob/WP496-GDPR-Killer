<?php
/*
Plugin Name: WP 496 GDPR Killer
Plugin URI: https://bcchloe.jp
Description: EUデータ保護法GDPR 個人データのエクスポート・個人データの削除・プライバシー Killer
Author: BcChloe
Version: 1.0
Author URI: https://bcchloe.jp
Text Domain: wp496_gdpr_Killer
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Date 2018/5/20
*/

// Exit If Accessed Directly
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'ONLINE_PLUGIN_URL', plugins_url( '', __FILE__ ) );

add_action( 'admin_menu', 'wp_496_kill', 999 );

/**
* 引用
* https://www.nxworld.net/wordpress/wp-4-9-6-remove-submenu.html
*/

function wp_496_kill() {
  # ツール「個人データのエクスポート」を非表示
  remove_submenu_page( 'tools.php', 'export_personal_data' );

  # ツール「個人データの削除」を非表示
  remove_submenu_page( 'tools.php', 'remove_personal_data' );

  # 設定「プライバシー」を非表示
  # プライバシー生成部は残す、必要な場合はコメントアウト
//  remove_submenu_page( 'options-general.php', 'privacy.php' );
}

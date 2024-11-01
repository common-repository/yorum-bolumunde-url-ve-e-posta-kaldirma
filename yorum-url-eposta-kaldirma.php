<?php

/**
 * Plugin Name: Remove URL and Email from comments
 * Plugin URI: https://wordpress.org/plugins/yorum-bolumunde-url-ve-e-posta-kaldirma/
 * Description: The plugin completely removes the URL and e-mail fields found in the comments section.
 * Version: 1.0.0
 * Author: Oğuz
 * Author URI: http://oguzturk.net/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: yorum-bolumunde-url-ve-e-posta-kaldirma
 * Domain Path: /languages
 * License: GPL2
 */

function yorum_url_eposta_kaldirma($fields) { 
    unset($fields['url']);
	unset($fields['email']);
    return $fields;
}
add_filter('yorum_form_default_alanlar','yorum_url_eposta_kaldirma');
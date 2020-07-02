<?php
/**
 * Plugin Name: cme Login
 * Plugin URI: https://www.caughtmyeye.cc/
 * Description: A custom login page.
 * Author: caught my eye
 * Author URI: https://www.caughtmyeye.cc/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CME_LOGIN
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom CME Branded Login
 */
function cme_login_logo() { ?>
    <style type="text/css">
		.login {
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://marklchaves.files.wordpress.com/2020/01/cewek-strideby-kampong-glam-ed-bw-wb.jpg);
			background-size: cover;
		}
		#loginform {
  			border-radius: 8px;
			box-shadow: 0 1px 1px rgba(0,0,0,.2);
		}
        #login h1 a, .login h1 a {
            background-image: url(https://marklchaves.files.wordpress.com/2020/03/siteicon.png);
        height:250px;
        width:250px;
        background-size: 250px 250px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
		.login #nav a, .login #backtoblog a {
			color: silver !important;
		}
		.login #nav a:hover, .login #backtoblog a:hover {
			color: whitesmoke !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'cme_login_logo' );

function cme_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'cme_login_logo_url' );

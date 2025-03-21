<?php if( ! defined('ABSPATH') ) { header('Status: 403 Forbidden'); header('HTTP/1.1 403 Forbidden'); exit(); }
/**
* @link             http://katalystvideoplus.com
* @since            2.0.0
* @package          Katalyst_Video_Plus
*
* @wordpress-plugin
* Plugin Name:      	Katalyst Video Plus
* Plugin URI:       	https://sophoscreative.com/projects/katalyst-video-plus/
* Description:      	Create a multiple source video network with WordPress.
* Version:          	3.3.0
* Requires at least: 	5.9
* Requires PHP: 		8.0
* Author:           	Sophos Creative LLC
* Author URI:       	https://sophoscreative.com/
* License:          	GPL-2.0+
* License URI:      	http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:      	katalyst-video-plus
* Domain Path:      	/lang
*
*	Copyright 2023  sophoscreative.com  (email: support@sophoscreative.com)
*
*	This program is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   (at your option) any later version.
*
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*
*   You should have received a copy of the GNU General Public License
*   along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
**/

require_once plugin_dir_path( __FILE__ ) . 'inc/class-activator.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/class-deactivator.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/class-katalyst-video-plus.php';

register_activation_hook( __FILE__, array( 'Katalyst_Video_Plus_Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Katalyst_Video_Plus_Deactivator', 'deactivate' ) );

/**
 * Begins execution of the plugin.
 *
 * @since    2.0.0
 */
function run_katalyst_video_plus () {

	$katalyst_video_plus = new Katalyst_Video_Plus( 'Katalyst Video Plus', '3.3.0', '5.9.0' );
	$katalyst_video_plus->run();

}
run_katalyst_video_plus();

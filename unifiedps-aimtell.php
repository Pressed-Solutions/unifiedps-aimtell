<?php
/**
 * Plugin Name: UnifiedPS.com AimTell Tracking
 * Plugin URI: https://github.com/Pressed-Solutions/UnifiedPS-aimtell
 * Description: Makes the documentation sidebar stay within the viewport when user scrolls the page
 * Version: 1.0.0
 * Author: Pressed Solutions
 * Author URI: https://pressedsolutions.com
 * Copyright: 2017 Pressed Solutions

 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined( 'ABSPATH' ) or die( 'No access allowed' );

/**
 * Enequeue script
 */
function unifiedps_aimtell_tracking() {
    wp_register_script( 'unifiedps-aimtell', plugin_dir_url( __FILE__ ) . 'unifiedps-aimtell.js', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'unifiedps_aimtell_tracking' );
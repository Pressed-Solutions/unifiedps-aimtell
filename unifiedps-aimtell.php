<?php
/**
 * Plugin Name: UnifiedPS.com AimTell Tracking
 * Plugin URI: https://github.com/Pressed-Solutions/UnifiedPS-aimtell
 * Description: Adds AimTell scripts
 * Version: 1.1.1
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
    wp_enqueue_script( 'unifiedps-aimtell-worker-sdk', 'https://cdn.aimtell.com/sdk/aimtell-worker-sdk.js' );
    wp_enqueue_script( 'unifiedps-aimtell', plugin_dir_url( __FILE__ ) . 'unifiedps-aimtell.js', array(), '1.1.1' );
}
add_action( 'wp_enqueue_scripts', 'unifiedps_aimtell_tracking' );

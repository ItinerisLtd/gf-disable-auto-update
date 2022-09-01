<?php
declare(strict_types=1);

/**
 * Plugin Name:     GF Disable Auto Update
 * Plugin URI:      https://github.com/itinerisltd/gf-disable-auto-update
 * Description:     Turn off automatic and background updates in Gravity Forms.
 * Version:         0.1.1
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     gf-disable-auto-update
 */

namespace Itineris\GFDisableAutoUpdate;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('gform_disable_auto_update', '__return_true', 50000);

add_filter('option_gform_enable_background_updates', '__return_false', 50000);

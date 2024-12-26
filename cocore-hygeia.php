<?php
namespace CoCoreProductRoot;

/*
Plugin Name: CoCore Hygeia
Plugin URI: https://cocore.biz
Description: An edition of operation Pierre.
Author: Pierre Pearlpuppy
Version:	0.21.1
Author URI: https://pearlpuppy.com
Text Domain: cocore-hygeia
Domain Path: /languages
Since: 2024-12-01
Update: 2024-12-26
*/

/**
 *  ---------------------------
 *  The minimum requirements
 *  ---------------------------
 */

/**
 *  !!! DO NOT USE DIRECTLY
 */
define('_P_FILE', __FILE__);

/**
 *
 */
require_once(__DIR__ . '/Pearlpuppy/flashpoint.php');

/**
 *
 */
spl_autoload_register(__NAMESPACE__ . '\productLoadie');

/**
 *
 */
function productLoadie($class)
{
    if (strpos($class, __NAMESPACE__) !== 0) {
        return;
    }
    $search = array(
        __NAMESPACE__,
        "\\",
    );
    $replace = array(
        __DIR__,
        DIRECTORY_SEPARATOR,
    );
    require_once(str_replace($search, $replace, $class) . '.php');
}

/**
 *
 */
$cocore = new Product(__FILE__);
$cocore->roll();

/**
 *
 *
$wds = new \Pearlpuppy\CoCore\Hygeia\Action\WpDashboardSetup;
$wds->_x_hook();

/**
 *
 *
$hoge = new \Pearlpuppy\CoCore\Hygeia\Action('admin_menu');
$hoge->cast();

/**
 *
 *
$fuga = new \Pearlpuppy\CoCore\Hygeia\Action('wp_dashboard_setup');
$fuga->cast();

/**
 *
 *
\Pearlpuppy\CoCore\Hygeia\St_Actions

/**
 *
 *
echo '<pre style="margin-left:200px">wds: <code>';
print_r($wds);
echo '</code></pre>';

/**
 *
 */

/**
 *
 */

/**
 *
 */

/**
 *  ---------------------------
 *  
 *  ---------------------------
 */

/**
 *  ---------------------------
 *  ---------------------------
 */

/**
 *
 */

//[EOF]*/

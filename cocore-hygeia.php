<?php
namespace CoCoreProductRoot;

/*
Plugin Name: CoCore Hygeia
Plugin URI: https://cocore.biz
Description: An edition of operation Pierre.
Author: Pierre Pearlpuppy
Version:	0.20.1
Author URI: https://pearlpuppy.com
Text Domain: cocore-hygeia
Domain Path: /languages
Since: 2024-12-01
Update: 2024-12-09
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
$wds = new \Pearlpuppy\CoCore\Hygeia\Action\WpDashboardSetup;
$wds->_x_hook();

/**
 *
 */
$hoge = new \Pearlpuppy\CoCore\Hygeia\Action('admin_menu');
$hoge->cast();

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

<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\Tailor;

/**
 *  @file   Castle
 *  @since  ver. 0.20.1 (edit. Hygeia)
 */

/**
 *  Library of CoCore system hooks
 */
class Castle
{

	// Mixins

    /**
     *  Static use only
     */
    use Tailor\Inconstructible;

    // Constants

    /**
     *
     */

    // Properties

    /**
     *
     */

    // Constructor

    /**
     *
     */

    // Methods

    /**
     *
     */
    public static function wow()
    {
        return 'Wow!';
    }

    /**
     *
     */
    public static function actionWpDashboardSetup(...$args)
    {
        $brand = $args['_c']->nice('brand');
        wp_add_dashboard_widget("$brand-sandy", 'Sandy', [self::class, 'sandyContent'], priority: 'high');
    }

    /**
     *
     */
    public static function actionAdminMenu(...$args)
    {
        $brand = $args['_c']->dub('brand');
        $b_nice = strtolower($brand);
        add_menu_page("$brand Page", "$brand Menu", 'edit_posts', "$b_nice-settings");
    }

    /**
     *
     */
    public static function sandyContent()
    {
        global $sandra;
        $orb = Orbit::getInstance();
        include_once($orb->incPath('sandy.php'));
        $sandra->expose();
    }

    /**
     *
     */
    public static function actionInit(...$args)
    {
        register_post_type('project', ['public' => true]);
    }

    /**
     *
     */

    /**
     *
     */

//[EOC]*/
}

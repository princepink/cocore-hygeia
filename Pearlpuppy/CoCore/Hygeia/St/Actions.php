<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\Tailor;

/**
 *  @file   Actions
 *  @since  ver. 0.20.1 (edit. Hygeia)
 */

/**
 *  Library of CoCore system hooks
 */
class St_Actions
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
    public static function cocoreWpDashboardSetup(...$args)
    {
        $brand = $args['#c']->nice('brand');
        wp_add_dashboard_widget("$brand-sandy", 'Sandy', [$this, 'sandyContent'], priority: 'high');
    }

    /**
     *
     */
    public static function cocoreAdminMenu(...$args)
    {
        $brand = $args['#c']->dub('brand');
        $b_nice = strtolower($brand);
        add_menu_page("$brand Page", "$brand Menu", 'edit_posts', "$b_nice-settings");
    }

    /**
     *
     */

    /**
     *
     */

    /**
     *
     */

//[EOC]*/
}

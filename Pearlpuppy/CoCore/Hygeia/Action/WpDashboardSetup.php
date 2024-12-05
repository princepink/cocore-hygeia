<?php
namespace Pearlpuppy\CoCore\Hygeia\Action;

use Pearlpuppy\
{
    CoCore\Hygeia,
    Woopii\Whip,
    Lemonade\Sandra,
};

/**
 *  @file   
 */

/**
 *
 */
class WpDashboardSetup extends Hygeia\Abs_Hook
{

	// Mixins

    /**
     *
     */

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
    public function __construct()
    {
        parent::__construct();
    }

    // Methods

    /**
     *
     */
    public function cast(...$args)
    {
        $brand = $this->nice('brand');
        wp_add_dashboard_widget("$brand-sandy", 'Sandy', [$this, 'sandyContent'], priority: 'high');
    }

    /**
     *
     */
    public function sandyContent()
    {
        $orb = Hygeia\Orbit::getInstance();
        $sandra = new Sandra();
        $sandra->hop('hoge');
        include_once($orb->incPath('sandy.php'));
        $sandra->expose();
    }

    /**
     *
     */

    /**
     *
     */

//[EOC]*/
}

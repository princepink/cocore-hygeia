<?php
namespace Pearlpuppy\CoCore\Hygeia;

/**
 *  @file   Filter
 */

/**
 *  @since  ver. 0.11.0 (edit. Pierre)
 */
class Filter extends Abs_Hook
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

    // Methods

    /**
     *
     */
    public function _x_hook()
    {
        foreach ($this->callees as $method) {
#            call_user_func($this->funk, $this->hook_name, [$this->roller, $method]);
            call_user_func($this->funk, $this->hook_name, [__NAMESPACE__ . '\Trolley', $method]);
       }
    }

    /**
     *
     */

    /**
     *
     */

//[EOFC]*/
}

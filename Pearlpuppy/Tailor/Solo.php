<?php
namespace Pearlpuppy\Tailor;

/**
 *  @file   Solo
 */

/**
 *  Singleton pattern
 */
trait Solo
{

	// Mixins

    /**
     *
     */
    use Inconstructible;

    // Constants

    /**
     *
     */

    // Properties

    /**
     *
     */
    private static ?object $instance = null;

    // Constructor

    /**
     *
     */

    // Methods

    /**
     *
     */
    public static function getInstance(): object
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     *
     */

    /**
     *
     */

//[EOT]*/
}

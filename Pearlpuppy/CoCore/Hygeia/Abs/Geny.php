<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\
{
    Herald\Tribune,
    Woopii\Whip,
};

/**
 *  @file   
 */

/**
 *
 */
abstract class Abs_Geny implements Int_Gene
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
    public array $names = array();

    /**
     *
     */
    public object $info;

    /**
     *
     */

    // Constructor

    /**
     *
     */
    public function __construct()
    {
        $this->names = Tribune::typify(__NAMESPACE__);
        $this->inform();
    }

    // Methods

    /**
     *
     */
    protected function inform()
    {
        if (!function_exists('get_plugin_data')) {
            require_once(ABSPATH . 'wp-admin/includes/plugin.php');
        }
        $orb = Orbit::getInstance();
        $this->info = (object) get_plugin_data($orb->pFile(true), false, false);
    }

    /**
     *
     */
    public function dub(string $key): string
    {
        return $this->names[$key];
    }

    /**
     *
     */
    public function nice(string $key): string
    {
        return strtolower($this->dub($key));
    }

    /**
     *
     */

//[EOAC]*/
}

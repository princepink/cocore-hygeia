<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\
{
    Herald\Tribune,
    Woopii\Whip,
};

/**
 *  @file   Geny
 *  @since 0.20.0 (edit. Hygeia)
 */

/**
 *
 */
trait Tr_Geny
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
    public array $names;

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

    // Methods

    /**
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    protected function bapt(): void
    {
        $sectors = array(
            'production',
            'brand',
            'edition',
        );
        $names = explode("\\", __NAMESPACE__);
        $this->names =  array_combine($sectors, $names);
    }

    /**
     *  @since  ver. 0.20.0 (edit. Hygeia)
     *  @update ver. 0.20.1 (edit. Hygeia)
     */
    protected function inform(): void
    {
        $orb = $this->orbit();
        $this->info = (object) Whip::pregetPluginData($orb->pFile(true));
    }

    /**
     *  Wrapper of Orbit::getInstance
     *      A singleton class Orbit should be called each time
     *      where needed to be inside methods.
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    protected function orbit(): Orbit
    {
        return Orbit::getInstance();
    }

    /**
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function dub(string $key): string
    {
        return $this->names[$key];
    }

    /**
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function nice(string $key): string
    {
        return strtolower($this->dub($key));
    }

    /**
     *
     */

//[EOT]*/
}

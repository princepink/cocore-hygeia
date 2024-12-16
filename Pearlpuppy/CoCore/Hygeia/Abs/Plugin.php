<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\
{
    Herald\Tribune,
    Woopii\Whip,
};

/**
 *  @file   Plugin
 *  @since  ver. 0.10.1 (edit. Pierre)
 *  @update ver. 0.21.0 (edit. Hygeia)
 */

/**
 *
 */
abstract class Abs_Plugin extends Abs_Steerer implements Int_Scheme, Int_Conductor
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
    protected iterable $cast_iterator = [];

    /**
     *
     */
    protected iterable $castors = [];

    // Constructor

    /**
     *
     *  @since  ver. 0.20.2 (edit. Hygeia)
     */
    public function __construct(string $file)
    {
        $this->bapt();
        $this->inform($file);
        $this->troop();
    }

    // Methods

    /**
     *
     *  @since  ver. 0.20.2 (edit. Hygeia)
     */
    protected function inform($file)
    {
        $this->info = (object) Whip::pregetPluginData($file);
    }

    /**
     *
     *  @since  ver. 0.20.2 (edit. Hygeia)
     *
    protected function _troop()
    {
        $orb = $this->orbit();
        $edition_data = Tribune::parseJsonFile($orb->editionDir('edition.json'), true);
        $this->foo = $edition_data;
        foreach ($edition_data['castors'] as $type => $castors) {
            if (!is_array($castors)) {
                continue;
            }
            $class =  __NAMESPACE__ . "\\" . ucfirst($type);
            foreach ($castors as $handle) {
                $this->castors[] = new $class($handle);
            }
        }
    }

    /**
     *
     *  @since  ver. 0.20.2 (edit. Hygeia)
     */
    protected function troop()
    {
        $orb = $this->orbit();
        $edition_data = Tribune::parseJsonFile($orb->editionDir('edition.json'), true);
        $this->cast_iterator = Tribune::recursiveIterator($edition_data['castors']);
        $this->castors = $this->genCasts();
    }

    /**
     *
     *  @since  ver. 0.20.2 (edit. Hygeia)
     */
    protected function genCasts(): \Generator
    {
        foreach ($this->cast_iterator as $type => $handles) {
            if (!is_array($handles)) {
                continue;
            }
            $class =  __NAMESPACE__ . "\\" . ucfirst($type);
            foreach ($handles as $handle) {
                yield new $class($handle);
            }
        }
    }

    /**
     *
     */
    protected function canonise()
    {}

    /**
     *
     *  @since  ver. 0.20.2 (edit. Hygeia)
     */
    public function roll()
    {
        foreach ($this->castors as $castor) {
            $castor->cast();
        }
    }

    /**
     *
     */

//[EOAC]*/
}

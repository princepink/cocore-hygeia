<?php
namespace Pearlpuppy\Lemonade;

/**
 *  @file    Sandra
 *  @since  ver. 0.10.2 (edit. Pierre) ex-name: Consul
 */

/**
 *
 */
class Sandra extends Convertor
{

    // Mixins

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
    public function __construct(array|object $array = [], int $flags = 0)
    {
        parent::__construct('dl.consulat', $array, $flags);
    }

    // Methods

    /**
     *
     */
    public function geneCon(): \Generator
    {
        $this->rewind();
        while ($this->valid()) {
            yield new ConsPair($this->key(), $this->current());
            $this->next();
        }
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

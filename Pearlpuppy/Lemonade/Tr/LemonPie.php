<?php
namespace Pearlpuppy\Lemonade;

/**
 * @file    LemonPie
 *  @since  0.10.3 (edit. Pierre)
 */

/**
 *  Members for PqPie implement
 */
trait Tr_LemonPie {

    // Mixins

    /**
     *
     */

    // Properties

    /**
     *
     */

    // Methods

    /**
     *  @since  0.10.3 (edit. Pierre)
     */
    public function impose(): string
    {
        $this->trans();
        return parent::impose();
    }

    /**
     *  @since  0.10.3 (edit. Pierre)
     */
    public function trans(): void
    {
        $this->content = $this->geneCon();
    }

    /**
     *  @since  0.10.3 (edit. Pierre)
     */
    public function geneCon(): \Generator
    {
        $this->rewind();
        while ($this->valid()) {
            yield static::seed($this->key(), $this->current(), $this->tag);
            $this->next();
        }
    }

    /**
     *
     */

//[EOT]*/
}

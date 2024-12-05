<?php
namespace Pearlpuppy\Lemonade;

/**
 *
 */
class Lime extends Lemon {

	// Constructor

    /**
     *    @param    $selector    (string)    CSS selector
     */
    public function __construct(?string $selector = null, mixed $contents = array())
    {
        if ($selector) {
            $this->cracker($selector);
        }
        $this->content = $this->cleanContent($contents);
        $this->listen();
    }

	/**
	 *	@param	$selector	(string)	CSS selector
	 *
	public function __construct($selector = null, $contents = array()) {
		parent::__construct($selector, $contents);
	}

	/**
	 *
	 */

//[EOC]*/
}

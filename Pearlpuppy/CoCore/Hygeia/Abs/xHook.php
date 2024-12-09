<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\Herald\Tribune;

/**
 *  @file   
 */

/**
 *
 */
abstract class Abs_xHook
{

	// Mixins

    /**
     *
     */
    use Tr_Geny;

    // Constants

    /**
     *
     */

    // Properties

    /**
     *
     */
    protected string $func = 'add_';

    /**
     *
     */
    protected array $args = array(
        'hook_name' => null,
        'callback' => null,
    );

    /**
     *
     */

    // Constructor

    /**
     *
     */
    public function __construct()
    {
        $this->bapt();
#        parent::__construct();
        $this->troop();
    }

    // Methods

    /**
     *
     */
    abstract public function cast(...$args);

    /**
     *
     */
    protected function troop()
    {
        $names = explode("\\", static::class);
        $this->args['hook_name'] = Tribune::pasc2Snake(array_pop($names));
        $this->args['callback'] = [$this, 'cast'];
        $this->func .= strtolower(array_pop($names));
    }

    /**
     *
     */
    public function _x_hook()
    {
        call_user_func_array($this->func, $this->args);
    }

    /**
     *
     */

    /**
     *
     */

//[EOAC]*/
}

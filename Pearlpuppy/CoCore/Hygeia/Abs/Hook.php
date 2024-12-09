<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\Herald\Tribune;

/**
 *  @file   Hook
 */

/**
 *  @since  ver. 0.11.0 (edit. Pierre)
 *  @update ver. 0.20.1 (edit. Hygeia)
 */
abstract class Abs_Hook implements Int_Castor
{

	// Mixins

    /**
     *
     */
    use Tr_Geny;
    use Tr_Castella;

    // Constants

    /**
     *
     */
    const LIB_FORMAT = __NAMESPACE__ . '\St_%ss';

    // Properties

    /**
     *
     *
    protected $hook_name;

    /**
     *
     */
    protected $priority = 10;

    /**
     *
     */
    protected $accepted_args = 1;

    /**
     *
     */
    protected $funk = 'add_';

    /**
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    protected string $lib;

    // Constructor

    /**
     *
     *
    public function _x_construct(protected object $roller, protected string $hook_name, protected array $callees)
    {
        $this->punk();
    }

    /**
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function __construct(protected string $hook_name)
    {
        $this->bapt();
        $this->punk();
    }

    // Methods

    /**
     *
     */
    public function punk()
    {
        $names = explode('\\', static::class);
        $name = array_pop($names);
        $this->lib = sprintf(self::LIB_FORMAT, $name);
        $this->funk .= strtolower($name);
    }

    /**
     *
     */
    public function prop(string $property, $value = null)
    {
        if (is_null($value)) {
            return $this-$property;
        }
        $this->$property = $value;
    }

    /**
     *
     */
    public function prior(?int $int = null)
    {
        return $this->prop('priority', $int);
    }

    /**
     *
     */
    public function accept(?int $int = null)
    {
        return $this->prop('accepted_args', $int);
    }

    /**
     *  Defines arguments for $funk
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    protected function argue(): array
    {
        $args = array(
            'hook_name' => $this->hook_name,
            'callback' => [$this, 'crook'],
            'priority' => $this->priority,
            'accepted_args' => $this->accepted_args,
        );
        return $args;
    }

    /**
     *
     */
    public function crook(...$args)
    {
        $args['#c'] = $this;
        call_user_func_array([$this->lib, 'cocore' . Tribune::snake2Pasc($this->hook_name)], $args);
    }

//[EOAC]*/
}

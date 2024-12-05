<?php
namespace Pearlpuppy\CoCore\Hygeia;

use Pearlpuppy\
{
    Tailor,
    Herald\Tribune,
    Woopii\Whip,
};

/**
 *  @file   Orbit
 *      Controlling paths.
 *  @since  0.20.0 (edit. Hygeia)
 */

/**
 *  @since  ver. 0.20.0 (edit. Hygeia)
 */
final class Orbit
{

	// Mixins

    /**
     *
     */
    use Tailor\Solo;

    // Constants

    /**
     *
     */

    // Properties

    /**
     *
     */
    private string $plugin_file;

    /**
     *
     */

    // Constructor

    /**
     *
     */
    private function __construct()
    {
        $this->plugin_file = Whip::safePath(_P_FILE);
    }

    // Methods

    /**
     *  @param  $args   Individual directory or file names, ordered
     *      these must be started with right under the Product plugin directory
     *  @return Fullpath 
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    protected function pave(string ...$args): string
    {
        array_unshift($args, $this->pDir());
        return implode(DIRECTORY_SEPARATOR, $args);
    }

    /**
     *
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function pFile(bool $full = false): string
    {
        if ($full) {
            return _P_FILE;
        }
        return $this->plugin_file;
    }

    /**
     *
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function pDir(): string
    {
        return dirname(_P_FILE);
    }

    /**
     *
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function pUri(): string
    {
        return content_url(Whip::safePath($this->pDir()));
    }

    /**
     *
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function incPath(string $file = ''): string
    {
        return $this->pave('inclusions', $file);
    }

    /**
     *
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function imgPath(string $file = ''): string
    {}

    /**
     *
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    public function imgUri(string $file = ''): string
    {}

    /**
     *
     */

    /**
     *
     */

//[EOFC]*/
}

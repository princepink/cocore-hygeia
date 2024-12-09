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
    private string $production_dir;

    /**
     *
     */
    private string $brand_dir;

    /**
     *
     */
    private string $edition_dir;

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
        $this->assignSectorDirs();
    }

    // Methods

    /**
     *  @param  $args   Individual directory or file names, ordered
     *      these must be started with right under the Product plugin directory
     *  @return Fullpath 
     *  @since  ver. 0.20.0 (edit. Hygeia)
     */
    private function pave(string ...$args): string
    {
        array_unshift($args, $this->pDir());
        return implode(DIRECTORY_SEPARATOR, $args);
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function avantPave(array $args, ?string $file = null): string
    {
        if ($file) {
            $args[] = $file;
        }
        return $this->pave(...$args);
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    private function assignSectorDirs(): void
    {
        $sectors = explode("\\", __NAMESPACE__);
        $this->edition_dir = Whip::safePath($this->pave(...$sectors));
        array_pop($sectors);
        $this->brand_dir = Whip::safePath($this->pave(...$sectors));
        array_pop($sectors);
        $this->production_dir = Whip::safePath($this->pave(...$sectors));
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
     *  @return Product plugin directory, no slash on tail
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
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function incPath(?string $file = null): string
    {
        $args = array(
            'inclusions',
        );
        return $this->avantPave($args, $file);
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function imgPath(?string $file = null): string
    {
        $args = array(
            'assets',
            'images',
        );
        return $this->avantPave($args, $file);
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function imgUri(?string $file = null): string
    {
        return Whip::wpcPath2Uri($this->imgPath($file));
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function productionDir(): string
    {
        return Whip::redPath($this->production_dir);
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function brandDir(): string
    {
        return Whip::redPath($this->brand_dir);
    }

    /**
     *
     *  @since  ver. 0.20.1 (edit. Hygeia)
     */
    public function editionDir(): string
    {
        return Whip::redPath($this->edition_dir);
    }

    /**
     *
     */

//[EOFC]*/
}

<?php
/**
 * Theme Boilerplate Theme Controller File.
 *
 * This file is used to specify settings & defaults 
 * for the theme and blocks on pages that this theme is actived on.
 *
 * @author   Oliver Green <oliver@c5labs.com>
 * @license  See attached license file
 */
namespace Concrete\Theme\ThemeBoilerplate;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme as Theme;

defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Theme Boilerplate Theme Controller Class.
 *
 * @author   Oliver Green <oliver@c5labs.com>
 * @license  See attached license file
 */
class PageTheme extends Theme implements ThemeProviderInterface
{
    /**
     * The themes name.
     * 
     * @var string
     */
    protected $pThemeName = 'Theme Boilerplate';

    /**
     * The themes description.
     * 
     * @var string
     */
    protected $pThemeDescription = 'A theme boilerplate to start building from.';

    /**
     * The themes handle.
     * 
     * @var string
     */
    protected $pThemeHandle = 'theme-boilerplate';

    /**
     * Set the grid framework see http://goo.gl/1MFxbL
     */
    protected $pThemeGridFrameworkHandle = 'bootstrap3'; 

    /**
     * Register theme assets, see http://goo.gl/rpJUSy
     *
     * public function registerAssets() {
     *    $this->providesAsset('css', 'bootstrap/*');
     *    $this->providesAsset('css', 'blocks/form');
     *    $this->requireAsset('javascript', 'jquery');
     * }
     */

    /**
     * Set the block CSS class overrides
     *
     * public function getThemeBlockClasses()
     * {
     *     return array(
     *         'next_previous' => array('block-sidebar-wrapped'),
     *         'share_this_page' => array('block-sidebar-wrapped'),
     *         'content' => array('block-sidebar-wrapped'),
     *         'date_navigation' => array('block-sidebar-padded')
     *     );
     * }
     */

    /**
     * Set theme area CSS class overides
     *
     * public function getThemeAreaClasses()
     * {
     *     return array(
     *         'Page Footer' => array('area-content-accent')
     *     );
     * }
     */

    /**
     * Set default blocks template for the theme
     *
     * public function getThemeDefaultBlockTemplates()
     * {
     *     return array(
     *         'image' => 'some_special_image_template'
     *     );
     * }
     */

    /**
     * Set theme content editor styles classes
     *
     * public function getThemeEditorClasses()
     * {
     *     return array(
     *         array('title' => t('Title Thin'), 'menuClass' => 'title-thin', 'spanClass' => 'title-thin'),
     *         array('title' => t('Image Caption'), 'menuClass' => 'image-caption', 'spanClass' => 'image-caption'),
     *         array('title' => t('Primary Button'), 'menuClass' => '', 'spanClass' => 'btn btn-primary')
     *     );
     * }
     */

    /**
     * Theme layout presets (bootstrap 3 tags used)
     *
     * public function getThemeAreaLayoutPresets()
     * {
     *     $presets = array(
     *         array(
     *             'handle' => 'left_sidebar',
     *             'name' => 'Left Sidebar',
     *             'container' => '<div class="row"></div>',
     *             'columns' => array(
     *                 '<div class="col-sm-4"></div>',
     *                 '<div class="col-sm-8"></div>'
     *             ),
     *         ),
     *         array(
     *             'handle' => 'right_sidebar',
     *             'name' => 'Right Sidebar',
     *             'container' => '<div class="row"></div>',
     *             'columns' => array(
     *                 '<div class="col-sm-8"></div>',
     *                 '<div class="col-sm-4"></div>'
     *             ),
     *         )
     *     );
     *     return $presets;
     * }
     */
}

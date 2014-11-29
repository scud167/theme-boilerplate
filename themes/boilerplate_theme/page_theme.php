<?php
namespace Concrete\Package\ConcreteThemePackage\Theme\BoilerplateTheme;

use Concrete\Core\Page\Theme\Theme as Theme;

class PageTheme extends Theme {

    /*
     * See http://goo.gl/EbMMXu for complete list of 
     * methods available within this class.
     *
     * Examples are:
     */
    
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
     * Set the grid framework see http://goo.gl/1MFxbL
     * 
     * protected $pThemeGridFrameworkHandle = 'bootstrap3';
     * 
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
}

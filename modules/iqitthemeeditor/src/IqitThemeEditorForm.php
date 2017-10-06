<?php
/**
 * 2017 IQIT-COMMERCE.COM
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement
 *
 *  @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
 *  @copyright 2017 IQIT-COMMERCE.COM
 *  @license   Commercial license (You can not resell or redistribute this software.)
 *
 */

if (!defined('_PS_VERSION_')) {
    exit;
}


class IqitThemeEditorForm
{
    public $module;
    public $cfgName;
    public $systemFonts;
    public $defaults;

    public function __construct()
    {
        $this->cfgName = 'iqitthemeed_';
        $this->module = Module::getInstanceByName('iqitthemeeditor');
        $this->systemFonts = $this->module->systemFonts;
        $this->defaults = $this->module->defaults;
    }

    public function getGeneralForm()
    {
        $globalFields = $this->globalFields('g_');
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->module->l('Layout/Body/Container'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-general'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Layout'),
                        'name' => 'g_layout',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'boxed',
                                    'name' => $this->module->l('Boxed'),
                                ),
                                array(
                                    'id_option' => 'wide',
                                    'name' => $this->module->l('Wide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom margin'),
                        'desc' => $this->module->l('Adds top and bottom margin to main container'),
                        'condition' => array(
                            'g_layout' => '==boxed'
                        ),
                        'name' => 'g_margin_tb',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Container box shadow'),
                        'name' => 'g_boxshadow',
                        'condition' => array(
                            'g_layout' => '==boxed'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Container border'),
                        'name' => 'g_border',
                        'size' => 30,
                        'condition' => array(
                            'g_layout' => '==boxed'
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Container max width'),
                        'desc' => $this->module->l('Set maxium width of page. You must provide px or percent suffix (example 1240px or 100%)'),
                        'name' => 'g_max_width',
                        'class' => 'width-150',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Sidebars width'),
                        'name' => 'g_sidebars_width',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'narrow',
                                    'name' => $this->module->l('Narrow'),
                                ),
                                array(
                                    'id_option' => 'wide',
                                    'name' => $this->module->l('Wide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Body background'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],

                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getHeaderTabForm()
    {
        return array(
            'form' => array(
                'childForms' => array(
                    'iqit-header-layout'  => $this->module->l('Layout'),
                    'iqit-header-wrapper'  => $this->module->l('Header wrapper'),
                    'iqit-top-bar'  => $this->module->l('Top bar'),
                    'iqit-header'  => $this->module->l('Header'),
                ),
                'legend' => array(
                    'title' => $this->module->l('Header'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-header-tab'
                ),
            ),
        );
    }
    public function getHeaderWrapperForm()
    {
        $globalFields = $this->globalFields('hw_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Header wrapper'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-header-wrapper'
                ),
                'input' => array(
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Bottom padding'),
                        'name' => 'hw_padding_tb',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Width'),
                        'name' => 'hw_width',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'fullwidth',
                                    'name' => $this->module->l('Force Full width'),
                                ),
                                array(
                                    'id_option' => 'inherit',
                                    'name' => $this->module->l('Inherit'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border top'),
                        'name' => 'hw_border_t',
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border bottom'),
                        'name' => 'hw_border_b',
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border right'),
                        'name' => 'hw_border_r',
                        'condition' => array(
                            'h_layout' => '<=6,7'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'hw_boxshadow',
                        'size' => 30,
                    ),

                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Slider under header (absolute header) - only on homepage'),
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Status'),
                        'desc' => $this->module->l('Header will have postion: absolute so it will be shown above content.'),
                        'name' => 'h_absolute',
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disable'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Header wrapper bg'),
                        'desc' => $this->module->l('Set some transparent background'),
                        'name' => 'h_absolute_wrapper_bg',
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5',
                        ),
                    ),
                    /*
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Header bg'),
                        'desc' => $this->module->l('Set some transparent background'),
                        'name' => 'h_absolute_bg',
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5',
                        ),
                    ),
                    */
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getHeaderLayoutForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Layout'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-header-layout'
                ),
                'input' => array(
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Header style'),
                        'name' => 'h_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'desktop-headers/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'desktop-headers/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'desktop-headers/style3.png'
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => $this->module->l('Style 4'),
                                    'img' => 'desktop-headers/style4.png'
                                ),
                                /*
                                array(
                                    'id_option' => 5,
                                    'name' => $this->module->l('Style 5'),
                                    'img' => 'desktop-headers/style5.png'
                                ),
                                */
                                array(
                                    'id_option' => 6,
                                    'name' => $this->module->l('Style 6 (header as sidebar)'),
                                    'img' => 'desktop-headers/style6.png'
                                ),
                                array(
                                    'id_option' => 7,
                                    'name' => $this->module->l('Style 7 (header as sidebar)'),
                                    'img' => 'desktop-headers/style7.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getHeaderForm()
    {
        $globalFields = $this->globalFields('h_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Header'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-header'
                ),
                'input' => array(
                    /*
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    */
                    $globalFields['text_color'],
                    $globalFields['link_color'],
                    $globalFields['link_h_color'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Options'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'desc' => $this->module->l('Adds top and bottom padding to main container'),
                        'name' => 'h_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Logo position'),
                        'name' => 'h_logo_position',
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Sticky header/menu'),
                        'desc' => $this->module->l('Show sticky header during scroll. In 1,2 and 3 header layput only horizontal menu will be sticked'),
                        'name' => 'h_sticky',
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'menu',
                                    'name' => $this->module->l('Enabled - menu only'),
                                ),
                                array(
                                    'id_option' => 'header',
                                    'name' => $this->module->l('Enabled - entire header'),
                                ),
                                array(
                                    'id_option' => '0',
                                    'name' => $this->module->l('Disable'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Sticky element bg'),
                        'name' => 'h_sticky_bg',
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=1,2,3,4,5'
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Sticky top and bottom padding'),
                        'name' => 'h_sticky_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->module->l('Custom html'),
                        'desc' => $this->module->l('Note: Custom html changes are visible after save.'),
                        'name' =>  'h_txt',
                        'lang' => true,
                        'autoload_rte' => true,
                        'cols' => 60,
                        'rows' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Search, cart, login'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Icons size'),
                        'name' => 'h_icons_size',
                        'min' => 6,
                        'class' => 'width-150',
                        'size' => 30,
                        'suffix' => 'px',
                        'condition' => array(
                            'h_layout' => '<=2,3,4,6'
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Icon label'),
                        'desc' => $this->module->l('Show label below icon'),
                        'name' => 'h_icons_label',
                        'condition' => array(
                            'h_layout' => '<=2,3,4,6'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Search'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Search style'),
                        'name' => 'h_search_type',
                        'condition' => array(
                            'h_layout' => '<=3,4,6'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'full',
                                    'name' => $this->module->l('Fullscreen overlay'),
                                ),
                                array(
                                    'id_option' => 'box',
                                    'name' => $this->module->l('Floating box'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Search width'),
                        'name' => 'h_search_width',
                        'size' => 30,
                        'min' => 20,
                        'max' => 100,
                        'class' => 'width-150',
                        'step' => 1,
                        'suffix' => '%',
                        'condition' => array(
                            'h_layout' => '<=1,2'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Search input background'),
                        'name' => 'h_search_input_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Search input text color'),
                        'name' => 'h_search_input_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Search input border'),
                        'name' => 'h_search_input_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Cart'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'info_text',
                        'desc' => $this->module->l('To configure cart content go to Iqitthemeeditor > options > cart'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Cart style'),
                        'name' => 'h_cart_type',
                        'condition' => array(
                            'h_layout' => '<=1,5,7'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'one',
                                    'name' => $this->module->l('One line'),
                                ),
                                array(
                                    'id_option' => 'two',
                                    'name' => $this->module->l('Two line'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Cart trigger background'),
                        'name' => 'h_cart_trigger_bg',
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=1,5,7'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Cart trigger text color'),
                        'name' => 'h_cart_trigger_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Cart trigger qty bg'),
                        'name' => 'h_cart_trigger_qty_bg',
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=2,3,4,6'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Cart trigger qty txt'),
                        'name' => 'h_cart_trigger_qty_txt',
                        'size' => 30,
                        'condition' => array(
                            'h_layout' => '<=2,3,4,6'
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Cart trigger padding'),
                        'name' => 'h_cart_trigger_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                        'condition' => array(
                            'h_layout' => '<=1,5,7'
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getTopBarForm()
    {
        $globalFields = $this->globalFields('tb_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Top bar'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-top-bar'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Status'),
                        'name' => 'tb_status',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disabled'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Width'),
                        'name' => 'tb_width',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'fullwidth',
                                    'name' => $this->module->l('Force Full width'),
                                ),
                                array(
                                    'id_option' => 'inherit',
                                    'name' => $this->module->l('Inherit'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l(''),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'name' => 'tb_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'tb_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'tb_boxshadow',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Fonts size'),
                        'name' => 'tb_font_size',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'suffix' => 'px',
                        'step' => 1,
                    ),
                    $globalFields['text_color'],
                    $globalFields['link_color'],
                    $globalFields['link_h_color'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Social icons'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'info_text',
                        'desc' => $this->module->l('Links you can put in Iqitthemeeditor > options > social media'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Social icons'),
                        'name' => 'tb_social',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Color type'),
                        'name' => 'tb_social_c_t',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Default'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Custom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Icon color'),
                        'name' => 'tb_social_txt',
                        'size' => 30,
                        'condition' => array(
                            'tb_social_c_t' => '<=1',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Color type hover'),
                        'name' => 'tb_social_c_t_h',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Default'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Custom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Icon color hover'),
                        'name' => 'tb_social_txt_h',
                        'size' => 30,
                        'condition' => array(
                            'tb_social_c_t_h' => '<=1'
                        ),
                    ),
                    array(
                        'type' => 'range',
                        'label' => $this->module->l('Icon size'),
                        'name' => 'tb_social_size',
                        'size' => 30,
                        'min' => 6,
                        'max' => 120,
                        'step' => 1,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getMenuTabForm()
    {
        return array(
            'form' => array(
                'childForms' => array(
                    'iqit-menu-horizontal'  => $this->module->l('Horizontal menu'),
                    'iqit-menu-vertical'  => $this->module->l('Vertical menu'),
                    'iqit-menu-submenu'  => $this->module->l('Submenu'),
                    'iqit-menu-mobile'  => $this->module->l('Mobile menu'),
                ),
                'legend' => array(
                    'title' => $this->module->l('Menu'),
                    'icon' => 'icon-bars',
                    'id' => 'iqit-menu-tab'
                ),
            ),
        );
    }

    public function getMenuHorizontalForm()
    {

        $globalFields = $this->globalFields('hm_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Horizontal menu'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-menu-horizontal'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Submenu effect'),
                        'name' => 'hm_animation',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'fade',
                                    'name' => $this->module->l('Fade'),
                                ),
                                array(
                                    'id_option' => 'fadebottom',
                                    'name' => $this->module->l('Fade with bottom slide-in'),
                                ),
                                array(
                                    'id_option' => 'fadetop',
                                    'name' => $this->module->l('Fade with top slide-in'),
                                ),
                                array(
                                    'id_option' => 'none',
                                    'name' => $this->module->l('None'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border top'),
                        'name' => 'hm_border_t',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border right'),
                        'name' => 'hm_border_r',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border bottom'),
                        'name' => 'hm_border_b',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border left'),
                        'name' => 'hm_border_l',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Menu height'),
                        'name' => 'hm_height',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Tabs'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Align'),
                        'name' => 'hm_btn_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                                array(
                                    'id_option' => 'right',
                                    'name' => $this->module->l('Right'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Arrow'),
                        'desc' => $this->module->l('Show arrow if submenu exist for tab'),
                        'name' => 'hm_btn_arrow',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'hm_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Left/right padding'),
                        'name' => 'hm_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Font size (below 1300px width)'),
                        'name' => 'hm_small_font',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Left/right padding (below 1300px width)'),
                        'name' => 'hm_small_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Max width'),
                        'name' => 'hm_max_width',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Icon position'),
                        'name' => 'hm_btn_icon',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'inline',
                                    'name' => $this->module->l('Inline'),
                                ),
                                array(
                                    'id_option' => 'above',
                                    'name' => $this->module->l('Above'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Icon size'),
                        'name' => 'hm_btn_icon_size',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border inner'),
                        'name' => 'hm_border_i',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'hm_btn_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover text color'),
                        'name' => 'hm_btn_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover background'),
                        'name' => 'hm_btn_bg_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Legend background'),
                        'name' => 'hm_legend_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Legend color'),
                        'name' => 'hm_legend_bg_color',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getMenuVerticalForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Vertical menu'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-menu-vertical'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Position'),
                        'desc' => $this->module->l('You need to save settings to see this option on preview. Hidden option is useful if you put menu in elementor builder on homepage. This settins do not take any effect if you have sidebar header layout enabled.'),
                        'name' => 'vm_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'leftColumn',
                                    'name' => $this->module->l('Left column (all pages)'),
                                ),
                                array(
                                    'id_option' => 'horizontal',
                                    'name' => $this->module->l('On Horizontal menu (all pages)'),
                                ),
                                array(
                                    'id_option' => 'hiddenHorizontal',
                                    'name' => $this->module->l('Hidden on homepage, visible on horizontal menu on other pages'),
                                ),
                                array(
                                    'id_option' => 'hiddenLeft',
                                    'name' => $this->module->l('Hidden on homepage, visible on left column on other pages'),
                                ),
                                array(
                                    'id_option' => '0',
                                    'name' => $this->module->l('Hidden'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Submenu effect'),
                        'name' => 'vm_animation',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'fade',
                                    'name' => $this->module->l('Fade'),
                                ),
                                array(
                                    'id_option' => 'none',
                                    'name' => $this->module->l('None'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Submenu equal height'),
                        'desc' => $this->module->l('If enabled submenu always will start from top, and will have at least same height as tabs'),
                        'name' => 'vm_submenu_style',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'vm_bgcolor',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'vm_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'vm_boxshadow',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Title'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Title text'),
                        'name' => 'vm_title_text',
                        'condition' => array(
                            'vm_position' => '<=hiddenHorizontal,horizontal'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'desc' => $this->module->l('Title text you can change in translations'),
                        'name' => 'vm_title_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Line height'),
                        'name' => 'vm_title_height',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color'),
                        'name' => 'vm_title_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'vm_title_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color hover'),
                        'name' => 'vm_title_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background hover'),
                        'name' => 'vm_title_bg_h',
                        'size' => 30,
                    ),

                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Tabs'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Arrow'),
                        'desc' => $this->module->l('Show arrow if submenu exist for tab'),
                        'name' => 'vm_btn_arrow',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'vm_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top & bottom padding'),
                        'name' => 'vm_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Icon size'),
                        'name' => 'vm_btn_icon_size',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border inner'),
                        'name' => 'vm_border_i',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'vm_btn_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover text color'),
                        'name' => 'vm_btn_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover background'),
                        'name' => 'vm_btn_bg_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Legend background'),
                        'name' => 'vm_legend_bg_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Legend color'),
                        'name' => 'vm_legend_color',
                        'size' => 30,
                    ),

                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getMenuSubmenuForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Submenu'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-menu-submenu'
                ),
                'input' => array(
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'msm_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'msm_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'msm_boxshadow',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border inner'),
                        'name' => 'msm_border_inner',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'msm_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color hover'),
                        'name' => 'msm_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Listing arrows'),
                        'name' => 'msm_arrows',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Column titles'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'msm_title_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color'),
                        'name' => 'msm_title_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color hover'),
                        'name' => 'msm_title_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'msm_title_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Predefined tabs'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color'),
                        'name' => 'msm_tabs_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'msm_tabs_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color hover'),
                        'name' => 'msm_tabs_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background hover'),
                        'name' => 'msm_tabs_bg_h',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getMenuMobileForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Mobile menu'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-menu-mobile'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Type'),
                        'name' => 'mm_type',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'dropdown',
                                    'name' => $this->module->l('Dropdown'),
                                ),
                                array(
                                    'id_option' => 'push',
                                    'name' => $this->module->l('Push'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('First level bg'),
                        'name' => 'mm_background',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Second level bg'),
                        'name' => 'mm_background_l2',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Third level bg'),
                        'name' => 'mm_background_l3',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'mm_text',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Inner border'),
                        'name' => 'mm_inner_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'mm_border',
                        'size' => 30,
                        'condition' => array(
                            'mm_type' => '==push'
                        ),
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'mm_boxshadow',
                        'size' => 30,
                        'condition' => array(
                            'mm_type' => '==push'
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getContentTabForm()
    {
        return array(
            'form' => array(
                'childForms' => array(
                    'iqit-content-wrapper'  => $this->module->l('Content  wrapper'),
                    'iqit-content'  => $this->module->l('Content'),
                    'iqit-sidebar'  => $this->module->l('Sidebar'),
                    'iqit-products-lists'  => $this->module->l('Products list/Carousels'),
                    'iqit-category-page'  => $this->module->l('Category page'),
                    'iqit-product-page'  => $this->module->l('Product page'),
                    'iqit-brands-page'  => $this->module->l('Brands/Suppliers page'),
                ),
                'legend' => array(
                    'title' => $this->module->l('Content/Pages'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-content-tab'
                ),
            ),
        );
    }

    public function getContentWrapperForm()
    {
        $globalFields = $this->globalFields('cw_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Content Wrapper'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-content-wrapper'
                ),
                'input' => array(
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'name' => 'cw_padding_tb',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'cw_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'cw_boxshadow',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getContentForm()
    {
        $globalFields = $this->globalFields('c_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Content'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-content'
                ),
                'input' => array(
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'c_txt_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Link color'),
                        'name' => 'c_link_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Link color - hover'),
                        'name' => 'c_link_hover',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Page title'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Title design'),
                        'name' => 'c_page_title_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'block-title/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'block-title/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'block-title/style3.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Text position'),
                        'name' => 'c_page_title_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Title color'),
                        'name' => 'c_page_title_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Title border'),
                        'name' => 'c_page_title_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'c_page_title_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Section/widget title'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Title design'),
                        'name' => 'c_block_title_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'block-title/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'block-title/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'block-title/style3.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Text position'),
                        'name' => 'c_block_title_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Title color'),
                        'name' => 'c_block_title_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Title border'),
                        'name' => 'c_block_title_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'c_block_title_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Tabs'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Title color'),
                        'name' => 'c_tabs_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Title font'),
                        'name' => 'c_tabs_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Title border'),
                        'name' => 'c_tabs_border_b',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getSidebarForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Sidebar'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-sidebar'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Block/widget'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background color'),
                        'name' => 'sb_block_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'sb_block_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Padding'),
                        'name' => 'sb_block_padding',
                        'class' => 'width-150',
                        'min' => 0,
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Block/widget title'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Title design'),
                        'name' => 'sb_block_title_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'block-title/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'block-title/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'block-title/style3.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Text position'),
                        'name' => 'sb_block_title_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Title color'),
                        'name' => 'sb_block_title_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Title border'),
                        'name' => 'sb_block_title_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'sb_block_title_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),

                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getProductListForm()
    {
        $boxProduct = $this->productBoxColors('b');
        $boxProductHover = $this->productBoxColors('bh');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Product lists/Carousels'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-products-lists'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('General Options'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Default view'),
                        'name' => 'pl_default_view',
                        'desc' => $this->module->l('On category or manufactuer pages'),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'grid',
                                    'name' => $this->module->l('Grid'),
                                ),
                                array(
                                    'id_option' => 'list',
                                    'name' => $this->module->l('List'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Lazdy load'),
                        'desc' =>  $this->module->l('Load product images when needed. It will speed up your site'),
                        'name' => 'pl_lazyload',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disabled'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Second image on hover'),
                        'name' => 'pl_rollover',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => '0',
                                    'name' => $this->module->l('Disabled'),
                                ),
                                array(
                                    'id_option' => 'fade',
                                    'name' => $this->module->l('Enabled - fade'),
                                ),
                                array(
                                    'id_option' => 'slide',
                                    'name' => $this->module->l('Enabled - slide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Top pagination'),
                        'desc' =>  $this->module->l('Show pagination also above product lists'),
                        'name' => 'pl_top_pagination',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Faceted search on center column'),
                        'desc' => $this->module->l('If enabled Faceted search will be showed above product list. 
                                  It is great for one column layouts. If you enable this you should probably unhook ps_facetedsearch from displayLeftColumn hook'),
                        'name' => 'pl_faceted_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Carousels Options'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Autoplay'),
                        'name' => 'pl_crsl_autoplay',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Arrows'),
                        'name' => 'pl_crsl_style',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'middle',
                                    'name' => $this->module->l('In middle of product list'),
                                ),
                                array(
                                    'id_option' => 'hide',
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Arrow background'),
                        'name' => 'pl_crsl_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Arrow color'),
                        'name' => 'pl_crsl_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Dots'),
                        'name' => 'pl_crsl_dot',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Dots color'),
                        'name' => 'pl_crsl_dot_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Grid'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Products per line - large desktop'),
                        'desc' => $this->module->l('Note: Each column enabled decrease this value by 1. After modifications of this values maybe needed change of home_default image size'),
                        'name' => 'pl_grid_ld',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 6,
                                    'name' => 6
                                ),
                                array(
                                    'id_option' => 5,
                                    'name' => 5
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => 4
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => 3
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => 2
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Products per line - desktop'),
                        'name' => 'pl_grid_d',
                        'desc' => $this->module->l('Note: Each column enabled decrease this value by 1. After modifications of this values maybe needed change of home_default image size'),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 6,
                                    'name' => 6
                                ),
                                array(
                                    'id_option' => 5,
                                    'name' => 5
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => 4
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => 3
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => 2
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Products per line - tablet'),
                        'name' => 'pl_grid_t',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 4,
                                    'name' => 4
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => 3
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => 2
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => 1
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Products per line - phone'),
                        'name' => 'pl_grid_p',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 2,
                                    'name' => 2
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => 1
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Grid layout'),
                        'name' => 'pl_grid_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Default'),
                                    'img' => 'grid-layouts/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Aligned'),
                                    'img' => 'grid-layouts/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Just image (info on hover)'),
                                    'img' => 'grid-layouts/style3.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Product box margin'),
                        'desc' => $this->module->l('Define gutter between product boxes'),
                        'name' => 'pl_grid_margin',
                        'size' => 30,
                        'min' => 0,
                        'step' => 1,
                        'suffix' => 'px',
                        'class' => 'width-150',
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Product box padding'),
                        'desc' => $this->module->l('Helpfull when you want to add borders'),
                        'name' => 'pl_grid_padding',
                        'size' => 30,
                        'min' => 0,
                        'step' => 1,
                        'class' => 'width-150',
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Product text box padding'),
                        'desc' => $this->module->l('Area below product image'),
                        'name' => 'pl_grid_text_padding',
                        'condition' => array(
                            'pl_grid_layout' => '!=3'
                        ),
                        'size' => 30,
                        'min' => 0,
                        'step' => 1,
                        'class' => 'width-150',
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Product box colors - default'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Overlay background'),
                        'name' => 'pl_grid_overlay_bg',
                        'size' => 30,
                    ),
                    $boxProduct['border'],
                    $boxProduct['boxshadow'],
                    $boxProduct['colors'],
                    $boxProduct['bg_color'],
                    $boxProduct['text'],
                    $boxProduct['price'],
                    $boxProduct['rating'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Product box colors - hover'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Border color'),
                        'name' => 'pl_grid_bh_border_c',
                        'desc' => $this->module->l('Border will be visible only if you set it also for normal state'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Outline'),
                        'desc' => $this->module->l('Outline will be visible also if you do not set border for normal state. It is also helpfull in case you want wider border only on hover'),
                        'name' => 'pl_grid_bh_outline',
                        'size' => 30,
                    ),
                    $boxProductHover['boxshadow'],
                    $boxProductHover['colors'],
                    $boxProductHover['bg_color'],
                    $boxProductHover['text'],
                    $boxProductHover['price'],
                    $boxProductHover['rating'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Options'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Product name font size'),
                        'name' => 'pl_grid_name_font',
                        'size' => 30,
                        'min' => 0.1,
                        'class' => 'width-150',
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Title length'),
                        'name' => 'pl_grid_name_line',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Auto'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('One line'),
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Two line'),
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Three line'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Product price font size'),
                        'name' => 'pl_grid_price_font',
                        'size' => 30,
                        'min' => 0.1,
                        'class' => 'width-150',
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Text align'),
                        'name' => 'pl_grid_align',
                        'condition' => array(
                            'pl_grid_layout' => '==1'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Product category name'),
                        'desc' => $this->module->l('Default category of product'),
                        'name' => 'pl_grid_category_name',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Product reference'),
                        'name' => 'pl_grid_reference',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Buttons'),
                        'desc' => $this->module->l('Add to cart/more info button'),
                        'name' => 'pl_grid_btn',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Quantity input'),
                        'name' => 'pl_grid_qty',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Short description'),
                        'name' => 'pl_grid_desc',
                        'condition' => array(
                            'pl_grid_layout' => '!=3'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Product color snippets'),
                        'desc' => $this->module->l('Show product color attribute'),
                        'name' => 'pl_grid_colors',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => '0',
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 'show',
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Functional buttons'),
                        'desc' => $this->module->l('Quick view, compare, wishlist'),
                        'name' => 'pl_grid_func_btn',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show only on hover'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Add/view buttons'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Padding'),
                        'name' => 'pl_grid_btn_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'pl_grid_btn_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'pl_grid_btn_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'pl_grid_btn_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover - background'),
                        'name' => 'pl_grid_btn_bg_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover - text color'),
                        'name' => 'pl_grid_btn_color_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Hover - border color'),
                        'name' => 'pl_grid_btn_border_h',
                        'desc' => $this->module->l('Border will be visible only if you set it also for normal state. Tip if you want to have border only for hover in normal state set transparent color'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Functional buttons color'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'pl_grid_functional_bg',
                        'condition' => array(
                            'pl_grid_layout' => '!=3'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'pl_grid_functional_txt',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getCategoryPageForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Category page'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-category-page'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Show category image'),
                        'name' => 'cat_image',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Category description'),
                        'name' => 'cat_desc',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'onimage',
                                    'name' => $this->module->l('Inside category image (if exist and enabled)'),
                                ),
                                array(
                                    'id_option' => 'below',
                                    'name' => $this->module->l('Below product list'),
                                ),
                                array(
                                    'id_option' => 'above',
                                    'name' => $this->module->l('Above product list'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hidden'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Subcategories thumbs'),
                        'name' => 'cat_sub_thumbs',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Subcategories per line - desktop'),
                        'name' => 'cat_sub_thumbs_d',
                        'condition' => array(
                            'cat_sub_thumbs' => '==1'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 2,
                                    'name' => 6
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => 4
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => 3
                                ),
                                array(
                                    'id_option' => 6,
                                    'name' => 2
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Subcategories per line - tablet'),
                        'name' => 'cat_sub_thumbs_t',
                        'condition' => array(
                            'cat_sub_thumbs' => '==1'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 2,
                                    'name' => 6
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => 4
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => 3
                                ),
                                array(
                                    'id_option' => 6,
                                    'name' => 2
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Subcategories per line - phone'),
                        'name' => 'cat_sub_thumbs_p',
                        'condition' => array(
                            'cat_sub_thumbs' => '==1'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 3,
                                    'name' => 4
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => 3
                                ),
                                array(
                                    'id_option' => 6,
                                    'name' => 2
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Hide on mobile'),
                        'desc' => $this->module->l('If enabled, description, image and subcategories will be hidden on mobile'),
                        'name' => 'cat_hide_mobile',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getProductPageForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Product page'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-product-page'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Image area'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Width'),
                        'name' => 'pp_img_width',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 3,
                                    'name' => '3/12'
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => '4/12'
                                ),
                                array(
                                    'id_option' => 5,
                                    'name' => '5/12'
                                ),
                                array(
                                    'id_option' => 6,
                                    'name' => '6/12'
                                ),
                                array(
                                    'id_option' => 7,
                                    'name' => '7/12'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Image border'),
                        'name' => 'pp_img_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Thumbs position'),
                        'name' => 'pp_thumbs',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'bottom',
                                    'name' => $this->module->l('Bottom'),
                                ),
                                array(
                                    'id_option' => 'leftd',
                                    'name' => $this->module->l('Left(desktop), below(mobile)'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Zoom type'),
                        'name' => 'pp_zoom',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'inner',
                                    'name' => $this->module->l('Inner zoom + modal with inner zoom'),
                                ),
                                array(
                                    'id_option' => 'modalzoom',
                                    'name' => $this->module->l('Modal with inner zoom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Arrows and enlarge text'),
                        'name' => 'pp_zoom_ui_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Arrows and enlarge bg'),
                        'name' => 'pp_zoom_ui_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Content'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Align center'),
                        'name' => 'pp_centered_info',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => 'No'
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => 'Yes'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Price font'),
                        'name' => 'pp_price_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Attributes display'),
                        'name' => 'pp_attributes',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'inline',
                                    'name' => $this->module->l('Inline'),
                                ),
                                array(
                                    'id_option' => 'block',
                                    'name' => $this->module->l('Block'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Right sidebar'),
                        'name' => 'pp_sidebar',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hidden'),
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Normal'),
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Narrow'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Accesories position'),
                        'name' => 'pp_accesories',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'tab',
                                    'name' => $this->module->l('Tab'),
                                ),
                                array(
                                    'id_option' => 'footer',
                                    'name' => $this->module->l('Footer'),
                                ),
                                array(
                                    'id_option' => 'sidebar',
                                    'name' => $this->module->l('Sidebar'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Mancufacturer position'),
                        'name' => 'pp_man_logo',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'tab',
                                    'name' => $this->module->l('In product details tab'),
                                ),
                                array(
                                    'id_option' => 'title',
                                    'name' => $this->module->l('Below title'),
                                ),
                                array(
                                    'id_option' => 'next-title',
                                    'name' => $this->module->l('Next to title(only logo)'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Details style'),
                        'name' => 'pp_tabs',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'tabh',
                                    'name' => $this->module->l('Tabs horizontal'),
                                ),
                                array(
                                    'id_option' => 'section',
                                    'name' => $this->module->l('Section'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Tabs title position'),
                        'name' => 'pp_tabs_position',
                        'condition' => array(
                            'pp_tabs' => '<=tabh'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'info_text',
                        'condition' => array(
                            'pp_tabs' => '<=tabh'
                        ),
                        'desc' => $this->module->l('Tabs design you set in Iqitthemeeditor > Content/pages > Content'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getBrandsPageForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Brands/Suppliers page'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-brands-page'
                ),
                'input' => array(
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Layout'),
                        'name' => 'brands_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'brands/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'brands/style2.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getFooterTabForm()
    {
        return array(
            'form' => array(
                'childForms' => array(
                    'iqit-footer-layout'  => $this->module->l('Footer Layout'),
                    'iqit-footer-wrapper'  => $this->module->l('Footer design'),
                    'iqit-footer-copyrights'  => $this->module->l('Copyrights'),
                ),
                'legend' => array(
                    'title' => $this->module->l('Footer'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-footer-tab'
                ),
            ),
        );
    }

    public function getFooterDesignForm()
    {
        $globalFields = $this->globalFields('fw_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Footer colors'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-footer-wrapper'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Footer wrapper'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Fixed footer'),
                        'desc' => $this->module->l('If enabled footer will be hidded behind content and it will show on scroll'),
                        'name' => 'f_fixed',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => true,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => false,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Main footer'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border - top'),
                        'name' => 'fw_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'name' => 'fw_padding_tb',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'fw_text',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Link color'),
                        'name' => 'fw_link',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Link hover/active color'),
                        'name' => 'fw_link_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Block/widget title'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Visibility'),
                        'name' => 'fw_block_title_status',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                        'condition' => array(
                            'f_layout' => '<=4,5'
                        ),
                    ),
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Title design'),
                        'name' => 'fw_block_title_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'block-title/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'block-title/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'block-title/style3.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Text position'),
                        'name' => 'fw_block_title_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'left',
                                    'name' => $this->module->l('Left'),
                                ),
                                array(
                                    'id_option' => 'center',
                                    'name' => $this->module->l('Center'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Title color'),
                        'name' => 'fw_block_title_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Title border'),
                        'name' => 'fw_block_title_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size and style'),
                        'name' => 'fw_block_title_typo',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Newsletter / Social links'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Newsletter'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Newsletter visibility'),
                        'name' => 'f_newsletter_status',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border - top'),
                        'name' => 'f_top_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'name' => 'f_top_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                        'condition' => array(
                            'f_layout' => '<=2,3,4,5'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter area bg'),
                        'name' => 'f_top_bg',
                        'size' => 30,
                        'condition' => array(
                            'f_layout' => '<=2,3,4,5'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter area txt color'),
                        'name' => 'f_top_txt',
                        'size' => 30,
                        'condition' => array(
                            'f_layout' => '<=2,3,4,5'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Input background'),
                        'name' => 'f_input_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Input text color'),
                        'name' => 'f_input_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Button color'),
                        'name' => 'f_input_btn',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Button color hover'),
                        'name' => 'f_input_btn_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Input border'),
                        'name' => 'f_input_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Social icons'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'info_text',
                        'desc' => $this->module->l('Links you can put in Iqitthemeeditor > options > social media'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Status'),
                        'name' => 'f_social_status',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Color type'),
                        'name' => 'f_social_c_t',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Default'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Custom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Icon color'),
                        'name' => 'f_social_txt',
                        'size' => 30,
                        'condition' => array(
                            'f_social_c_t' => '<=1'
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Color type hover'),
                        'name' => 'f_social_c_t_h',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Default'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Custom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Icon color hover'),
                        'name' => 'f_social_txt_h',
                        'size' => 30,
                        'condition' => array(
                            'f_social_c_t_h' => '<=1'
                        ),
                    ),
                    array(
                        'type' => 'range',
                        'label' => $this->module->l('Icon size'),
                        'name' => 'f_social_size',
                        'size' => 30,
                        'min' => 6,
                        'max' => 120,
                        'step' => 1,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getFooterLayoutForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Layout'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-footer-layout'
                ),
                'input' => array(
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Footer style'),
                        'name' => 'f_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'footers/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'footers/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'footers/style3.png'
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => $this->module->l('Style 4'),
                                    'img' => 'footers/style4.png'
                                ),
                                array(
                                    'id_option' => 5,
                                    'name' => $this->module->l('Style 5'),
                                    'img' => 'footers/style5.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getFooterCopyrightForm()
    {
        $globalFields = $this->globalFields('g_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Copyrights'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-footer-copyrights'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Show copyrights'),
                        'name' => 'fc_status',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('No')
                            )
                        ),
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border top'),
                        'name' => 'fc_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'name' => 'fc_padding',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background'),
                        'name' => 'fc_bg_color',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->module->l('Custom html'),
                        'name' =>  'fc_txt',
                        'lang' => true,
                        'autoload_rte' => true,
                        'desc' => $this->module->l('Note: Custom html changes are visible after save.'),
                        'cols' => 60,
                        'rows' => 30,
                    ),
                    array(
                        'type' => 'filemanager',
                        'label' => $this->module->l('Image'),
                        'name' =>  'fc_img',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }



    public function getMobileForm()
    {
        $globalFields = $this->globalFields('rm_');

        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->module->l('Responsive/Mobile'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-mobile'
                ),
                'input' => array(
                    array(
                        'type' => 'filemanager',
                        'label' => $this->module->l('Retina logo'),
                        'desc' =>  $this->module->l('Retina ready logo should be twice bigger than logo uploaded in Preferences > themes'),
                        'name' =>  'rm_logo',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Allow pinch to zoom'),
                        'desc' =>  $this->module->l('Zoom page with pinch gesture'),
                        'name' => 'rm_pinch_zoom',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Mobile header'),
                        'class' => 'title-separator',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Mobile header style'),
                        'name' => 'rm_header',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'mobile-headers/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'mobile-headers/style2.png'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Style 3'),
                                    'img' => 'mobile-headers/style3.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Use also on desktops'),
                        'desc' => $this->module->l('If enable mobile header style replace default desktop header also on computers.'),
                        'name' => 'rm_breakpoint',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Fixed positioned header'),
                        'desc' => $this->module->l('Show sticky header during scroll'),
                        'name' => 'rm_sticky',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'up',
                                    'name' => $this->module->l('Enable only with scroll up'),
                                ),
                                array(
                                    'id_option' => 'down',
                                    'name' => $this->module->l('Enable'),
                                ),
                                array(
                                    'id_option' => '0',
                                    'name' => $this->module->l('Disable'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Padding'),
                        'name' => 'rm_padding',
                        'class' => 'width-150',
                        'suffix' => 'px',
                        'size' => 30,
                        'min' => 0,
                        'step' => 1,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Mobile header colors'),
                        'size' => 30,
                    ),
                    $globalFields['bg_color'],
                    $globalFields['boxshadow'],
                    $globalFields['border'],

                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Buttons'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Show button label'),
                        'name' => 'rm_link_label',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Padding'),
                        'name' => 'rm_link_padding',
                        'class' => 'width-150',
                        'suffix' => 'px',
                        'size' => 30,
                        'min' => 0,
                        'step' => 1,
                        'condition' => array(
                            'rm_header' => '==3'
                        ),
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Buttons border'),
                        'name' => 'rm_link_border',
                        'size' => 30,
                        'condition' => array(
                            'rm_header' => '==3'
                        ),
                    ),
                    $globalFields['link_color'],
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Link background'),
                        'name' => 'rm_link_bg',
                        'size' => 30,
                        'condition' => array(
                            'rm_header' => '==3'
                        ),
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Buttons(hover)'),
                        'size' => 30,
                    ),

                    $globalFields['link_h_color'],
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Link hover background'),
                        'name' => 'rm_link_h_bg',
                        'size' => 30,
                        'condition' => array(
                            'rm_header' => '==3'
                        ),
                    ),

                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Mobile footer'),
                        'class' => 'title-separator',
                        'size' => 30,
                    ),

                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Footer collapse'),
                        'name' => 'rm_footer_collapse',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Yes'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('No'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),




                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getOptionsTabForm()
    {
        return array(
            'form' => array(
                'childForms' => array(
                    'iqit-options'  => $this->module->l('Various options'),
                    'iqit-typography'  => $this->module->l('Typography'),
                    'iqit-cart'  => $this->module->l('Cart'),
                    'iqit-buttons'  => $this->module->l('Buttons'),
                    'iqit-breadcrumb'  => $this->module->l('Breadcrumb'),
                    'iqit-forms'  => $this->module->l('Forms/Drop downs/Tooltips'),
                    'iqit-modals'  => $this->module->l('Modals/Float Notifications'),
                    'iqit-labels'  => $this->module->l('Labels/Prices/Stars'),
                    'iqit-social-media' => $this->module->l('Social media'),
                ),
                'legend' => array(
                    'title' => $this->module->l('Options/Typography/Global styles'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-options-tab'
                ),
            ),
        );
    }

    public function getModalsForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Modals'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-modals'
                ),
                'input' => array(
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Overlay background color'),
                        'name' => 'modals_overlay',
                        'desc' => $this->module->l('Tip: Set some semi transparent color'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Modal content background'),
                        'name' => 'modals_bg',
                        'desc' => $this->module->l('Should be same or very similar to your content background'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Modal content border'),
                        'name' => 'modals_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Modal content box shadow'),
                        'name' => 'modals_boxshadow',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Float notifications'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'info_text',
                        'desc' => $this->module->l('For example add to wishlist, compare'),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Notification text color'),
                        'name' => 'modals_n_txt',
                        'desc' => $this->module->l('Tip: Set some semi transparent color'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Notification background'),
                        'name' => 'modals_n_bg',
                        'desc' => $this->module->l('Should be same or very similar to your content background'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Notification border'),
                        'name' => 'modals_n_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Notification box-shadow'),
                        'name' => 'modals_n_boxshadow',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }


    public function getOptionsForm()
    {
        $backToTopFields = $this->globalFields('op_to_top_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Various options'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-options'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Preloader'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Status'),
                        'desc' =>  $this->module->l('Show loading spinner before page is fully loaded'),
                        'name' => 'op_preloader',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => '0',
                                    'name' => $this->module->l('Disabled'),
                                ),
                                array(
                                    'id_option' => 'pre',
                                    'name' => $this->module->l('Enabled'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Preloader background'),
                        'name' => 'op_preloader_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Icon size'),
                        'name' => 'op_preloader_size',
                        'class' => 'width-150',
                        'size' => 30,
                        'min' => 5,
                        'condition' => array(
                            'op_preloader' => '==pre'
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Preloader icon color'),
                        'name' => 'op_preloader_icon_color',
                        'condition' => array(
                            'op_preloader' => '==pre'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'preloader-select',
                        'label' => $this->module->l('Preloader'),
                        'name' => 'op_preloader_icon_pre',
                        'condition' => array(
                            'op_preloader' => '==pre'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'mobile-headers/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'mobile-headers/style2.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Back to top'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Style'),
                        'name' => 'op_to_top_style',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disable'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),

                    $backToTopFields['bg_color'],
                    $backToTopFields['link_color'],
                    $backToTopFields['bg_h_color'],
                    $backToTopFields['link_h_color'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Custom scroll bar'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Status'),
                        'name' => 'op_scrollbar',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disable'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Color'),
                        'name' => 'op_scrollbar_color',
                        'condition' => array(
                            'op_scrollbar' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background color'),
                        'name' => 'op_scrollbar_color_bg',
                        'condition' => array(
                            'op_scrollbar' => '==1'
                        ),
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getSocialMediaForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Social media'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-social-media'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Facebook url'),
                        'name' => 'sm_facebook',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Twitter url'),
                        'name' => 'sm_twitter',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Youtube url'),
                        'name' => 'sm_youtube',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Google url'),
                        'name' => 'sm_google',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Instagram url'),
                        'name' => 'sm_instagram',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Pinterest url'),
                        'name' => 'sm_pinterest',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Vimeo url'),
                        'name' => 'sm_vimeo',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getCartForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Cart'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-cart'
                ),
                'input' => array(
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Options'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Style'),
                        'desc' =>  $this->module->l('Information show after add to cart'),
                        'name' => 'cart_style',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'floating',
                                    'name' => $this->module->l('Floating box'),
                                ),
                                array(
                                    'id_option' => 'side',
                                    'name' => $this->module->l('Side cart'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('After add confirmation'),
                        'desc' =>  $this->module->l('Information show after add to cart'),
                        'name' => 'cart_confirmation',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'modal',
                                    'name' => $this->module->l('Modal window (require action from user)'),
                                ),
                                array(
                                    'id_option' => 'notification',
                                    'name' => $this->module->l('Floating notification'),
                                ),
                                array(
                                    'id_option' => 'open',
                                    'name' => $this->module->l('Open cart box'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Colors'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background color'),
                        'name' => 'cart_bg',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Border'),
                        'name' => 'cart_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'boxshadow',
                        'label' => $this->module->l('Box shadow'),
                        'name' => 'cart_boxshadow',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Inner border color'),
                        'name' => 'cart_inner_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'cart_inner_text',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getTypographyForm()
    {
        $customFontDesc = '<div class="alert alert-info">' . $this->module->l('You have to copy your custom fonts files by ftp to modules/iqitthemeeditor/views/fonts and then put similar code in field above. Please note that the path(url) must be ../fonts/fontname.eot') . '<pre>
        @font-face {
        font-family: \'MyWebFont\';
        src: url(\'../fonts/webfont.eot\');
        src: url(\'../fonts/webfont.eot?#iefix\') format(\'embedded-opentype\'),
        url(\'../fonts/webfont.woff2\') format(\'woff2\'),
        url(\'../fonts/webfont.woff\') format(\'woff\'),
        url(\'../fonts/webfont.ttf\')  format(\'truetype\'),
        url(\'../fonts/webfont.svg#svgFontName\') format(\'svg\');
        }
        </pre>
        </div>';

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Typography'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-typography'
                ),
                'input' => array(
                    array(
                        'type' => 'textarea2',
                        'label' => $this->module->l('Custom font face include'),
                        'desc' => $customFontDesc,
                        'name' => 'typo_font_include',
                        'descFront' => $this->module->l('If you want to use custom font you need to include it first in backoffice part of theme editor. On front editor field is just for preview.'),
                        'disableFront' => true,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Base font'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Base font type'),
                        'name' => 'typo_bfont_t',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'google',
                                    'name' => $this->module->l('Google font'),
                                ),
                                array(
                                    'id_option' => 'system',
                                    'name' => $this->module->l('System font'),
                                ),
                                array(
                                    'id_option' => 'custom',
                                    'name' => $this->module->l('Custom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Google font url'),
                        'desc' => $this->module->l('Example: //fonts.googleapis.com/css?family=Open+Sans:400,700 Add 400 and 700 font weigh if exist. If you need adds latin-ext or cyrilic too.'). '<a href="https://www.google.com/fonts" target="_blank">'.$this->module->l('Check google font database').'</a>',
                        'name' => 'typo_bfont_g_url',
                        'condition' => array(
                            'typo_bfont_t' => '==google'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Google font family'),
                        'desc' => $this->module->getTranslator()->trans('Example: \'Montserrat\', sans-serif', array(), 'Modules.IqitThemeEditor.Admin'),
                        'name' => 'typo_bfont_g_name',
                        'condition' => array(
                            'typo_bfont_t' => '==google'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Custom font tame'),
                        'desc' => $this->module->getTranslator()->trans('Example: \'Montserrat\', sans-serif', array(), 'Modules.IqitThemeEditor.Admin'),
                        'name' => 'typo_bfont_c_name',
                        'condition' => array(
                            'typo_bfont_t' => '==custom'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('System font'),
                        'name' => 'typo_bfont_s_name',
                        'min' => 6,
                        'condition' => array(
                            'typo_bfont_t' => '==system'
                        ),
                        'options' => array(
                            'query' => $this->systemFonts,
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Base font size'),
                        'desc' => $this->module->l('Base font size is defined in px. It is default font size of template. Other elements of template are calculated to rem values. 1rem = your_definied_base_size.'),
                        'name' => 'typo_bfont_size',
                        'class' => 'width-150',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Line height'),
                        'name' => 'typo_bfont_lineheight',
                        'class' => 'width-150',
                        'min' => 0.5,
                        'step' => 0.1,
                        'size' => 30,
                        'suffix' => 'rem'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Base font size mobile'),
                        'desc' => $this->module->l('Font size for device with width less than 768px'),
                        'name' => 'typo_bfont_size_m',
                        'class' => 'width-150',
                        'size' => 30,
                        'min' => 6,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Headlines'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Headline font type'),
                        'name' => 'typo_hfont_t',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'same',
                                    'name' => $this->module->l('Same as base'),
                                ),
                                array(
                                    'id_option' => 'google',
                                    'name' => $this->module->l('Google font'),
                                ),
                                array(
                                    'id_option' => 'system',
                                    'name' => $this->module->l('System font'),
                                ),
                                array(
                                    'id_option' => 'custom',
                                    'name' => $this->module->l('Custom'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Google font url'),
                        'desc' => $this->module->l('Example: //fonts.googleapis.com/css?family=Open+Sans:400,700 Add 400 and 700 font weigh if exist. If you need adds latin-ext or cyrilic too.'). '<a href="https://www.google.com/fonts" target="_blank">'.$this->module->l('Check google font database').'</a>',
                        'name' => 'typo_hfont_g_url',
                        'condition' => array(
                            'typo_hfont_t' => '==google'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Google font family'),
                        'desc' => $this->module->getTranslator()->trans('Example: \'Montserrat\', sans-serif', array(), 'Modules.IqitThemeEditor.Admin'),
                        'name' => 'typo_hfont_g_name',
                        'condition' => array(
                            'typo_hfont_t' => '==google'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Custom font tame'),
                        'desc' => $this->module->getTranslator()->trans('Example: \'Montserrat\', sans-serif', array(), 'Modules.IqitThemeEditor.Admin'),
                        'name' => 'typo_hfont_c_name',
                        'condition' => array(
                            'typo_hfont_t' => '==custom'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('System font'),
                        'name' => 'typo_hfont_s_name',
                        'condition' => array(
                            'typo_hfont_t' => '==system'
                        ),
                        'options' => array(
                            'query' => $this->systemFonts,
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'info_text',
                        'desc' => $this->module->l('It is font of main page title, section titles and block titles. 
                        Size and other properties you can set in content and footer sections'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getButtonsForm()
    {
        $default = $this->basicColorsFields('btn', 'default');
        $action = $this->basicColorsFields('btn', 'action');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Buttons'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-buttons'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Default button'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Normal'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    $default['bg'],
                    $default['txt'],
                    $default['border'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Hover'),
                        'size' => 30,
                    ),
                    $default['bg_h'],
                    $default['txt_h'],
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Border color'),
                        'name' => 'btn_default_border_h',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Action/confirmation button'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Normal'),
                        'size' => 30,
                    ),
                    $action['bg'],
                    $action['txt'],
                    $action['border'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Hover'),
                        'size' => 30,
                    ),
                    $action['bg_h'],
                    $action['txt_h'],
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Border color'),
                        'name' => 'btn_action_border_h',
                        'size' => 30,
                    ),

                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getBreadcrumbForm()
    {
        $globalFields = $this->globalFields('bread_');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Breadcrumb'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-breadcrumb'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Status'),
                        'name' => 'bread_status',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Visible'),
                                ),
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hidden'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Width'),
                        'name' => 'bread_width',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'fullwidth-bg',
                                    'name' => $this->module->l('Full width background only'),
                                ),
                                array(
                                    'id_option' => 'fullwidth',
                                    'name' => $this->module->l('Full width'),
                                ),
                                array(
                                    'id_option' => 'inherit',
                                    'name' => $this->module->l('Inherit'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Top and bottom padding'),
                        'name' => 'bread_padding_tb',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Left and right padding'),
                        'name' => 'bread_padding_lr',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'width-150',
                        'step' => 1,
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font'),
                        'name' => 'bread_font',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'name' => 'bread_txt',
                        'size' => 30,
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    /*
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Replace background image with category image (if exist)'),
                        'name' => 'bread_bg_category',
                        'is_bool' => true,
                        'condition' => array(
                            'bread_bg_image' => '!= '
                        ),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled')
                            )
                        ),
                    ),
                    */
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    $globalFields['boxshadow'],


                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getFormsForm()
    {
        $input = $this->basicColorsFields('form', 'input');
        $radio = $this->basicColorsFields('form', 'radio');
        $dropDown = $this->basicColorsFields('form', 'dropdown');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Forms'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-forms'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Text input/select boxes - normal'),
                        'size' => 30,
                    ),
                    $input['bg'],
                    $input['txt'],
                    $input['border'],
                    $input['boxshadow'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Text input/select boxes - focus'),
                        'size' => 30,
                    ),
                    $input['bg_h'],
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Border color'),
                        'desc' => $this->module->l('Tip: if you want to have a border only on hover, in normal state select border different than none and give it transparent color'),
                        'name' => 'form_input_border_c_h',
                        'size' => 30,
                    ),
                    $input['boxshadow_h'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Checkboxs/radio buttons'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Tick mark color'),
                        'name' => 'form_radio_checked',
                        'size' => 30,
                    ),
                    $radio['bg'],
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Border'),
                        'name' => 'form_radio_border',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Dropdowns'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'info_text',
                        'desc' => $this->module->l('For example language or currency drop down.'),
                    ),
                    $dropDown['bg'],
                    $dropDown['txt'],
                    $dropDown['border'],
                    $dropDown['boxshadow'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Tooltip'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Text color'),
                        'desc' => $this->module->l('Tooltip is a small label showed on hover, for example above colorpickers or some small buttons'),
                        'name' => 'form_tooltip_txt',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Background color'),
                        'name' => 'form_tooltip_bg',
                        'size' => 30,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getLabelsForm()
    {
        $new_l = $this->basicColorsFields('lp', 'new_l');
        $sale_l = $this->basicColorsFields('lp', 'sale_l');
        $online_l = $this->basicColorsFields('lp', 'online_l');
        $instock_l = $this->basicColorsFields('lp', 'intstock_l');
        $outstock_l = $this->basicColorsFields('lp', 'outstock_l');

        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Labels/Alerts/Prices'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-labels'
                ),
                'input' => array(
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Price/stars'),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Price color'),
                        'name' => 'lp_price',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Rating stars color'),
                        'name' => 'lp_ratings',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Product stickers'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'font',
                        'label' => $this->module->l('Font size'),
                        'name' => 'lp_label_font',
                        'size' => 30,
                        'class' => 'width-150',
                        'min' => 1,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('New Label'),
                        'size' => 30,
                    ),
                    $new_l['bg'],
                    $new_l['txt'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Sale Label'),
                        'size' => 30,
                    ),
                    $sale_l['bg'],
                    $sale_l['txt'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Online & pack label'),
                        'size' => 30,
                    ),
                    $online_l['bg'],
                    $online_l['txt'],
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Stock labels'),
                        'size' => 30,
                        'border_top' => true
                    ),
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('In stock Label'),
                        'size' => 30,
                    ),
                    $instock_l['bg'],
                    $instock_l['txt'],
                    array(
                        'type' => 'subtitle_separator',
                        'label' => $this->module->l('Out of stock Label'),
                        'size' => 30,
                    ),
                    $outstock_l['bg'],
                    $outstock_l['txt'],
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }
    public function getCodesForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->module->l('Custom Css/Js/Codes'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-codes'
                ),
                'input' => array(
                    array(
                        'type' => 'code_textarea',
                        'label' => $this->module->l('Custom Css code'),
                        'size' => 30,
                        'name' =>  'codes_css',
                        'class' => 'iqit-code-editor',
                        'language' => 'css'
                    ),
                    array(
                        'type' => 'code_textarea',
                        'label' => $this->module->l('Custom Js code'),
                        'size' => 30,
                        'name' =>  'codes_js',
                        'class' => 'iqit-code-editor',
                        'language' => 'javascript',
                        'descFront' => $this->module->l('Code will be executed only after you save changes and refresh page.'),
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->module->l('Code before </head> tag'),
                        'desc' => $this->module->l('Note: Code is not visible in themeeditor mode'),
                        'size' => 30,
                        'name' =>  'codes_head',
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->module->l('Code before </body> tag'),
                        'desc' => $this->module->l('Note: Code is not visible in themeeditor mode'),
                        'size' => 30,
                        'name' =>  'codes_body',
                    ),


                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }


    public function getMaintanceForm()
    {
        $globalFields = $this->globalFields('mcs_');

        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->module->l('Maintenance/Coming soon'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-maintenance'
                ),
                'description' => $this->module->l('In this panel you configure style of Prestashop Maintenance page. To turn your shop into Maintenance mode, go to Shop parametrs > General > Maintenance.
                 Titles and countdown can be translated by default Prestsahop translation tool. '),
                'input' => array(
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Layout'),
                        'name' => 'mcs_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Style 1'),
                                    'img' => 'maintenance/style1.png'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Style 2'),
                                    'img' => 'maintenance/style2.png'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    $globalFields['bg_color'],
                    $globalFields['bg_image'],
                    $globalFields['wrapper_start'],
                    $globalFields['bg_repeat'],
                    $globalFields['bg_position'],
                    $globalFields['bg_size'],
                    $globalFields['bg_attachment'],
                    $globalFields['wrapper_end'],
                    $globalFields['text_color'],

                    array(
                        'type' => 'filemanager',
                        'label' => $this->module->l('Logo replacement'),
                        'desc' => $this->module->l('Use this field to replace default logo.'),
                        'name' => 'mcs_logo',
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Header (logo section) bg'),
                        'name' => 'mcs_header_bg',
                        'condition' => array(
                            'mcs_layout' => '==2'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Header (logo section) txt color'),
                        'name' => 'mcs_header_txt',
                        'condition' => array(
                            'mcs_layout' => '==2'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Countdown'),
                        'name' => 'mcs_countdown',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disabled'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'datetime',
                        'label' => $this->module->l('Date for countdown'),
                        'name' => 'mcs_date',
                        'condition' => array(
                            'mcs_countdown' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Newsletter'),
                        'name' => 'mcs_newsletter',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Disabled'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Enabled'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter field bg'),
                        'name' => 'mcs_form_bg',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter field txt'),
                        'name' => 'mcs_form_txt',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'border',
                        'label' => $this->module->l('Newsletter field border'),
                        'name' => 'mcs_form_border',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter button bg'),
                        'name' => 'mcs_button_bg',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter button text'),
                        'name' => 'mcs_button_txt',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter button hover bg'),
                        'name' => 'mcs_button_bg_h',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'color2',
                        'label' => $this->module->l('Newsletter button hover text'),
                        'name' => 'mcs_button_txt_h',
                        'condition' => array(
                            'mcs_newsletter' => '==1'
                        ),
                        'size' => 30,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Social buttons'),
                        'desc' => $this->module->l('Links you can put in Iqitthemeeditor > options > social media'),
                        'name' => 'mcs_social',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 0,
                                    'name' => $this->module->l('Hide'),
                                ),
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Show'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save'),
                ),
            ),
        );
    }

    public function getImportExportForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->module->l('Import/Export configuration'),
                    'icon' => 'icon-cogs',
                    'id' => 'iqit-import_export'
                ),
                'input' => array(
                    array(
                        'type' => 'import_export',
                        'label' => $this->module->l('Import Export'),
                        'name' =>  'import_export',
                    ),
                ),
            ),
        );
    }
    public function globalFields($prefix)
    {
        return[
            'bg_color' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Background color'),
                'name' => $prefix . 'bg_color',
                'size' => 30,
            ),
            'bg_h_color' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Hover Background color'),
                'name' => $prefix . 'bg_h_color',
                'size' => 30,
            ),

            'bg_image' =>  array(
                'type' => 'filemanager',
                'label' => $this->module->l('Background image'),
                'desc' => $this->module->l('There is absolute path used for images, make sure it is with https:// and there is no special characters in path or filename.'),
                'name' => $prefix . 'bg_image',
                'size' => 30,
            ),
            'wrapper_start' =>  array(
                'type' => 'wrapper_start',
                'size' => 30,
            ),
            'bg_repeat' =>  array(
                'type' => 'select',
                'label' => $this->module->l('Repeat'),
                'name' => $prefix . 'bg_repeat',
                'condition' => array(
                    $prefix . 'bg_image' => '!= '
                ),
                'options' => array(
                    'query' => array(
                        array(
                            'id_option' => 'repeat',
                            'name' => $this->module->l('repeat'),
                        ),
                        array(
                            'id_option' => 'repeat-x',
                            'name' => $this->module->l('repeat-x'),
                        ),
                        array(
                            'id_option' => 'repeat-y',
                            'name' => $this->module->l('repeat-y'),
                        ),
                        array(
                            'id_option' => 'no-repeat',
                            'name' => $this->module->l('no-repeat'),
                        ),
                    ),
                    'id' => 'id_option',
                    'name' => 'name',
                ),
            ),
            'bg_position' =>  array(
                'type' => 'select',
                'label' => $this->module->l('Position'),
                'name' => $prefix . 'bg_position',
                'condition' => array(
                    $prefix . 'bg_image' => '!= '
                ),
                'options' => array(
                    'query' => array(
                        array(
                            'id_option' => 'left-top',
                            'name' => $this->module->l('left top'),
                        ),
                        array(
                            'id_option' => 'left-center',
                            'name' => $this->module->l('left center'),
                        ),
                        array(
                            'id_option' => 'left-bottom',
                            'name' => $this->module->l('left bottom'),
                        ),
                        array(
                            'id_option' => 'right-top',
                            'name' => $this->module->l('right top'),
                        ),
                        array(
                            'id_option' => 'right-center',
                            'name' => $this->module->l('right center'),
                        ),
                        array(
                            'id_option' => 'right-bottom',
                            'name' => $this->module->l('right bottom'),
                        ),
                        array(
                            'id_option' => 'center-top',
                            'name' => $this->module->l('center top'),
                        ),
                        array(
                            'id_option' => 'center-center',
                            'name' => $this->module->l('center center'),
                        ),
                        array(
                            'id_option' => 'center-bottom',
                            'name' => $this->module->l('center bottom'),
                        ),
                    ),
                    'id' => 'id_option',
                    'name' => 'name',
                ),
            ),
            'bg_size' =>  array(
                'type' => 'select',
                'label' => $this->module->l('Size'),
                'name' => $prefix . 'bg_size',
                'condition' => array(
                    $prefix . 'bg_image' => '!= '
                ),
                'options' => array(
                    'query' => array(
                        array(
                            'id_option' => 'auto',
                            'name' => $this->module->l('auto'),
                        ),
                        array(
                            'id_option' => 'cover',
                            'name' => $this->module->l('cover'),
                        ),
                        array(
                            'id_option' => 'contain',
                            'name' => $this->module->l('contain'),
                        ),
                    ),
                    'id' => 'id_option',
                    'name' => 'name',
                ),
            ),
            'bg_attachment' =>  array(
                'type' => 'select',
                'label' => $this->module->l('Attachment'),
                'name' => $prefix . 'bg_attachment',
                'condition' => array(
                    $prefix . 'bg_image' => '!= '
                ),
                'options' => array(
                    'query' => array(
                        array(
                            'id_option' => 'fixed',
                            'name' => $this->module->l('Fixed'),
                        ),
                        array(
                            'id_option' => 'scroll',
                            'name' => $this->module->l('Scroll'),
                        ),
                    ),
                    'id' => 'id_option',
                    'name' => 'name',
                ),
            ),
            'wrapper_end' =>  array(
                'type' => 'wrapper_end',
                'size' => 30,
            ),
            'border' =>  array(
                'type' => 'border',
                'label' => $this->module->l('Border'),
                'name' => $prefix . 'border',
                'size' => 30,
            ),
            'boxshadow' =>  array(
                'type' => 'boxshadow',
                'label' => $this->module->l('Box shadow'),
                'name' => $prefix . 'boxshadow',
                'size' => 30,
            ),
            'text_color' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Text color'),
                'name' => $prefix . 'text_color',
                'size' => 30,
            ),
            'link_color' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Link color'),
                'name' => $prefix . 'link_color',
                'size' => 30,
            ),
            'link_h_color' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Link hover/active color'),
                'name' => $prefix . 'link_h_color',
                'size' => 30,
            ),
        ];
    }

    public function productBoxColors($prefix)
    {
        return[
            'border' =>  array(
                'type' => 'border',
                'label' => $this->module->l('Border'),
                'name' => 'pl_grid_' . $prefix . '_border',
                'size' => 30,
            ),
            'boxshadow' =>  array(
                'type' => 'boxshadow',
                'label' => $this->module->l('Box shadow'),
                'name' => 'pl_grid_' . $prefix . '_boxshadow',
                'size' => 30,
            ),
            'colors' =>  array(
                'type' => 'select',
                'label' => $this->module->l('Custom colors'),
                'name' => 'pl_grid_' . $prefix . '_colors',
                'options' => array(
                    'query' => array(
                        array(
                            'id_option' => 0,
                            'name' => $this->module->l('No'),
                        ),
                        array(
                            'id_option' => 1,
                            'name' => $this->module->l('Yes'),
                        ),
                    ),
                    'id' => 'id_option',
                    'name' => 'name',
                ),
            ),
            'bg_color' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Background color'),
                'name' => 'pl_grid_' . $prefix . '_bg',
                'size' => 30,
                'condition' => array(
                    'pl_grid_' . $prefix . '_colors' => '==1'
                ),
            ),
            'text' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Text color'),
                'name' => 'pl_grid_' . $prefix . '_text',
                'size' => 30,
                'condition' => array(
                    'pl_grid_' . $prefix . '_colors' => '==1'
                ),
            ),
            'price' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Price color'),
                'name' => 'pl_grid_' . $prefix . '_price',
                'size' => 30,
                'condition' => array(
                    'pl_grid_' . $prefix . '_colors' => '==1'
                ),
            ),
            'rating' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Stars'),
                'name' => 'pl_grid_' . $prefix . '_rating',
                'size' => 30,
                'condition' => array(
                    'pl_grid_' . $prefix . '_colors' => '==1'
                ),
            ),

        ];
    }

    public function basicColorsFields($prefix, $elementPrefix)
    {
        return[
            'bg' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Background'),
                'name' => $prefix . '_' . $elementPrefix . '_bg',
                'size' => 30,
            ),
            'txt' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Text'),
                'name' => $prefix . '_' . $elementPrefix . '_txt',
                'size' => 30,
            ),
            'border' =>  array(
                'type' => 'border',
                'label' => $this->module->l('Border'),
                'name' => $prefix . '_' . $elementPrefix . '_border',
                'size' => 30,
            ),
            'boxshadow' =>  array(
                'type' => 'boxshadow',
                'label' => $this->module->l('Box shadow'),
                'name' => $prefix . '_' . $elementPrefix . '_boxshadow',
                'size' => 30,
            ),
            'bg_h' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Background - hover/focus'),
                'name' => $prefix . '_' . $elementPrefix . '_bg_h',
                'size' => 30,
            ),
            'txt_h' =>  array(
                'type' => 'color2',
                'label' => $this->module->l('Text - hover/focus'),
                'name' => $prefix . '_' . $elementPrefix . '_txt_h',
                'size' => 30,
            ),
            'border_h' =>  array(
                'type' => 'border',
                'label' => $this->module->l('Border - hover/focus'),
                'name' => $prefix . '_' . $elementPrefix . '_border_h',
                'size' => 30,
            ),
            'boxshadow_h' =>  array(
                'type' => 'boxshadow',
                'label' => $this->module->l('Box shadow - hover/focus'),
                'name' => $prefix . '_' . $elementPrefix . '_boxshadow_h',
                'size' => 30,
            ),
        ];
    }
}

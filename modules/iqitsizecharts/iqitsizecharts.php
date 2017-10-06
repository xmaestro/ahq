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

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Core\Product\ProductExtraContent;

require_once dirname(__FILE__).'/src/IqitSizeCharts.php';

class IqitSizeCharts extends Module implements WidgetInterface
{
    const INSTALL_SQL_FILE = '/sql/install.sql';
    const UNINSTALL_SQL_FILE = '/sql/uninstall.sql';

    public $fields_list;
    public $fields_form;

    protected $templateFile;

    public function __construct()
    {
        $this->name = 'iqitsizecharts';
        $this->author = 'IQIT-COMMERCE.COM';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->cfgName = 'iqitsizecharts_';

        $this->bootstrap = true;
        parent::__construct();
        Shop::addTableAssociation('iqitsizechart', array('type' => 'shop'));

        $this->displayName = $this->l('IQITSIZECHARTS - table size chars for products');
        $this->description = $this->l('Size charts for your products');

        $this->templateFile = 'module:'.$this->name.'/views/templates/hook/'.$this->name.'.tpl';
    }

    public function install()
    {
        if (!parent::install()
            || !$this->registerHook('displayAdminProductsExtra')
            || !$this->registerHook('displayProductVariants')
            || !$this->registerHook('backOfficeHeader')
            || !$this->registerHook('actionObjectProductUpdateAfter')
            || !$this->registerHook('actionObjectProductDeleteAfter')
            || !$this->installSQL()) {
            return false;
        }

        return true;
    }

    public function uninstall()
    {
        return $this->uninstallSQL() && parent::uninstall();
    }

    public function hookBackOfficeHeader()
    {
        Media::addJsDef(array('iqitModulesSizeCharts' => [
                'ajaxUrl' => $this->context->link->getAdminLink('AdminModules', true) . '&ajax=1&configure=' . $this->name
            ]));
    }

    public function getContent()
    {

        $this->context->controller->addJS($this->_path . '/views/js/bo_module.js');

        $output = '';
        $id_iqitsizechart = (int)Tools::getValue('id_iqitsizechart');

        if (Tools::isSubmit('added')) {
            $output .= '<div class="alert alert-success">'.$this->trans('Chart added', array(), 'Modules.IqitSizeCharts.Admin').'</div>';
        }

        // onSave
        if (Tools::isSubmit('saveIqitSizeChart')) {
            if ($id_iqitsizechart) {
                $iqitAdditionalTab = new IqitSizeChart((int)$id_iqitsizechart);
            } else {
                $iqitAdditionalTab = new IqitSizeChart();
            }
            $iqitAdditionalTab->copyFromPost();

            $id_shop_list = Tools::getValue('checkBoxShopAsso_iqitsizechart');
            if (isset($id_shop_list) && !empty($id_shop_list)) {
                $iqitAdditionalTab->id_shop_list = $id_shop_list;
            } else {
                $iqitAdditionalTab->id_shop_list[] =  (int)Context::getContext()->shop->id;
            }

            if ($iqitAdditionalTab->validateFields(false) && $iqitAdditionalTab->validateFieldsLang(false)) {
                $iqitAdditionalTab->save();
                $iqitAdditionalTab->updateCategories(Tools::getValue('categoryBox'));

                $this->clearCache();
                Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&added&token=' . Tools::getAdminTokenLite('AdminModules'));
            } else {
                $output .= '<div class="conf error">'.$this->trans('An error occurred while attempting to save.', array(), 'Admin.Notifications.Error').'</div>';
            }
        }

        // show edit form
        if (Tools::isSubmit('updateiqitsizecharts') || Tools::isSubmit('addIqitSizeChart')) {
            $helper = $this->initForm();
            foreach (Language::getLanguages(false) as $lang) {
                if ($id_iqitsizechart) {
                    $iqitAdditionalTab = new IqitSizeChart((int)$id_iqitsizechart);
                    $helper->id = (int)$id_iqitsizechart;
                    $helper->fields_value['title'][(int)$lang['id_lang']] = $iqitAdditionalTab->title[(int)$lang['id_lang']];
                    $helper->fields_value['active'] = $iqitAdditionalTab->active;
                    $helper->fields_value['description'][(int)$lang['id_lang']] = $iqitAdditionalTab->description[(int)$lang['id_lang']];
                    $helper->fields_value['description'][(int)$lang['id_lang']] = $iqitAdditionalTab->description[(int)$lang['id_lang']];
                } else {
                    $helper->fields_value['title'][(int)$lang['id_lang']] = Tools::getValue('title_'.(int)$lang['id_lang'], '');
                    $helper->fields_value['active'] = true;
                    $helper->fields_value['description'][(int)$lang['id_lang']] = Tools::getValue('description_'.(int)$lang['id_lang'], '');
                }
            }
            $helper->table = 'iqitsizechart';
            $helper->identifier = 'id_iqitsizechart';
            if ($id_iqitsizechart = Tools::getValue('id_iqitsizechart')) {
                $this->fields_form[0]['form']['input'][] = array('type' => 'hidden', 'name' => 'id_iqitsizechart');
                $helper->fields_value['id_iqitsizechart'] = (int)$id_iqitsizechart;
            }
            return $output.$helper->generateForm($this->fields_form);
        } elseif (Tools::isSubmit('deleteiqitsizecharts')) {
            $iqitSizeChart = new IqitSizeChart((int)$id_iqitsizechart);
            $iqitSizeChart->delete();
            $this->clearCache();
            Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
        } else {
            $output .= $this->initList();
        }


        return $output;
    }

    protected function initList()
    {
        $charts = IqitSizeChart::getCharts();

        foreach ($charts as $key => $chart) {
            $associated_shop_ids = IqitSizeChart::getAssociatedIdsShop((int)$chart['id_iqitsizechart']);
            if ($associated_shop_ids && count($associated_shop_ids) > 1) {
                $charts[$key]['is_shared'] = true;
            } else {
                $charts[$key]['is_shared'] = false;
            }
        }

        $this->context->smarty->assign(array(
            'path' => $this->_path,
            'charts' => $charts,
            'link' => $this->context->link,
            'module' => $this->name,
        ));

        return $this->display(__FILE__, 'views/templates/admin/bo_module.tpl');
    }

    protected function initForm()
    {
        $id_iqitsizechart = (int)Tools::getValue('id_iqitsizechart');
        $selectedCategories = IqitSizeChart::getChartCategories($id_iqitsizechart);

        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->trans('New size Chart', array(), 'Modules.IqitSizeCharts.Admin'),
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Enabled'),
                    'name' => 'active',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('No')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Title'),
                    'name' => 'title',
                    'lang' => true,
                ),
                array(
                    'type' => 'categories',
                    'name' => 'categoryBox',
                    'label' => $this->l('Assign to categories'),
                    'desc' => $this->l('If product have selected category set as main category then size chart will be showed on product Page. 
                    You can also assign chart per specified product, during product edit in backfoffice'),
                    'tree' => array(
                        'id' => 'categories-tree',
                        'selected_categories' => $selectedCategories,
                        'root_category' => (int)$this->context->shop->getCategory(),
                        'use_search' => true,
                        'use_checkbox' => true
                    ),
                ),
                array(
                     'type' => 'textarea',
                     'label' => $this->l('Description'),
                     'name' => 'description',
                     'autoload_rte' => true,
                     'lang' => true,
                     'class' => 'js-chart-content'
                ),
                array(
                    'type' => 'table_generator',
                    'label' => $this->l('Table generator'),
                    'name' => 'table_generator',
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            ),
            'buttons' => array(
                'cancelBlock' => array(
                    'title' => $this->l('Back to list'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
                    'icon' => 'process-icon-back',
                ),
            ),
        );

        if (Shop::isFeatureActive()) {
            $this->fields_form[0]['form']['input'][] = array(
                'type' => 'shop',
                'label' => $this->l('Shop association'),
                'name' => 'checkBoxShopAsso',
            );
        }

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->tpl_vars = array(
            'module_path' => $this->_path,
        );
        $helper->submit_action = 'saveIqitSizeChart';
        return $helper;
    }

    public function hookDisplayAdminProductsExtra($params)
    {
        $idProduct = (int)Tools::getValue('id_product', $params['id_product']);
        $charts = IqitSizeChart::getCharts();
        $selectedChart = IqitSizeChart::getChartAssignedToProduct($idProduct);


        $this->context->smarty->assign(array(
            'path' => $this->_path,
            'charts' => $charts,
            'selectedChart' => $selectedChart,
            'idProduct' => $idProduct,
            'link' => $this->context->link,
            'moduleLink' => $this->context->link->getAdminLink('AdminModules').'&configure=iqitsizecharts&addIqitSizeChart=1',
            'module' => $this->name,
        ));

        return $this->display(__FILE__, 'views/templates/admin/bo_productab.tpl');
    }


    public function renderWidget($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }

        if (preg_match('/^displayProductExtraContent\d*$/', $hookName)) {
            return $this->getWidgetVariables($hookName, $configuration);
        } elseif (preg_match('/^displayProductAdditionalInfo\d*$/', $hookName) || preg_match('/^displayProductVariants\d*$/', $hookName)) {
            $idProduct = (int) $configuration['smarty']->tpl_vars['product']->value['id_product'];

            $cacheId = 'iqitsizecharts|'.$idProduct;

            if (!$this->isCached($this->templateFile, $this->getCacheId($cacheId))) {
                $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
            }
            return $this->fetch($this->templateFile, $this->getCacheId($cacheId));
        }
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }

        if (preg_match('/^displayProductExtraContent\d*$/', $hookName)) {
            $array = array();
            $idProduct = (int) $configuration['product']->id;
            $idLang = (int)  $this->context->language->id;
            $idShop = (int) $this->context->shop->id;
            $productChart = IqitSizeChart::getChartAssignedToProduct($idProduct);
            $idCategory = (int) $configuration['product']->id_category_default;

            $charts = array();
            if ($productChart > 0) {
                $charts[] = (array) new IqitSizeChart($productChart, $idLang, $idShop);
            } elseif ($productChart == 0) {
                return $array;
            } else {
                $charts = IqitSizeChart::getChartsByCategory($idCategory);
            }

            foreach ($charts as $key => $chart) {
                if ($chart['title']) {
                    $array[] = (new ProductExtraContent())
                        ->setTitle($chart['title'])
                        ->setContent($chart['description']);
                }
            }
            return $array;
        } elseif (preg_match('/^displayProductAdditionalInfo\d*$/', $hookName) || preg_match('/^displayProductVariants\d*$/', $hookName)) {
            $idProduct = (int) $configuration['product']['id_product'];
            $idCategory = (int) $configuration['product']['id_category_default'];
            $idLang = (int)  $this->context->language->id;
            $idShop = (int) $this->context->shop->id;

            $productChart = IqitSizeChart::getChartAssignedToProduct($idProduct);

            $charts = array();
            if ($productChart > 0) {
                $charts[] = (array) new IqitSizeChart($productChart, $idLang, $idShop);
            } elseif ($productChart == 0) {
                return $charts;
            } else {
                $charts = IqitSizeChart::getChartsByCategory($idCategory);
            }

            return array(
                'charts' =>  $charts,
            );
        }
    }

    public function hookActionObjectProductUpdateAfter($params)
    {
        if (!isset($params['object']->id)) {
            return;
        }

        $this->joinWithProduct($params['object']->id);
    }

    public function joinWithProduct($idProduct)
    {
        $chart = (int) Tools::getValue('iqitsizecharts')['chart'];

        if ($chart >= 0) {
            IqitSizeChart::assignProduct($idProduct, $chart);
        } else {
            IqitSizeChart::deleteAssignedProduct($idProduct);
        }

        $this->clearCache($idProduct);
    }

    public function hookcActionObjectProductDeleteAfter($params)
    {
        if (!isset($params['object']->id)) {
            return;
        }

        IqitSizeChart::deleteAssignedProduct($params['object']->id);

        $this->clearCache($params['object']->id);
    }


    public function clearCache($idProduct = 0)
    {
        if ($idProduct) {
            $this->_clearCache($this->templateFile, $this->name . '|' . $idProduct);
        } else {
            $this->_clearCache($this->templateFile);
        }
    }

    private function installSQL()
    {
        // Create database tables from install.sql
        if (!file_exists(dirname(__FILE__) . self::INSTALL_SQL_FILE)) {
            return false;
        }

        if (!$sql = Tools::file_get_contents(dirname(__FILE__) . self::INSTALL_SQL_FILE)) {
            return false;
        }

        $replace = array(
            'PREFIX' => _DB_PREFIX_,
            'ENGINE_DEFAULT' => _MYSQL_ENGINE_,
        );
        $sql = strtr($sql, $replace);
        $sql = preg_split("/;\s*[\r\n]+/", $sql);

        foreach ($sql as &$q) {
            if ($q && count($q) && !Db::getInstance()->Execute(trim($q))) {
                return false;
            }
        }

        // Clean memory
        unset($sql, $q, $replace);

        return true;
    }


    private function uninstallSQL()
    {
        // Create database tables from uninstall.sql
        if (!file_exists(dirname(__FILE__) . self::UNINSTALL_SQL_FILE)) {
            return false;
        }
        if (!$sql = Tools::file_get_contents(dirname(__FILE__) . self::UNINSTALL_SQL_FILE)) {
            return false;
        }
        $replace = array(
            'PREFIX' => _DB_PREFIX_,
            'ENGINE_DEFAULT' => _MYSQL_ENGINE_,
        );
        $sql = strtr($sql, $replace);
        $sql = preg_split("/;\s*[\r\n]+/", $sql);

        foreach ($sql as &$q) {
            if ($q && count($q) && !Db::getInstance()->Execute(trim($q))) {
                return false;
            }
        }
        // Clean memory
        unset($sql, $q, $replace);

        return true;
    }
}

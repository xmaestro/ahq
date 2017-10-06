<?php
/**
 * 2017 IQIT-COMMERCE.COM
 *
 * NOTICE OF LICENSE
 *
 * @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
 * @copyright 2017 IQIT-COMMERCE.COM
 * @license   GNU General Public License version 2
 *
 * You can not resell or redistribute this software.
 */


use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use Elementor\PluginElementor;
use Symfony\Component\HttpFoundation\Request;

if (!defined('_PS_VERSION_')) {
    exit;
}
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/IqitElementorLanding.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/IqitElementorTemplate.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/IqitElementorProduct.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/iqitElementorWpHelper.php';

require_once _PS_MODULE_DIR_ . '/iqitelementor/includes/plugin-elementor.php';

require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_Brands.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_ProductsList.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_ProductsListTabs.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_Modules.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_Menu.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_RevolutionSlider.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_Newsletter.php';
require_once _PS_MODULE_DIR_ . '/iqitelementor/src/widgets/IqitElementorWidget_Blog.php';

class IqitElementor extends Module implements WidgetInterface
{
    const INSTALL_SQL_FILE = '/sql/install.sql';
    const UNINSTALL_SQL_FILE = '/sql/uninstall.sql';

    public static $WIDGETS = [
        'Brands',
        'ProductsList',
        'ProductsListTabs',
        'RevolutionSlider',
        'Menu',
        'Newsletter',
        'Blog',
        'Modules',
    ];

    public function __construct()
    {
        $this->name = 'iqitelementor';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'IQIT-COMMERCE.COM';
        $this->bootstrap = true;
        $this->controllers = array('preview','widget');

        parent::__construct();

        $this->displayName = $this->l('IQITELEMENTOR - drag&drop front-end page builder');
        $this->description = $this->l('Flexible page builder based on Wordpress Elementor plugin by POJO.me');
    }

    public function install()
    {
        return (parent::install()
            && $this->registerHook('displayHome')
            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('actionObjectCmsUpdateAfter')
            && $this->registerHook('actionObjectCmsDeleteAfter')
            && $this->registerHook('actionObjectProductDeleteAfter')
            && $this->registerHook('displayCMSDisputeInformation')
            && $this->registerHook('displayBlogElementor')
            && $this->registerHook('displayProductElementor')
            && $this->registerHook('header')
            && $this->installTab()
            && $this->installSQL()
            && $this->installFixtures()
        );
    }

    public function hookDisplayBackOfficeHeader($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/backoffice.css');

        if (
            $this->context->controller->controller_name == 'AdminCmsContent' ||
            $this->context->controller->controller_name == 'AdminProducts' ||
            $this->context->controller->controller_name == 'AdminSimpleBlogPosts'
            ) {

            $this->context->controller->addJquery();
            $this->context->controller->addJS($this->_path . 'views/js/backoffice.js');

            if ($this->context->controller->controller_name == 'AdminCmsContent'){
                $idPage = (int) Tools::getValue('id_cms');
                $pageType = 'cms';
            } elseif ($this->context->controller->controller_name == 'AdminSimpleBlogPosts'){
                $idPage = (int) Tools::getValue('id_simpleblog_post');
                $pageType = 'blog';
            }
            else{
                global $kernel;

                $request = $kernel->getContainer()->get('request_stack')->getCurrentRequest();

                if (!isset($request->attributes)) {
                    return;
                }

                $idPage = (int) $request->attributes->get('id');
                $pageType = 'product';
            }

            if (!$idPage) {
                $this->context->smarty->assign(array(
                    'urlElementor' => ''
                ));
            }
            else{
                $url = $this->context->link->getAdminLink('IqitElementorEditor').'&pageType='.$pageType.'&pageId=' . $idPage . '&idLang='. (int) $this->context->language->id;

                $this->context->smarty->assign(array(
                    'urlElementor' => $url
                ));
            }

            return $this->fetch(_PS_MODULE_DIR_ .'/'. $this->name . '/views/templates/hook/backoffice_header.tpl');
        }
    }


    public function uninstall()
    {
        return ($this->uninstallSQL() && $this->uninstallTab() &&  parent::uninstall());
    }

    public function hookHeader()
    {
     //   $this->context->controller->requireAssets(array('font-awesome'));
        $this->registerCssFiles();
        $this->registerJSFiles();

        Media::addJsDef(
            array('elementorFrontendConfig' => [
                'isEditMode' => '',
                'stretchedSectionContainer' =>'',
                'is_rtl' => '',
            ]));
    }

    public function registerCssFiles(){

        $this->context->controller->registerStylesheet('modules-'.$this->name.'-eicons', 'modules/'.$this->name.'/views/lib/eicons/css/elementor-icons.min.css', ['media' => 'all', 'priority' => 150]);
        $this->context->controller->registerStylesheet('modules-'.$this->name.'-style', 'modules/'.$this->name.'/views/css/frontend.min.css', ['media' => 'all', 'priority' => 150]);
    }

    public function registerJSFiles(){

        $this->context->controller->registerJavascript('modules'.$this->name.'-instagram', 'modules/'.$this->name.'/views/lib/instagram-lite-master/instagramLite.min.js', ['position' => 'bottom', 'priority' => 150]);
        $this->context->controller->registerJavascript('modules'.$this->name.'-jquery-numerator', 'modules/'.$this->name.'/views/lib/jquery-numerator/jquery-numerator.min.js', ['position' => 'bottom', 'priority' => 150]);
        $this->context->controller->registerJavascript('modules'.$this->name.'-script', 'modules/'.$this->name.'/views/js/frontend.js', ['position' => 'bottom', 'priority' => 150]);

    }

    public function installTab()
    {
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = "IqitElementorEditor";
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = "IqitElementorEditor";
        }
        $tab->id_parent = -1;
        $tab->module = $this->name;
        $tab->add();

        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = "AdminIqitElementor";
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = "Iqit Elementor - Page builder";
        }
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminParentThemes');
        $tab->module = $this->name;
        $tab->add();

        return true;
    }

    public function uninstallTab()
    {
        $id_tab = (int)Tab::getIdFromClassName('IqitElementorEditor');
        $tab = new Tab($id_tab);
        $tab->delete();

        $id_tab = (int)Tab::getIdFromClassName('AdminIqitElementor');
        $tab = new Tab($id_tab);
        $tab->delete();

        return true;
    }


    public function installFixtures()
    {
        $success = true;
        $templateSource = json_decode(Tools::file_get_contents(_PS_MODULE_DIR_ . 'iqitelementor/initial_homepage.json'));

        $shops = Shop::getShopsCollection();
        foreach ($shops as $shop) {
            $layout = new IqitElementorLanding();
            $layout->id_shop = (int)$shop->id;
            $layout->title = 'Homepaga layout #1';
            $layout->data = $templateSource->data;
            $layout->add();
        }

        Configuration::updateValue('iqit_homepage_layout', 1);

        return $success;
    }

    public function getContent()
    {
       Tools::redirectAdmin(
           $this->context->link->getAdminLink('AdminIqitElementor')
        );
    }

    public function renderIqitElementorWidget($name, $options){
       $templateFile = strtolower($name) . '.tpl';
       $this->smarty->assign($this->getIqitElementorWidgetVariables($name, $options));
       return $this->fetch(_PS_MODULE_DIR_ .'/iqitelementor/views/templates/widgets/' . $templateFile);
    }

    public function getIqitElementorWidgetVariables($name, $options = [])
    {
        $className = 'IqitElementorWidget_' . $name;
        $widget = new $className($this->context);
        return $widget->parseOptions($options);
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }

        $templateFile = 'generated_content.tpl';
        $cacheId = $hookName;

        if (preg_match('/^displayHome\d*$/', $hookName)) {
            $cacheId = 'iqitelementor|'.$hookName;
        } elseif (preg_match('/^displayCMSDisputeInformation\d*$/', $hookName)){
            $cmsId = (int) $configuration['smarty']->tpl_vars['cms']->value['id'];
            $cacheId = 'iqitelementor|'.$hookName.'|'.$cmsId;
        } elseif (preg_match('/^displayProductElementor\d*$/', $hookName)){
            $productId = (int)  $configuration['smarty']->tpl_vars['product']->value['id'];
            $cacheId = 'iqitelementor|'.$hookName.'|'.$productId;
        } elseif (preg_match('/^displayBlogElementor\d*$/', $hookName)){
            $blogId = (int)  $configuration['smarty']->tpl_vars['post']->value->id_simpleblog_post;
            $cacheId = 'iqitelementor|'.$hookName.'|'.$blogId;
        }

        if (!$this->isCached($templateFile, $this->getCacheId($cacheId))){
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch('module:' . $this->name . '/views/templates/hook/' . $templateFile, $this->getCacheId($cacheId));
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
        $content = '';

        if (preg_match('/^displayHome\d*$/', $hookName)) {

            $layoutId = (int) Configuration::get('iqit_homepage_layout');
            $layout =  new IqitElementorLanding($layoutId, $this->context->language->id);

            if (Validate::isLoadedObject($layout)) {
                ob_start();
                PluginElementor::instance()->get_frontend((array) json_decode($layout->data, true));
                $content = ob_get_clean();
            }
        }
        elseif (preg_match('/^displayCMSDisputeInformation\d*$/', $hookName)){
            $cmsContent =  $configuration['smarty']->tpl_vars['cms']->value['content'];
            $strippedCms = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/is', '$1', $cmsContent);
            $strippedCms = str_replace(array("\r", "\n"), '', $strippedCms);
            $content = json_decode($strippedCms, true);

            if (json_last_error() == JSON_ERROR_NONE){
                ob_start();
                PluginElementor::instance()->get_frontend((array) $content);
                $content = ob_get_clean();
            } else {
                $content = $cmsContent;
            }
        } elseif (preg_match('/^displayProductElementor\d*$/', $hookName)){
            $productId = (int) $configuration['smarty']->tpl_vars['product']->value['id'];
            $id = IqitElementorProduct::getIdByProduct($productId);

            if ($id){
                $layout =  new IqitElementorProduct($id, $this->context->language->id);

                if (Validate::isLoadedObject($layout)) {
                    ob_start();
                    PluginElementor::instance()->get_frontend((array) json_decode($layout->data, true));
                    $content = ob_get_clean();
                }
            }
        } elseif (preg_match('/^displayBlogElementor\d*$/', $hookName)){
            $blogContent =  $configuration['smarty']->tpl_vars['post']->value->content;
            $strippedBlog = preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/is', '$1', $blogContent);
            $strippedBlog = str_replace(array("\r", "\n"), '', $strippedBlog);

            $content = json_decode($strippedBlog, true);

            if (json_last_error() == JSON_ERROR_NONE){
                ob_start();
                PluginElementor::instance()->get_frontend((array) $content);
                $content = ob_get_clean();
            } else {
                $content = $blogContent;
            }
        }


        return array(
            'content' => $content,
        );
    }

    public function checkEnvironment()
    {
        $cookie = new Cookie('psAdmin', '', (int)Configuration::get('PS_COOKIE_LIFETIME_BO'));
        return isset($cookie->id_employee) && isset($cookie->passwd) && Employee::checkPassword($cookie->id_employee, $cookie->passwd);
    }

    public function getFrontEditorToken()
    {
        return Tools::getAdminToken($this->name.(int)Tab::getIdFromClassName($this->name)
            .(is_object(Context::getContext()->employee) ? (int)Context::getContext()->employee->id :
                Tools::getValue('id_employee')));
    }

    private function installSQL()
    {
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

        unset($sql, $q, $replace);
        return true;
    }

    private function uninstallSQL()
    {
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
        unset($sql, $q, $replace);

        return true;
    }

    public function clearHomeCache() {
        $templateFile = 'module:' . $this->name . '/views/templates/hook/generated_content.tpl';
        $cacheId = 'iqitelementor|displayHome';
        $this->_clearCache($templateFile, $cacheId);
    }

    public function clearProductCache($idProduct) {
        $templateFile = 'module:' . $this->name . '/views/templates/hook/generated_content.tpl';
        $cacheId = 'iqitelementor|displayProductElementor|'.(int)$idProduct;
        $this->_clearCache($templateFile, $cacheId);
    }

    public function hookActionObjectCmsDeleteAfter($params) {
        $templateFile = 'module:' . $this->name . '/views/templates/hook/generated_content.tpl';
        $cmsId = (int) $params['object']->id_cms;
        $cacheId = 'iqitelementor|displayCMSDisputeInformation|'.$cmsId;
        $this->_clearCache($templateFile, $cacheId);
    }

    public function hookActionObjectCmsUpdateAfter($params) {
        $templateFile = 'module:' . $this->name . '/views/templates/hook/generated_content.tpl';
        $cmsId = (int) $params['object']->id_cms;
        $cacheId = 'iqitelementor|displayCMSDisputeInformation|'.$cmsId;
        $this->_clearCache($templateFile, $cacheId);
    }

    public function hookcActionObjectProductDeleteAfter($params)
    {
        if (!isset($params['object']->id)) {
            return;
        }
        $this->clearProductCache((int)$params['object']->id);

        IqitElementorProduct::deleteElement($params['object']->id);
    }

}

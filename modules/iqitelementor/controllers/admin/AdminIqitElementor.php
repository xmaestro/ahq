<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class AdminIqitElementorController extends ModuleAdminController
{
    public $name;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->className = 'IqitElementorLanding';
        $this->table = 'iqit_elementor_landing';

        $this->addRowAction('edit');
        $this->addRowAction('delete');
        parent::__construct();

        $this->_orderBy = 'id_page';
        $this->identifier = 'id_page';
        $test = array();
        $test[0] = array(
            'id' => 0,
            'name' => $this->l('No results were found for your search.')
        );

        $this->fields_options = array(
            'general' => array(
                'title' =>    $this->l('Settings'),
                'fields' =>    array(
                    'iqit_homepage_layout' => array(
                        'title' => $this->l('Homepage layout'),
                        'desc' => $this->l('Choose your homepage layout. You can create multiple layouts in list above. So you can change them fast when needed.'),
                        'cast' => 'intval',
                        'type' => 'select',
                        'list' => array_merge($test, IqitElementorLanding::getLandingPages()),
                        'identifier' => 'id'
                    ),
                ),
                'submit' => array('title' => $this->l('Save'))
            )
        );

        $this->fields_list = array(
            'id_page' => array('title' => $this->l('ID'), 'align' => 'center', 'class' => 'fixed-width-xs'),
            'title' => array('title' => $this->l('Name'), 'width' => 'auto'),
        );

        if (!$this->module->active) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminHome'));
        }
        $this->name = 'IqitElementor';
    }

    public function init()
    {
        if (Tools::isSubmit('edit' . $this->className)) {
            $this->display = 'edit';
        } elseif (Tools::isSubmit('addiqit_elementor_landing')) {
            $this->display = 'add';
        }

        parent::init();
    }


    public function postProcess()
    {
        if (Tools::isSubmit('submit' . $this->className)) {
            $returnObject = $this->processSave();
            if (!$returnObject) {
                return false;
            }

            Tools::redirectAdmin($this->context->link->getAdminLink('Admin'.$this->name) . '&id_page='.$returnObject->id .'&updateiqit_elementor_landing');
        }

        if (Tools::isSubmit('submitOptions' . $this->table)) {
            $this->module->clearHomeCache();
        }
        
        return parent::postProcess();
    }

    public function renderForm()
    {
        $landing = new IqitElementorLanding((int) Tools::getValue('id_page'));

        if ($landing->id){
            $url = $this->context->link->getAdminLink('IqitElementorEditor').'&pageType=landing&pageId=' . $landing->id;
        }
        else{
            $url = false;
        }

        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => isset($landing->id) ? $this->l('Edit layout.') : $this->l('New layout'),
                'icon' => isset($landing->id) ? 'icon-edit' : 'icon-plus-square',
            ),
            'input' => array(
                array(
                    'type' => 'hidden',
                    'name' => 'id_page',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Title of layout'),
                    'name' => 'title',
                    'required' => true,
                ),
                array(
                    'type' => 'elementor_trigger',
                    'label' => $this->l('Title of layout'),
                    'url'  => $url,
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'id_shop',
                ),
            ),
            'buttons' => array(
                'cancelBlock' => array(
                    'title' => $this->l('Cancel'),
                    'href' => (Tools::safeOutput(Tools::getValue('back', false)))
                        ?: $this->context->link->getAdminLink('Admin' . $this->name),
                    'icon' => 'process-icon-cancel',
                ),
            ),
            'submit' => array(
                'name' => 'submit' . $this->className,
                'title' => $this->l('Save and stay'),
            ),
        );


        if (Tools::getValue('title')) {
            $landing->title = Tools::getValue('title');
        }

        $helper = $this->buildHelper();
        if (isset($landing->id)) {
            $helper->currentIndex = AdminController::$currentIndex . '&id_iqit_link_block=' . $landing->id;
            $helper->submit_action = 'submitEdit' . $this->className;
        } else {
            $helper->submit_action = 'submitAdd' . $this->className;
        }

        $helper->fields_value = (array) $landing;
        $helper->fields_value['id_shop'] = $this->context->shop->id;
        return $helper->generateForm($this->fields_form);
    }

    protected function buildHelper()
    {
        $helper = new HelperForm();

        $helper->module = $this->module;
        $helper->override_folder = 'iqitelementor/';
        $helper->identifier = $this->className;
        $helper->token = Tools::getAdminTokenLite('Admin' . $this->name);
        $helper->languages = $this->_languages;
        $helper->currentIndex = $this->context->link->getAdminLink('Admin' . $this->name);
        $helper->default_form_language = $this->default_form_language;
        $helper->allow_employee_form_lang = $this->allow_employee_form_lang;
        $helper->toolbar_scroll = true;
        $helper->toolbar_btn = $this->initToolbar();

        return $helper;
    }


    public function initToolBarTitle()
    {
        $this->toolbar_title[] = $this->l('Iqit Elementor - Page builder');
    }

}

<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:27:36
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules//iqitthemeeditor/views/templates/admin/fronteditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44430272559d695b8cb9fc0-12094006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec7d219e8809b096eadad1eeb52d95180e719422' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules//iqitthemeeditor/views/templates/admin/fronteditor.tpl',
      1 => 1507233914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44430272559d695b8cb9fc0-12094006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'full_cldr_language_code' => 0,
    'iso_user' => 0,
    'full_language_code' => 0,
    'country_iso_code' => 0,
    'round_mode' => 0,
    'token' => 0,
    'baseDir' => 0,
    'currentIndex' => 0,
    'default_language' => 0,
    'link' => 0,
    'tab_modules_list' => 0,
    'js_def_vars' => 0,
    'k' => 0,
    'def' => 0,
    'js_files' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'displayBackOfficeHeader' => 0,
    'cacheStatus' => 0,
    'cacheLink' => 0,
    'editorForm' => 0,
    'previewLinks' => 0,
    'backToBo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d695b8d75f39_09634615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d695b8d75f39_09634615')) {function content_59d695b8d75f39_09634615($_smarty_tpl) {?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php echo $_smarty_tpl->tpl_vars['full_cldr_language_code']->value;?>
> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo smartyTranslate(array('s'=>'Iqit Theme Editor','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</title>
  
  <script type="text/javascript">
    var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
    var full_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_language_code']->value,'\'');?>
';
    var full_cldr_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_cldr_language_code']->value,'\'');?>
';
    var country_iso_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['country_iso_code']->value,'\'');?>
';
    var _PS_VERSION_ = '<?php echo addcslashes(@constant('_PS_VERSION_'),'\'');?>
';
    var roundMode = <?php echo intval($_smarty_tpl->tpl_vars['round_mode']->value);?>
;
    var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
    var youEditFieldFor = 'a';
    var baseAdminDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['baseDir']->value);?>
';
    var from_msg ='a';
    var token_admin_orders = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminOrders'),$_smarty_tpl);?>
';
    var token_admin_customers = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomers'),$_smarty_tpl);?>
';
    var token_admin_customer_threads = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminCustomerThreads'),$_smarty_tpl);?>
';
    var currentIndex = '<?php echo addcslashes($_smarty_tpl->tpl_vars['currentIndex']->value,'\'');?>
';
    var employee_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminEmployees'),$_smarty_tpl);?>
';
    var default_language = '<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
';
    var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModulesSf",true,array('route'=>"admin_module_catalog_post")));?>
';
    var tab_modules_list = '<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)&&$_smarty_tpl->tpl_vars['tab_modules_list']->value) {?><?php echo addslashes($_smarty_tpl->tpl_vars['tab_modules_list']->value);?>
<?php }?>';
  </script>

  <?php if (isset($_smarty_tpl->tpl_vars['js_def_vars']->value)&&is_array($_smarty_tpl->tpl_vars['js_def_vars']->value)&&count($_smarty_tpl->tpl_vars['js_def_vars']->value)) {?>
    <script type="text/javascript">
      <?php  $_smarty_tpl->tpl_vars['def'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['def']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js_def_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['def']->key => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['def']->key;
?>
      var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['def']->value);?>
;
      <?php } ?>
    </script>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)&&count($_smarty_tpl->tpl_vars['js_files']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ((@constant('_PS_ALL_THEMES_DIR_')).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
      <link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['css_uri']->value,'html','UTF-8');?>
" rel="stylesheet" type="text/css"/>
    <?php } ?>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value)) {?>
    	<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value;?>

  <?php }?>
</head>
<body class="iqit-front-editor">

<style id="iqitfronteditor-style"></style>
<style id="iqitfronteditor-custom-style"></style>

<div>
  <div id="iqitfronteditor-tools" class="loading-tools">
    <div id="iqitfronteditor-tools-loader"><div class="loader loader-1"></div></div>
    <button type="button" id="iqitfronteditor-tools-trigger" ><i class="icon-angle-left"></i></button>
    <div id="iqitfronteditor-tools-panels">

      <?php if ($_smarty_tpl->tpl_vars['cacheStatus']->value) {?>
        <div class="alert alert-warning">
          <button type="button" class="iqit-close-warning js-iqit-close-warning"><i class="icon-times"></i></button>
          <strong><?php echo smartyTranslate(array('s'=>'There is a cache enabled in your shop!','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</strong>
          <p><?php echo smartyTranslate(array('s'=>'It may cause that some options of themeeditor will be not refreshed in preview after modification.','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</p>
          <p><?php echo smartyTranslate(array('s'=>'Consider to disable it during the work with editor','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 (<a href="<?php echo $_smarty_tpl->tpl_vars['cacheLink']->value;?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Go to Performance tab','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</a>)
            <?php echo smartyTranslate(array('s'=>'Re-enable it once you finish!','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>

          </p>
        </div>
      <?php }?>

      <?php echo $_smarty_tpl->tpl_vars['editorForm']->value;?>


    </div>

    <div id="iqitfronteditor-tools-bottom">
      <div class="preview-selector">
        <?php echo smartyTranslate(array('s'=>'Preview page','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>

        <select id="preview-page">
          <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['previewLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</option>

          <?php } ?>
        </select>
      </div>
      <div class="tools">
        <div id="iqitfronteditor-save-false"></div>
        <button type="button" id="iqitfronteditor-save" class="_saved"><i
                  class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </button>
        <div id="iqitfronteditor-save-success"><i class="icon-check"></i></div>
        <div class="responsive-buttons">
          <button type="button" class="js-preview-device-switch active" data-device="desktop"><i
                    class="icon-desktop"></i></button>
          <button type="button" class="js-preview-device-switch" data-device="tablet"><i class="icon-tablet"></i>
          </button>
          <button type="button" class="js-preview-device-switch" data-device="phone"><i class="icon-mobile"></i>
          </button>
        </div>
      </div>
    </div>

  </div>
  <div id="iqitfronteditor-preview" class="loading-preview">
    <div id="iqitfronteditor-preview-loader"><div class="loader loader-1"></div></div>
    <iframe id="iqitfronteditor-iframe" src="<?php echo $_smarty_tpl->tpl_vars['previewLinks']->value['index']['link'];?>
"></iframe>
  </div>

</div>

<div id="iqitfronteditor-exit-modal">
    <div id="iqitfronteditor-exit-modal-content">
        <span class="modal-tile"><?php echo smartyTranslate(array('s'=>'You have unsaved changes, are you sure you want to exit?','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</span>
        <button type="button" id="iqitfronteditor-modal-close"><?php echo smartyTranslate(array('s'=>'Return','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </button>
        <a href="<?php echo $_smarty_tpl->tpl_vars['backToBo']->value;?>
" id="iqitfronteditor-modal-back"><?php echo smartyTranslate(array('s'=>'Exit without saving changes','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </a>
    </div>
</div>

</body>
</html>


<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:27:36
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules/iqitthemeeditor/views/templates/admin/iqitthemeeditor/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198610329859d695b8078bc1-98620654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff3c3033457b9832729388c9853307690d263ed' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules/iqitthemeeditor/views/templates/admin/iqitthemeeditor/helpers/form/form.tpl',
      1 => 1507233914,
      2 => 'file',
    ),
    '6a1538a15bd7d02143d400a4390758191b8d018f' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/administration/themes/default/template/helpers/form/form.tpl',
      1 => 1503928274,
      2 => 'file',
    ),
    '7f39661192051be2f6e1d7ad11b1caa74742dc13' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/administration/themes/default/template/helpers/form/form_group.tpl',
      1 => 1503928274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198610329859d695b8078bc1-98620654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'tabs' => 0,
    'identifier_bk' => 0,
    'identifier' => 0,
    'table_bk' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'token' => 0,
    'style' => 0,
    'form_id' => 0,
    'submit_action' => 0,
    'f' => 0,
    'fieldset' => 0,
    'key' => 0,
    'field' => 0,
    'input' => 0,
    'contains_states' => 0,
    'fields_value' => 0,
    'hint' => 0,
    'languages' => 0,
    'language' => 0,
    'defaultFormLanguage' => 0,
    'value_text' => 0,
    'name' => 0,
    'value' => 0,
    'option' => 0,
    'optiongroup' => 0,
    'field_value' => 0,
    'id_checkbox' => 0,
    'select' => 0,
    'k' => 0,
    'v' => 0,
    'categories_tree' => 0,
    'asso_shop' => 0,
    'p' => 0,
    'hookName' => 0,
    'show_cancel_button' => 0,
    'back_url' => 0,
    'btn' => 0,
    'tinymce' => 0,
    'iso' => 0,
    'ad' => 0,
    'color' => 0,
    'firstCall' => 0,
    'vat_number' => 0,
    'allowEmployeeFormLang' => 0,
    'use_textarea_autosize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d695b8b709a2_45447618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d695b8b709a2_45447618')) {function content_59d695b8b709a2_45447618($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/opt/lampp/apps/prestashop/htdocs/vendor/prestashop/smarty/plugins/function.counter.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['title'])) {?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
<script type="text/javascript">
	var helper_tabs = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['tabs']->value);?>
;
	var unique_field_id = '';
</script>
<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <ul id="iqit-config-pans" class="iqit-config-pans">
            <li class="iqit-config-tab-heading iqit-config-tab-heading-main"><a href="<?php echo $_smarty_tpl->tpl_vars['backToBoLink']->value;?>
"
                                                                                class="iqit-config-tab-close"
                                                                                id="iqit-exit-editor-btn"><i
                            class="icon-times"></i></a> <?php echo smartyTranslate(array('s'=>'Iqit Theme Editor','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</li>
            <?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['fieldset']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
 $_smarty_tpl->tpl_vars['fieldset']->index++;
 $_smarty_tpl->tpl_vars['fieldset']->first = $_smarty_tpl->tpl_vars['fieldset']->index === 0;
?>
                <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['child'])) {?>
                    <li class="iqit-config-tab">
                        <span class="iqit-config-tab-title"
                              <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>data-fieldset="#te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
"
                              data-level="1" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>
 <i
                                    class="icon-angle-right"></i></span>

                        <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>
                            <ul class="iqit-config-tab-group">
                                <li class="iqit-config-tab-heading">
                                    <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i>
                                    </button> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>
</li>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <li class="iqit-config-tab"><span class="iqit-config-tab-title"
                                                                      data-fieldset="#te-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-level="2"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                                            <i class="icon-angle-right"></i></span></li>
                                <?php } ?>
                            </ul>
                        <?php }?>

                    </li>
                <?php }?>
            <?php } ?>
        </ul>
        <div id="iqit-config-fieldsets">
            
<?php if (isset($_smarty_tpl->tpl_vars['identifier_bk']->value)&&$_smarty_tpl->tpl_vars['identifier_bk']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('identifier_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['identifier_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['identifier']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['identifier_bk'] = clone $_smarty_tpl->tpl_vars['identifier_bk'];?>
<?php if (isset($_smarty_tpl->tpl_vars['table_bk']->value)&&$_smarty_tpl->tpl_vars['table_bk']->value==$_smarty_tpl->tpl_vars['table']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('table_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['table_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['table_bk'] = clone $_smarty_tpl->tpl_vars['table_bk'];?>
<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'],'html','UTF-8');?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null) {?>configuration_form<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php if (isset(Smarty::$_smarty_vars['capture']['table_count'])&&Smarty::$_smarty_vars['capture']['table_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['table_count']);?>
<?php }?><?php }?>" class="defaultForm form-horizontal<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)&&$_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['current']->value)&&$_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['token']->value)&&$_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
<?php }?>"<?php }?> method="post" enctype="multipart/form-data"<?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <div class="iqit-config-fieldset" id="te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
            
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <div class="iqit-config-tab-heading">
            <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i></button> <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

        </div>
    <?php } else { ?>
        
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8');?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
    <?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>condition-option hidden-option<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>data-condition='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['input']->value['condition']);?>
'<?php }?>>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='title_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
            <div class="col-lg-12 title-reparator"><div class="col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div></div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {?><p class="alert alert-info col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='subtitle_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9 subtitle-reparator"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_start') {?>
        <div class="clearfix">
            <div class="col-lg-3"></div>
            <div class="background-wrapper col-lg-9 clearfix">
                <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_end') {?>
            </div>
        </div>
    <?php } else { ?>

        
						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
						<?php } else { ?>
							
    <?php if (($_smarty_tpl->tpl_vars['input']->value['type']=='import_export')) {?>
    <?php } else { ?>
        
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8');?>

														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8');?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8');?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							
    <?php }?>


							
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['descFront'])) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['input']->value['descFront'];?>
</div>
    <?php }?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='boxshadow') {?>
        <div class="box-shadow-generator js-box-shadow-generator">

            <select class="js-box-shadow-switch js-scss-ignore" data-name="switch" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_switch">
                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['switch']) {?> selected<?php }?>><?php echo smartyTranslate(array('s'=>'yes','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
            </select>

            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-box-shadow-input"/>
            <div class="box-shadow-controls js-box-shadow-controls hidden-option">

                <div class="boxshadow-control"> <?php echo smartyTranslate(array('s'=>'Color','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>

                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-scss-ignore js-shadow-color" data-name="color"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Blur','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="blur"
                                                                                         name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_blur"
                                                                                         type="number"
                                                                                         class="form-control js-scss-ignore js-shadow-blur"
                                                                                         step="1"
                                                                                         max="100" min="0"
                                                                                         value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Spread','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="spread"
                                                                                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spread"
                                                                                           type="number"
                                                                                           class="form-control js-scss-ignore js-shadow-spread"
                                                                                           step="1"
                                                                                           max="100" min="0"
                                                                                           value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Horizontal','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="horizontal"
                                                                                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_horizontal"
                                                                                               class="form-control js-scss-ignore js-shadow-horizontal"
                                                                                               type="number"
                                                                                               step="1" min="-100"
                                                                                               max="100"
                                                                                               value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Vertical','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="vertical"
                                                                                             name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_vertical"
                                                                                             class="form-control js-scss-ignore js-shadow-vertical"
                                                                                             type="number"
                                                                                             step="1" min="-100"
                                                                                             max="100"
                                                                                             value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical'],'html','UTF-8');?>
<?php }?>"/>
                </div>

                <div>
                    <div class="shadowpreview js-shadow-preview"></div>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='border') {?>
        <div class="js-border-generator border-generator row">
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-border-input"/>
            <div class="col-xs-2">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" class="js-border-type js-scss-ignore"
                        data-name="type">
                    <option value="none"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='none') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="solid"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='solid') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dotted"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dotted') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dashed"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dashed') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="groove"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='groove') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="double"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='double') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                </select>
            </div>
            <div class="col-xs-4 js-border-controls-wrapper hidden-option <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']!='none') {?>visible-inline-option<?php }?>">
                <div class="row">
            <div class="col-xs-6 border-width">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" class="js-border-width js-scss-ignore"
                        data-name="width">
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="col-xs-6 border-color">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-border-color js-scss-ignore" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"
                               data-name="color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color2') {?>
        <div class="form-group">
            <div class="col-lg-2">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='range') {?>
        <div class="form-group">
            <div class="col-lg-5">
                <div class="row">
                    <div class="input-group input-group-range">
                        <input type="range"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               data-vinput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value"
                               class="js-scss-ignore js-range-slider range-slider"/>
                        <input type="number"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value"
                               class="form-control width-70 js-range-slider-val"/>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
        <div class="form-group">
            <div class="col-lg-2">

            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='number') {?>
        <?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
        <?php }?>
        <input type="number"
               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
               id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
               value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
               class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
        />
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='font') {?>
        <?php $_smarty_tpl->tpl_vars['value_font'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?> js-typography-generator">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
            <?php }?>
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-font-input"/>
            <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['size'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['size'];?>
<?php }?>"
                   data-name="size"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size"
                   class="form-control js-font-size js-scss-ignore width-60"
                   step="1"
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
            />
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
            <?php }?>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])||!$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?> />
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"><i class="icon-bold"></i></label>
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])&&$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"><i class="icon-bold"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])||!$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic"><i class="icon-italic"></i></label>
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])&&$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"><i class="icon-italic"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])||!$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase">ABC</label>
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])&&$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase">Abc</label>
                </span>
            </span>
            <span class="input-group-addon"><i class="icon icon-arrows-h" aria-hidden="true"></i></span>
            <input type="number"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['spacing'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['spacing'];?>
<?php }?>"
                   data-name="spacing"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spacing"
                   class="form-control js-font-spacing js-scss-ignore width-60"
                   step="1"
                   min="-10"
                   max="20"
            />
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='code_textarea') {?>
        <div id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
" class="iqit-code-editor form-control"
             data-language="<?php echo $_smarty_tpl->tpl_vars['input']->value['language'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='filemanager') {?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-iframe-upload"
                                                           data-input-name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
"
                                                           type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='import_export') {?>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Import configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Upload own style or downloade our samples from below','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <div style="display:inline-block;"><input type="file" id="uploadConfig" name="uploadConfig"/></div>
        <button type="submit" class="btn btn-default btn-lg" name="importConfiguration"><span
                    class="icon icon-upload"></span> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</button>
        <hr>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Export configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Only saved changes are exported. Save first if you made any modifications.','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <a class="btn btn-default btn-lg"
           href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_link']->value,'html','UTF-8');?>
&ajax=1&action=exportThemeConfiguration"><span
                    class="icon icon-share"></span> <?php echo smartyTranslate(array('s'=>'Export to file','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='image-select') {?>
        <div class="image-select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['direction'])) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];?>
<?php }?>">

            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
                <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='') {?><?php if ($_smarty_tpl->tpl_vars['option']->index==0) {?> checked<?php }?><?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                                class="icon-check-circle image-option-check"> </i>  </span>
                    <label class="image-option-label"
                           for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"
                         class="img-responsive"/>
                </div>
            <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='preloader-select') {?>
        <div class="image-select">

        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
            <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                   name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
            <div class="image-option preloader-option"
            ">
            <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                        class="icon-check-circle image-option-check"> </i>  </span>
            <label class="image-option-label" for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
            <div class="loader-wrapper">
                <div class="loader loader-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
">Loading...</div>
            </div>
            </div>
        <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea2') {?>
        <textarea
                name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disableFront'])&&$_smarty_tpl->tpl_vars['input']->value['disableFront']) {?> readonly="readonly"<?php }?><?php }?>
                id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?>
                class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
    <?php } else { ?>
        
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value,'html','UTF-8');?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="availableSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="selectedSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8');?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8');?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '198610329859d695b8078bc1-98620654');
content_59d695b8713f79_67423877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
    <?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							
						<?php }?>
						</div>
						
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        </div>
    <?php }?>

					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
    <?php if ($_smarty_tpl->tpl_vars['formType']->value!='front') {?>
        
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8');?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
    <?php }?>

		</div>
		
        </div>
    <?php } else { ?>
        <div role="tabpanel" class="tab-panel <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id']=='iqit-general') {?>active<?php }?>"
             id="te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
            
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <div class="iqit-config-tab-heading">
            <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i></button> <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

        </div>
    <?php } else { ?>
        
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8');?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
    <?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>condition-option hidden-option<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>data-condition='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['input']->value['condition']);?>
'<?php }?>>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='title_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
            <div class="col-lg-12 title-reparator"><div class="col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div></div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {?><p class="alert alert-info col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='subtitle_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9 subtitle-reparator"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_start') {?>
        <div class="clearfix">
            <div class="col-lg-3"></div>
            <div class="background-wrapper col-lg-9 clearfix">
                <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_end') {?>
            </div>
        </div>
    <?php } else { ?>

        
						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
						<?php } else { ?>
							
    <?php if (($_smarty_tpl->tpl_vars['input']->value['type']=='import_export')) {?>
    <?php } else { ?>
        
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8');?>

														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8');?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8');?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							
    <?php }?>


							
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['descFront'])) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['input']->value['descFront'];?>
</div>
    <?php }?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='boxshadow') {?>
        <div class="box-shadow-generator js-box-shadow-generator">

            <select class="js-box-shadow-switch js-scss-ignore" data-name="switch" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_switch">
                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['switch']) {?> selected<?php }?>><?php echo smartyTranslate(array('s'=>'yes','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
            </select>

            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-box-shadow-input"/>
            <div class="box-shadow-controls js-box-shadow-controls hidden-option">

                <div class="boxshadow-control"> <?php echo smartyTranslate(array('s'=>'Color','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>

                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-scss-ignore js-shadow-color" data-name="color"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Blur','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="blur"
                                                                                         name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_blur"
                                                                                         type="number"
                                                                                         class="form-control js-scss-ignore js-shadow-blur"
                                                                                         step="1"
                                                                                         max="100" min="0"
                                                                                         value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Spread','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="spread"
                                                                                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spread"
                                                                                           type="number"
                                                                                           class="form-control js-scss-ignore js-shadow-spread"
                                                                                           step="1"
                                                                                           max="100" min="0"
                                                                                           value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Horizontal','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="horizontal"
                                                                                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_horizontal"
                                                                                               class="form-control js-scss-ignore js-shadow-horizontal"
                                                                                               type="number"
                                                                                               step="1" min="-100"
                                                                                               max="100"
                                                                                               value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Vertical','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="vertical"
                                                                                             name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_vertical"
                                                                                             class="form-control js-scss-ignore js-shadow-vertical"
                                                                                             type="number"
                                                                                             step="1" min="-100"
                                                                                             max="100"
                                                                                             value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical'],'html','UTF-8');?>
<?php }?>"/>
                </div>

                <div>
                    <div class="shadowpreview js-shadow-preview"></div>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='border') {?>
        <div class="js-border-generator border-generator row">
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-border-input"/>
            <div class="col-xs-2">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" class="js-border-type js-scss-ignore"
                        data-name="type">
                    <option value="none"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='none') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="solid"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='solid') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dotted"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dotted') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dashed"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dashed') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="groove"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='groove') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="double"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='double') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                </select>
            </div>
            <div class="col-xs-4 js-border-controls-wrapper hidden-option <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']!='none') {?>visible-inline-option<?php }?>">
                <div class="row">
            <div class="col-xs-6 border-width">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" class="js-border-width js-scss-ignore"
                        data-name="width">
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="col-xs-6 border-color">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-border-color js-scss-ignore" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"
                               data-name="color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color2') {?>
        <div class="form-group">
            <div class="col-lg-2">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='range') {?>
        <div class="form-group">
            <div class="col-lg-5">
                <div class="row">
                    <div class="input-group input-group-range">
                        <input type="range"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               data-vinput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value"
                               class="js-scss-ignore js-range-slider range-slider"/>
                        <input type="number"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value"
                               class="form-control width-70 js-range-slider-val"/>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
        <div class="form-group">
            <div class="col-lg-2">

            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='number') {?>
        <?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
        <?php }?>
        <input type="number"
               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
               id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
               value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
               class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
        />
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='font') {?>
        <?php $_smarty_tpl->tpl_vars['value_font'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?> js-typography-generator">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
            <?php }?>
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-font-input"/>
            <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['size'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['size'];?>
<?php }?>"
                   data-name="size"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size"
                   class="form-control js-font-size js-scss-ignore width-60"
                   step="1"
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
            />
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
            <?php }?>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])||!$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?> />
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"><i class="icon-bold"></i></label>
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])&&$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"><i class="icon-bold"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])||!$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic"><i class="icon-italic"></i></label>
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])&&$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"><i class="icon-italic"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])||!$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase">ABC</label>
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])&&$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase">Abc</label>
                </span>
            </span>
            <span class="input-group-addon"><i class="icon icon-arrows-h" aria-hidden="true"></i></span>
            <input type="number"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['spacing'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['spacing'];?>
<?php }?>"
                   data-name="spacing"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spacing"
                   class="form-control js-font-spacing js-scss-ignore width-60"
                   step="1"
                   min="-10"
                   max="20"
            />
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='code_textarea') {?>
        <div id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
" class="iqit-code-editor form-control"
             data-language="<?php echo $_smarty_tpl->tpl_vars['input']->value['language'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='filemanager') {?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-iframe-upload"
                                                           data-input-name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
"
                                                           type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='import_export') {?>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Import configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Upload own style or downloade our samples from below','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <div style="display:inline-block;"><input type="file" id="uploadConfig" name="uploadConfig"/></div>
        <button type="submit" class="btn btn-default btn-lg" name="importConfiguration"><span
                    class="icon icon-upload"></span> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</button>
        <hr>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Export configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Only saved changes are exported. Save first if you made any modifications.','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <a class="btn btn-default btn-lg"
           href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_link']->value,'html','UTF-8');?>
&ajax=1&action=exportThemeConfiguration"><span
                    class="icon icon-share"></span> <?php echo smartyTranslate(array('s'=>'Export to file','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='image-select') {?>
        <div class="image-select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['direction'])) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];?>
<?php }?>">

            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
                <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='') {?><?php if ($_smarty_tpl->tpl_vars['option']->index==0) {?> checked<?php }?><?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                                class="icon-check-circle image-option-check"> </i>  </span>
                    <label class="image-option-label"
                           for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"
                         class="img-responsive"/>
                </div>
            <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='preloader-select') {?>
        <div class="image-select">

        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
            <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                   name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
            <div class="image-option preloader-option"
            ">
            <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                        class="icon-check-circle image-option-check"> </i>  </span>
            <label class="image-option-label" for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
            <div class="loader-wrapper">
                <div class="loader loader-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
">Loading...</div>
            </div>
            </div>
        <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea2') {?>
        <textarea
                name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disableFront'])&&$_smarty_tpl->tpl_vars['input']->value['disableFront']) {?> readonly="readonly"<?php }?><?php }?>
                id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?>
                class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
    <?php } else { ?>
        
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value,'html','UTF-8');?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="availableSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="selectedSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8');?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8');?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '198610329859d695b8078bc1-98620654');
content_59d695b8713f79_67423877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
    <?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							
						<?php }?>
						</div>
						
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        </div>
    <?php }?>

					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
    <?php if ($_smarty_tpl->tpl_vars['formType']->value!='front') {?>
        
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8');?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
    <?php }?>

		</div>
		
        </div>
    <?php }?>

		
	<?php } ?>
</form>

        </div>
    <?php } else { ?>
        <div class="info-tabs">

            <div class="iqit-buttons">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['frontEditorLink']->value;?>
"><?php echo smartyTranslate(array('s'=>'Go to live editor','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <i
                            class="icon-angle-right"></i></a>
            </div>

            <div class="theme-info">

                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/logo-iq.png" alt="Iqit-commerce.com"/>
                <?php echo smartyTranslate(array('s'=>'Theme version','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  <?php echo $_smarty_tpl->tpl_vars['theme_version']->value;?>


                <iframe width="100%" height="180px"
                        src="//iqit-commerce.com/iframe/lastnews/news17.php?product=warehouse&version=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['theme_version']->value,'html','UTF-8');?>
"
                        style="border: none; overflow: hidden;"></iframe>
            </div>


            <ul id="iqit-config-tabs" class="iqit-config-tabs" role="tablist">
                <?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['fieldset']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
 $_smarty_tpl->tpl_vars['fieldset']->index++;
 $_smarty_tpl->tpl_vars['fieldset']->first = $_smarty_tpl->tpl_vars['fieldset']->index === 0;
?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['child'])) {?>
                        <li class="tab  <?php if ($_smarty_tpl->tpl_vars['fieldset']->first) {?> active <?php }?> ">
                            <a href="#te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
" role="tab"
                               <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>data-toggle="tab"<?php }?>  <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>class="parent-tab"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>

                            </a>

                            <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>
                                <ul>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <li class="tab tab-child"><a href="#te-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab"
                                                                     data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                                    <?php } ?>
                                </ul>
                            <?php }?>

                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
        <div class="tab-content iqit-config-panels ">
            
<?php if (isset($_smarty_tpl->tpl_vars['identifier_bk']->value)&&$_smarty_tpl->tpl_vars['identifier_bk']->value==$_smarty_tpl->tpl_vars['identifier']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('identifier_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['identifier_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['identifier']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['identifier_bk'] = clone $_smarty_tpl->tpl_vars['identifier_bk'];?>
<?php if (isset($_smarty_tpl->tpl_vars['table_bk']->value)&&$_smarty_tpl->tpl_vars['table_bk']->value==$_smarty_tpl->tpl_vars['table']->value) {?><?php $_smarty_tpl->_capture_stack[0][] = array('table_count', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
<?php $_smarty_tpl->tpl_vars['table_bk'] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['table_bk'] = clone $_smarty_tpl->tpl_vars['table_bk'];?>
<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'],'html','UTF-8');?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null) {?>configuration_form<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php if (isset(Smarty::$_smarty_vars['capture']['table_count'])&&Smarty::$_smarty_vars['capture']['table_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['table_count']);?>
<?php }?><?php }?>" class="defaultForm form-horizontal<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)&&$_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['current']->value)&&$_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['token']->value)&&$_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
<?php }?>"<?php }?> method="post" enctype="multipart/form-data"<?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <div class="iqit-config-fieldset" id="te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
            
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <div class="iqit-config-tab-heading">
            <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i></button> <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

        </div>
    <?php } else { ?>
        
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8');?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
    <?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>condition-option hidden-option<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>data-condition='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['input']->value['condition']);?>
'<?php }?>>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='title_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
            <div class="col-lg-12 title-reparator"><div class="col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div></div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {?><p class="alert alert-info col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='subtitle_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9 subtitle-reparator"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_start') {?>
        <div class="clearfix">
            <div class="col-lg-3"></div>
            <div class="background-wrapper col-lg-9 clearfix">
                <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_end') {?>
            </div>
        </div>
    <?php } else { ?>

        
						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
						<?php } else { ?>
							
    <?php if (($_smarty_tpl->tpl_vars['input']->value['type']=='import_export')) {?>
    <?php } else { ?>
        
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8');?>

														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8');?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8');?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							
    <?php }?>


							
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['descFront'])) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['input']->value['descFront'];?>
</div>
    <?php }?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='boxshadow') {?>
        <div class="box-shadow-generator js-box-shadow-generator">

            <select class="js-box-shadow-switch js-scss-ignore" data-name="switch" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_switch">
                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['switch']) {?> selected<?php }?>><?php echo smartyTranslate(array('s'=>'yes','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
            </select>

            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-box-shadow-input"/>
            <div class="box-shadow-controls js-box-shadow-controls hidden-option">

                <div class="boxshadow-control"> <?php echo smartyTranslate(array('s'=>'Color','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>

                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-scss-ignore js-shadow-color" data-name="color"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Blur','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="blur"
                                                                                         name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_blur"
                                                                                         type="number"
                                                                                         class="form-control js-scss-ignore js-shadow-blur"
                                                                                         step="1"
                                                                                         max="100" min="0"
                                                                                         value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Spread','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="spread"
                                                                                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spread"
                                                                                           type="number"
                                                                                           class="form-control js-scss-ignore js-shadow-spread"
                                                                                           step="1"
                                                                                           max="100" min="0"
                                                                                           value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Horizontal','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="horizontal"
                                                                                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_horizontal"
                                                                                               class="form-control js-scss-ignore js-shadow-horizontal"
                                                                                               type="number"
                                                                                               step="1" min="-100"
                                                                                               max="100"
                                                                                               value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Vertical','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="vertical"
                                                                                             name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_vertical"
                                                                                             class="form-control js-scss-ignore js-shadow-vertical"
                                                                                             type="number"
                                                                                             step="1" min="-100"
                                                                                             max="100"
                                                                                             value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical'],'html','UTF-8');?>
<?php }?>"/>
                </div>

                <div>
                    <div class="shadowpreview js-shadow-preview"></div>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='border') {?>
        <div class="js-border-generator border-generator row">
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-border-input"/>
            <div class="col-xs-2">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" class="js-border-type js-scss-ignore"
                        data-name="type">
                    <option value="none"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='none') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="solid"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='solid') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dotted"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dotted') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dashed"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dashed') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="groove"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='groove') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="double"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='double') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                </select>
            </div>
            <div class="col-xs-4 js-border-controls-wrapper hidden-option <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']!='none') {?>visible-inline-option<?php }?>">
                <div class="row">
            <div class="col-xs-6 border-width">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" class="js-border-width js-scss-ignore"
                        data-name="width">
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="col-xs-6 border-color">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-border-color js-scss-ignore" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"
                               data-name="color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color2') {?>
        <div class="form-group">
            <div class="col-lg-2">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='range') {?>
        <div class="form-group">
            <div class="col-lg-5">
                <div class="row">
                    <div class="input-group input-group-range">
                        <input type="range"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               data-vinput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value"
                               class="js-scss-ignore js-range-slider range-slider"/>
                        <input type="number"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value"
                               class="form-control width-70 js-range-slider-val"/>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
        <div class="form-group">
            <div class="col-lg-2">

            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='number') {?>
        <?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
        <?php }?>
        <input type="number"
               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
               id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
               value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
               class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
        />
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='font') {?>
        <?php $_smarty_tpl->tpl_vars['value_font'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?> js-typography-generator">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
            <?php }?>
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-font-input"/>
            <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['size'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['size'];?>
<?php }?>"
                   data-name="size"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size"
                   class="form-control js-font-size js-scss-ignore width-60"
                   step="1"
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
            />
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
            <?php }?>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])||!$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?> />
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"><i class="icon-bold"></i></label>
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])&&$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"><i class="icon-bold"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])||!$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic"><i class="icon-italic"></i></label>
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])&&$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"><i class="icon-italic"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])||!$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase">ABC</label>
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])&&$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase">Abc</label>
                </span>
            </span>
            <span class="input-group-addon"><i class="icon icon-arrows-h" aria-hidden="true"></i></span>
            <input type="number"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['spacing'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['spacing'];?>
<?php }?>"
                   data-name="spacing"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spacing"
                   class="form-control js-font-spacing js-scss-ignore width-60"
                   step="1"
                   min="-10"
                   max="20"
            />
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='code_textarea') {?>
        <div id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
" class="iqit-code-editor form-control"
             data-language="<?php echo $_smarty_tpl->tpl_vars['input']->value['language'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='filemanager') {?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-iframe-upload"
                                                           data-input-name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
"
                                                           type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='import_export') {?>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Import configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Upload own style or downloade our samples from below','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <div style="display:inline-block;"><input type="file" id="uploadConfig" name="uploadConfig"/></div>
        <button type="submit" class="btn btn-default btn-lg" name="importConfiguration"><span
                    class="icon icon-upload"></span> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</button>
        <hr>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Export configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Only saved changes are exported. Save first if you made any modifications.','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <a class="btn btn-default btn-lg"
           href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_link']->value,'html','UTF-8');?>
&ajax=1&action=exportThemeConfiguration"><span
                    class="icon icon-share"></span> <?php echo smartyTranslate(array('s'=>'Export to file','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='image-select') {?>
        <div class="image-select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['direction'])) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];?>
<?php }?>">

            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
                <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='') {?><?php if ($_smarty_tpl->tpl_vars['option']->index==0) {?> checked<?php }?><?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                                class="icon-check-circle image-option-check"> </i>  </span>
                    <label class="image-option-label"
                           for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"
                         class="img-responsive"/>
                </div>
            <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='preloader-select') {?>
        <div class="image-select">

        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
            <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                   name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
            <div class="image-option preloader-option"
            ">
            <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                        class="icon-check-circle image-option-check"> </i>  </span>
            <label class="image-option-label" for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
            <div class="loader-wrapper">
                <div class="loader loader-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
">Loading...</div>
            </div>
            </div>
        <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea2') {?>
        <textarea
                name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disableFront'])&&$_smarty_tpl->tpl_vars['input']->value['disableFront']) {?> readonly="readonly"<?php }?><?php }?>
                id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?>
                class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
    <?php } else { ?>
        
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value,'html','UTF-8');?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="availableSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="selectedSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8');?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8');?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '198610329859d695b8078bc1-98620654');
content_59d695b8713f79_67423877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
    <?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							
						<?php }?>
						</div>
						
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        </div>
    <?php }?>

					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
    <?php if ($_smarty_tpl->tpl_vars['formType']->value!='front') {?>
        
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8');?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
    <?php }?>

		</div>
		
        </div>
    <?php } else { ?>
        <div role="tabpanel" class="tab-panel <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id']=='iqit-general') {?>active<?php }?>"
             id="te-<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
            
		<?php $_smarty_tpl->_capture_stack[0][] = array('fieldset_name', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php if (isset(Smarty::$_smarty_vars['capture']['identifier_count'])&&Smarty::$_smarty_vars['capture']['identifier_count']) {?>_<?php echo intval(Smarty::$_smarty_vars['capture']['identifier_count']);?>
<?php }?><?php if (Smarty::$_smarty_vars['capture']['fieldset_name']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['fieldset_name']-1));?>
<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend') {?>
					
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?>
        <div class="iqit-config-tab-heading">
            <button type="button" class="iqit-config-tab-close"><i class="icon-angle-left"></i></button> <?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

        </div>
    <?php } else { ?>
        
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8');?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
    <?php }?>

				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='warning'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='success'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='error'&&$_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='input') {?>
					<div class="form-wrapper">
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        <div class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>condition-option hidden-option<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>data-condition='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['input']->value['condition']);?>
'<?php }?>>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='title_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
            <div class="col-lg-12 title-reparator"><div class="col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div></div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {?><p class="alert alert-info col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='subtitle_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9 subtitle-reparator"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_start') {?>
        <div class="clearfix">
            <div class="col-lg-3"></div>
            <div class="background-wrapper col-lg-9 clearfix">
                <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='wrapper_end') {?>
            </div>
        </div>
    <?php } else { ?>

        
						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&isset($_smarty_tpl->tpl_vars['input']->value['tab'])) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
						<?php } else { ?>
							
    <?php if (($_smarty_tpl->tpl_vars['input']->value['type']=='import_export')) {?>
    <?php } else { ?>
        
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
									<label class="control-label col-lg-3<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio') {?> required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8');?>

														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8');?>

														<?php }?>
													<?php } ?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['hint'],'html','UTF-8');?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							
    <?php }?>


							
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])) {?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php } else { ?>9<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?> col-lg-offset-3<?php }?>">
								
    <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['descFront'])) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['input']->value['descFront'];?>
</div>
    <?php }?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='boxshadow') {?>
        <div class="box-shadow-generator js-box-shadow-generator">

            <select class="js-box-shadow-switch js-scss-ignore" data-name="switch" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_switch">
                <option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['switch']) {?> selected<?php }?>><?php echo smartyTranslate(array('s'=>'yes','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
            </select>

            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-box-shadow-input"/>
            <div class="box-shadow-controls js-box-shadow-controls hidden-option">

                <div class="boxshadow-control"> <?php echo smartyTranslate(array('s'=>'Color','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>

                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-scss-ignore js-shadow-color" data-name="color"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Blur','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="blur"
                                                                                         name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_blur"
                                                                                         type="number"
                                                                                         class="form-control js-scss-ignore js-shadow-blur"
                                                                                         step="1"
                                                                                         max="100" min="0"
                                                                                         value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['blur'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Spread','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="spread"
                                                                                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spread"
                                                                                           type="number"
                                                                                           class="form-control js-scss-ignore js-shadow-spread"
                                                                                           step="1"
                                                                                           max="100" min="0"
                                                                                           value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['spread'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Horizontal','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="horizontal"
                                                                                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_horizontal"
                                                                                               class="form-control js-scss-ignore js-shadow-horizontal"
                                                                                               type="number"
                                                                                               step="1" min="-100"
                                                                                               max="100"
                                                                                               value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['horizontal'],'html','UTF-8');?>
<?php }?>"/>
                </div>
                <div class="boxshadow-control"><?php echo smartyTranslate(array('s'=>'Vertical','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <input data-name="vertical"
                                                                                             name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_vertical"
                                                                                             class="form-control js-scss-ignore js-shadow-vertical"
                                                                                             type="number"
                                                                                             step="1" min="-100"
                                                                                             max="100"
                                                                                             value="<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical']=='') {?>0<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['vertical'],'html','UTF-8');?>
<?php }?>"/>
                </div>

                <div>
                    <div class="shadowpreview js-shadow-preview"></div>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='border') {?>
        <div class="js-border-generator border-generator row">
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-border-input"/>
            <div class="col-xs-2">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_type" class="js-border-type js-scss-ignore"
                        data-name="type">
                    <option value="none"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='none') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'none','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="solid"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='solid') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'solid','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dotted"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dotted') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dotted','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="dashed"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='dashed') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'dashed','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="groove"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='groove') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'groove','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                    <option value="double"
                            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']=='double') {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'double','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</option>
                </select>
            </div>
            <div class="col-xs-4 js-border-controls-wrapper hidden-option <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['type']!='none') {?>visible-inline-option<?php }?>">
                <div class="row">
            <div class="col-xs-6 border-width">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width" class="js-border-width js-scss-ignore"
                        data-name="width">
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['width']==$_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
px
                        </option>
                    <?php }} ?>
                </select>
            </div>
            <div class="col-xs-6 border-color">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['color'],'html','UTF-8');?>
"
                               class="form-control js-border-color js-scss-ignore" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"
                               data-name="color"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color2') {?>
        <div class="form-group">
            <div class="col-lg-2">
                <div class="row">
                    <div class="input-group colorpicker-component">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='range') {?>
        <div class="form-group">
            <div class="col-lg-5">
                <div class="row">
                    <div class="input-group input-group-range">
                        <input type="range"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               data-vinput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value"
                               class="js-scss-ignore js-range-slider range-slider"/>
                        <input type="number"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value"
                               class="form-control width-70 js-range-slider-val"/>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='info_text') {?>
        <div class="form-group">
            <div class="col-lg-2">

            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='number') {?>
        <?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
        <?php }?>
        <input type="number"
               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
               id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
               value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
               class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
        />
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='font') {?>
        <?php $_smarty_tpl->tpl_vars['value_font'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?> js-typography-generator">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
            <?php }?>
            <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="js-font-input"/>
            <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['size'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['size'];?>
<?php }?>"
                   data-name="size"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size"
                   class="form-control js-font-size js-scss-ignore width-60"
                   step="1"
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
            />
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
            <?php }?>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])||!$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?> />
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unbold"><i class="icon-bold"></i></label>
                    <input data-name="bold" type="radio" class="js-font-bold js-scss-ignore" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['bold'])&&$_smarty_tpl->tpl_vars['value_font']->value['bold']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_bold"><i class="icon-bold"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])||!$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unitalic"><i class="icon-italic"></i></label>
                    <input data-name="italic" type="radio" class="js-font-italic js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['italic'])&&$_smarty_tpl->tpl_vars['value_font']->value['italic']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_italic"><i class="icon-italic"></i></label>
                </span>
            </span>
            <span class="input-group-addon single-option-switch-wrapper">
                <span class="single-option-switch">
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="0" <?php if (!isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])||!$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_unuppercase">ABC</label>
                    <input data-name="uppercase" type="radio" class="js-font-uppercase js-scss-ignore"
                           id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase"
                           value="1" <?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['uppercase'])&&$_smarty_tpl->tpl_vars['value_font']->value['uppercase']) {?> checked<?php }?>/>
                    <label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_uppercase">Abc</label>
                </span>
            </span>
            <span class="input-group-addon"><i class="icon icon-arrows-h" aria-hidden="true"></i></span>
            <input type="number"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['value_font']->value['spacing'])) {?><?php echo $_smarty_tpl->tpl_vars['value_font']->value['spacing'];?>
<?php }?>"
                   data-name="spacing"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_spacing"
                   class="form-control js-font-spacing js-scss-ignore width-60"
                   step="1"
                   min="-10"
                   max="20"
            />
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='code_textarea') {?>
        <div id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
" class="iqit-code-editor form-control"
             data-language="<?php echo $_smarty_tpl->tpl_vars['input']->value['language'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='filemanager') {?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-iframe-upload"
                                                           data-input-name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8');?>
"
                                                           type="button"><?php echo smartyTranslate(array('s'=>'Select image','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='import_export') {?>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Import configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Upload own style or downloade our samples from below','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <div style="display:inline-block;"><input type="file" id="uploadConfig" name="uploadConfig"/></div>
        <button type="submit" class="btn btn-default btn-lg" name="importConfiguration"><span
                    class="icon icon-upload"></span> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</button>
        <hr>
        <div class="title-reparator"><?php echo smartyTranslate(array('s'=>'Export configuration','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
</div>
        <div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Only saved changes are exported. Save first if you made any modifications.','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
  </div>
        <a class="btn btn-default btn-lg"
           href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_link']->value,'html','UTF-8');?>
&ajax=1&action=exportThemeConfiguration"><span
                    class="icon icon-share"></span> <?php echo smartyTranslate(array('s'=>'Export to file','mod'=>'iqitthemeeditor'),$_smarty_tpl);?>
 </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='image-select') {?>
        <div class="image-select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['direction'])) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];?>
<?php }?>">

            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
                <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='') {?><?php if ($_smarty_tpl->tpl_vars['option']->index==0) {?> checked<?php }?><?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                                class="icon-check-circle image-option-check"> </i>  </span>
                    <label class="image-option-label"
                           for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/iqitthemeeditor/views/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"
                         class="img-responsive"/>
                </div>
            <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='preloader-select') {?>
        <div class="image-select">

        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
            <input id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                   name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option']==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
            <div class="image-option preloader-option"
            ">
            <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 <i
                        class="icon-check-circle image-option-check"> </i>  </span>
            <label class="image-option-label" for="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></label>
            <div class="loader-wrapper">
                <div class="loader loader-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
">Loading...</div>
            </div>
            </div>
        <?php } ?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea2') {?>
        <textarea
                name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['formType']->value=='front') {?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disableFront'])&&$_smarty_tpl->tpl_vars['input']->value['disableFront']) {?> readonly="readonly"<?php }?><?php }?>
                id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?>
                class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
    <?php } else { ?>
        
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<script type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton') {?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) {?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8');?>
<?php }?>"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags') {?> tagify<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class') {?>
													 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value,'html','UTF-8');?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<script type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="availableSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_available[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl);?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?>" id="selectedSwap" name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
_selected[]" multiple="multiple">
													<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php } ?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='select') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php } else { ?>
										<select name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['class'],'html','utf-8');?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['id'],'html','utf-8');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8');?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])&&$_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['size'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['onchange'],'html','utf-8');?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])) {?>
												<option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'],'html','utf-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'],'html','utf-8');?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])) {?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php } ?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value=="-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label><input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled'])||(isset($_smarty_tpl->tpl_vars['value']->value['disabled'])&&$_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1) {?><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?></label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='textarea') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8');?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
											<?php } ?>
											});
											</script>
										<?php }?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])&&$_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<script type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
											});
											</script>
										<?php }?>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])&&$_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default'])=='show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8');?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl);?>
">
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='birthday') {?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="fixed-width-lg<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months') {?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php } else { ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='group') {?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '198610329859d695b8078bc1-98620654');
content_59d695b8713f79_67423877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "helpers/form/form_group.tpl" */?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8');?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='html') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['html_content'])) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								
    <?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							
						<?php }?>
						</div>
						
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start'||$_smarty_tpl->tpl_vars['input']->value['type']!='wrapper_start') {?>
        </div>
    <?php }?>

					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php } elseif (isset($_GET['controller'])) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])) {?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
    <?php if ($_smarty_tpl->tpl_vars['formType']->value!='front') {?>
        
			<?php $_smarty_tpl->_capture_stack[0][] = array('form_submit_btn', null, null); ob_start(); ?><?php echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?><?php if (Smarty::$_smarty_vars['capture']['form_submit_btn']>1) {?>_<?php echo intval((Smarty::$_smarty_vars['capture']['form_submit_btn']-1));?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php } else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php } else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['back_url']->value,'html','UTF-8');?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])) {?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php } else { ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])) {?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!='') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php } else { ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php } else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
    <?php }?>

		</div>
		
        </div>
    <?php }?>

		
	<?php } ?>
</form>

        </div>
    <?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['tinymce']->value)&&$_smarty_tpl->tpl_vars['tinymce']->value) {?>
<script type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes(@constant('_THEME_CSS_DIR_'));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"autoload_rte"
			});
		
	});
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value) {?>
<script type="text/javascript">
	$.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
	<script type="text/javascript">
		var module_dir = '<?php echo @constant('_MODULE_DIR_');?>
';
		var id_language = <?php echo intval($_smarty_tpl->tpl_vars['defaultFormLanguage']->value);?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value) {?>1<?php } else { ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php } ?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {

			$(".show_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').removeClass('hidden');
				$(this).siblings('.hide_checkbox').removeClass('hidden');
				return false;
			});
			$(".hide_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').addClass('hidden');
				$(this).siblings('.show_checkbox').removeClass('hidden');
				return false;
			});

			<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state'])) {?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

			if ($(".datetimepicker").length > 0)
			$('.datetimepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo smartyTranslate(array('s'=>'Now','js'=>1),$_smarty_tpl);?>
',
				closeText: '<?php echo smartyTranslate(array('s'=>'Done','js'=>1),$_smarty_tpl);?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo smartyTranslate(array('s'=>'Choose Time','js'=>1),$_smarty_tpl);?>
',
				timeText: '<?php echo smartyTranslate(array('s'=>'Time','js'=>1),$_smarty_tpl);?>
',
				hourText: '<?php echo smartyTranslate(array('s'=>'Hour','js'=>1),$_smarty_tpl);?>
',
				minuteText: '<?php echo smartyTranslate(array('s'=>'Minute','js'=>1),$_smarty_tpl);?>
',
			});
			<?php if (isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value)) {?>
			$(".textarea-autosize").autosize();
			<?php }?>
		});
	state_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStates'),$_smarty_tpl);?>
';
	
	</script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:27:36
         compiled from "/opt/lampp/apps/prestashop/htdocs/administration/themes/default/template/helpers/form/form_group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d695b8713f79_67423877')) {function content_59d695b8713f79_67423877($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-xs">
						<span class="title_box">
							<input type="checkbox" name="checkme" id="checkme" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
						</span>
					</th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID','d'=>'Admin.Global'),$_smarty_tpl);?>
</span></th>
					<th>
						<span class="title_box">
							<?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>

						</span>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<tr>
					<td>
						<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
						<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked"<?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
					<td>
						<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php } else { ?>
<p>
	<?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>

</p>
<?php }?>
<?php }} ?>

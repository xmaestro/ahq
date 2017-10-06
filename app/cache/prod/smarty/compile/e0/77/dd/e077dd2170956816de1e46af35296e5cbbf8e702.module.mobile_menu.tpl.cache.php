<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitmegamenu/views/templates/hook/_partials/mobile_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139799332659d691e59462b9-74142585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e077dd2170956816de1e46af35296e5cbbf8e702' => 
    array (
      0 => 'module:iqitmegamenu/views/templates/hook/_partials/mobile_menu.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '139799332659d691e59462b9-74142585',
  'function' => 
  array (
    'mobile_links' => 
    array (
      'parameter' => 
      array (
        'nodes' => 
        array (
        ),
        'first' => false,
      ),
      'compiled' => '
	<?php if (count($_smarty_tpl->tpl_vars[\'nodes\']->value)) {?><?php if (!$_smarty_tpl->tpl_vars[\'first\']->value) {?><ul><?php }?><?php  $_smarty_tpl->tpl_vars[\'node\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'node\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'nodes\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'node\']->key => $_smarty_tpl->tpl_vars[\'node\']->value) {
$_smarty_tpl->tpl_vars[\'node\']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars[\'node\']->value[\'title\'])) {?><li><?php if (isset($_smarty_tpl->tpl_vars[\'node\']->value[\'children\'])) {?><span class="mm-expand"><i class="fa fa-angle-down expand-icon" aria-hidden="true"></i><i class="fa fa-angle-up close-icon" aria-hidden="true"></i></span><?php }?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'href\'], ENT_QUOTES, \'UTF-8\');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'title\'], ENT_QUOTES, \'UTF-8\');?>
</a><?php if (isset($_smarty_tpl->tpl_vars[\'node\']->value[\'children\'])) {?><?php Smarty_Internal_Function_Call_Handler::call (\'mobile_links\',$_smarty_tpl,array(\'nodes\'=>$_smarty_tpl->tpl_vars[\'node\']->value[\'children\'],\'first\'=>false),\'139799332659d691e59462b9_74142585\',false);?>
<?php }?></li><?php }?><?php } ?><?php if (!$_smarty_tpl->tpl_vars[\'first\']->value) {?></ul><?php }?><?php }?>
',
      'nocache_hash' => '139799332659d691e59462b9-74142585',
      'has_nocache_code' => false,
      'called_functions' => 
      array (
        0 => 'mobile_links',
      ),
    ),
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'first' => 0,
    'node' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e597aee0_28365668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e597aee0_28365668')) {function content_59d691e597aee0_28365668($_smarty_tpl) {?>




<?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php Smarty_Internal_Function_Call_Handler::call ('mobile_links',$_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value,'first'=>true),'139799332659d691e59462b9_74142585',false);?>

<?php }?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "module:iqitcompare/views/templates/hook/product-miniature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92970219459d691e16745c9-72015033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9053a0dd520a39bef75969a0e9efeeae750df91b' => 
    array (
      0 => 'module:iqitcompare/views/templates/hook/product-miniature.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '92970219459d691e16745c9-72015033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e167efc3_80340821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e167efc3_80340821')) {function content_59d691e167efc3_80340821($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['id_product']->value)) {?>
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
"
   data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'iqitcompare','controller'=>'actions'),$_smarty_tpl);?>
" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'iqitcompare'),$_smarty_tpl);?>
">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<?php }?><?php }} ?>

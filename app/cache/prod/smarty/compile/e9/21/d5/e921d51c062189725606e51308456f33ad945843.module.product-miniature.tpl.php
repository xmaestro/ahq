<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "module:iqitwishlist/views/templates/hook/product-miniature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210805219959d691e1661400-90068909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e921d51c062189725606e51308456f33ad945843' => 
    array (
      0 => 'module:iqitwishlist/views/templates/hook/product-miniature.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '210805219959d691e1661400-90068909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product_attribute' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e166f848_10112017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e166f848_10112017')) {function content_59d691e166f848_10112017($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['id_product_attribute']->value)) {?>
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
"
   data-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'iqitwishlist','controller'=>'actions'),$_smarty_tpl);?>
" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'iqitwishlist'),$_smarty_tpl);?>
">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<?php }?><?php }} ?>

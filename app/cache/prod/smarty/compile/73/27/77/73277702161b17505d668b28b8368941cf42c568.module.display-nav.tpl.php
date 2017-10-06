<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitwishlist/views/templates/hook/display-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164970047359d691e576d677-12953575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73277702161b17505d668b28b8368941cf42c568' => 
    array (
      0 => 'module:iqitwishlist/views/templates/hook/display-nav.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '164970047359d691e576d677-12953575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e5772130_54333069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e5772130_54333069')) {function content_59d691e5772130_54333069($_smarty_tpl) {?>
<div class="d-inline-block">
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'iqitwishlist','controller'=>'view'),$_smarty_tpl);?>
">
        <i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'iqitwishlist'),$_smarty_tpl);?>
 (<span
                id="iqitwishlist-nb"></span>)
    </a>
</div>
<?php }} ?>

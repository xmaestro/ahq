<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:10:36
         compiled from "/opt/lampp/apps/prestashop/htdocs/administration/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40092816759d691bce69494-19071649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f150d926e6f7ae0b1de1e659b2b9b1cbaa6c1ec' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/administration/themes/default/template/content.tpl',
      1 => 1503928274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40092816759d691bce69494-19071649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691bce84661_15838577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691bce84661_15838577')) {function content_59d691bce84661_15838577($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>

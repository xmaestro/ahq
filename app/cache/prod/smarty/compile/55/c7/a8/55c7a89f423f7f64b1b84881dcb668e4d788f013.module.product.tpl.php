<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "module:iqitcountdown/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183668190459d691e175a738-52619757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c7a89f423f7f64b1b84881dcb668e4d788f013' => 
    array (
      0 => 'module:iqitcountdown/views/templates/hook/product.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '183668190459d691e175a738-52619757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'to' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e17649c4_25312660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e17649c4_25312660')) {function content_59d691e17649c4_25312660($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['to']->value)&&$_smarty_tpl->tpl_vars['to']->value!='0000-00-00 00:00:00') {?>
    <div class="price-countdown-wrapper">
        <div class="price-countdown badge-discount discount">
            <span class="price-countdown-title"><i class="fa fa-clock-o fa-spin" aria-hidden="true"></i> <span
                        class="time-txt"><?php echo smartyTranslate(array('s'=>'Time left','mod'=>'iqitcountdown'),$_smarty_tpl);?>
</span></span>
            <div class="count-down-timer" id="price-countdown-product" data-countdown-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
    </div>
<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:10:37
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77655031259d691bd924044-56977385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ad96e9b1fc3b6aea4194dd587560ee470f7764' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules/welcome/views/templates/tooltip.tpl',
      1 => 1503928398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77655031259d691bd924044-56977385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691bd928255_62929295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691bd928255_62929295')) {function content_59d691bd928255_62929295($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>

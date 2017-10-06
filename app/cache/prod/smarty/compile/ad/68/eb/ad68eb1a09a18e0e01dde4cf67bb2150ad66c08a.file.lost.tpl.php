<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:10:37
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145342224959d691bd9108c7-31927177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad68eb1a09a18e0e01dde4cf67bb2150ad66c08a' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules/welcome/views/templates/lost.tpl',
      1 => 1503928398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145342224959d691bd9108c7-31927177',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691bd91c938_99762015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691bd91c938_99762015')) {function content_59d691bd91c938_99762015($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>

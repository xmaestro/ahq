<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137448044459d691e579caa7-30011148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1507233917,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '137448044459d691e579caa7-30011148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
    'logout_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e57ac675_34483290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e57ac675_34483290')) {function content_59d691e57ac675_34483290($_smarty_tpl) {?><div id="user_info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <a
                class="account"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
                rel="nofollow"
        >
            <i class="fa fa-user" aria-hidden="true"></i>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </a> <span class="text-faded"> / </span>
        <a
                class="logout"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
        >
            <span ><?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
        </a>
    <?php } else { ?>
        <a
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
                rel="nofollow"
        ><i class="fa fa-user" aria-hidden="true"></i>
            <span><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
        </a>
    <?php }?>
</div>
<?php }} ?>

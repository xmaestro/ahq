<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitwishlist/views/templates/hook/display-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151992576359d691e5aa5d28-63609049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f1b8b385d74962f57df5c0ac1b0e91d62e4760' => 
    array (
      0 => 'module:iqitwishlist/views/templates/hook/display-modal.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '151992576359d691e5aa5d28-63609049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_form' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e5ac09d9_79273075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e5ac09d9_79273075')) {function content_59d691e5ac09d9_79273075($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['login_form']->value)) {?>
<div id="iqitwishlist-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title"><?php echo smartyTranslate(array('s'=>'You need to login or create account','mod'=>'iqitwishlist'),$_smarty_tpl);?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="login-form">
                   <p> <?php echo smartyTranslate(array('s'=>'Save products on your wishlist to buy them later or share with your friends.','mod'=>'iqitwishlist'),$_smarty_tpl);?>
</p>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl);?>

                </section>
                <hr/>
                
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl);?>

                
                <div class="no-account">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                        <?php echo smartyTranslate(array('s'=>'No account? Create one here','mod'=>'iqitwishlist'),$_smarty_tpl);?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>

<div id="iqitwishlist-notification" class="ns-box ns-effect-thumbslider ns-text-only">
    <div class="ns-box-inner">
        <div class="ns-content">
            <span class="ns-title"><i class="fa fa-check" aria-hidden="true"></i> <strong><?php echo smartyTranslate(array('s'=>'Product added to wishlist','mod'=>'iqitwishlist'),$_smarty_tpl);?>
</strong></span>
        </div>
    </div>
</div><?php }} ?>

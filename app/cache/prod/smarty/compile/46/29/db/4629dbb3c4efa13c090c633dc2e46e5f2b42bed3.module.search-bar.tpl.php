<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitsearch/views/templates/hook/search-bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149390307759d691e5783b42-17148907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4629dbb3c4efa13c090c633dc2e46e5f2b42bed3' => 
    array (
      0 => 'module:iqitsearch/views/templates/hook/search-bar.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '149390307759d691e5783b42-17148907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e578df62_86598742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e578df62_86598742')) {function content_59d691e578df62_86598742($_smarty_tpl) {?>


<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="controller" value="search">
        <div class="input-group">
            <input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" data-all-text="<?php echo smartyTranslate(array('s'=>'Show all results','mod'=>'iqitsearch'),$_smarty_tpl);?>
"
                   placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','mod'=>'iqitsearch'),$_smarty_tpl);?>
" class="form-control form-search-control">
            <button type="submit" class="search-btn">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>
<!-- /Block search module TOP -->

<?php }} ?>

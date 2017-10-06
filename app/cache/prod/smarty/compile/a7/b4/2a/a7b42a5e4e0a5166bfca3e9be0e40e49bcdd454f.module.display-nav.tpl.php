<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitcompare/views/templates/hook/display-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64769624659d691e57760a7-52787141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b42a5e4e0a5166bfca3e9be0e40e49bcdd454f' => 
    array (
      0 => 'module:iqitcompare/views/templates/hook/display-nav.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '64769624659d691e57760a7-52787141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e577a425_97408126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e577a425_97408126')) {function content_59d691e577a425_97408126($_smarty_tpl) {?>

<div class="d-inline-block">
    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'iqitcompare','controller'=>'comparator'),$_smarty_tpl);?>
">
        <i class="fa fa-random" aria-hidden="true"></i> <span><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'iqitcompare'),$_smarty_tpl);?>
 (<span
                    id="iqitcompare-nb"></span>)</span>
    </a>
</div>
<?php }} ?>

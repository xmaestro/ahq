<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/_partials/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118212910959d691e5986326-44851532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18184389c2f75b72327a98701e289fb2f351753' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/_partials/breadcrumb.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118212910959d691e5986326-44851532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iqitTheme' => 0,
    'breadcrumb' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e59a6e29_23879166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e59a6e29_23879166')) {function content_59d691e59a6e29_23879166($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width']=='inherit') {?><div class="container"><?php }?>

<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width']=='fullwidth') {?>
        <div class="container-fluid">
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width']=='fullwidth-bg') {?>
        <div class="container">
    <?php }?>
            <div class="row align-items-center">
                <div class="col">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
                            
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                                        <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </a>
                                    <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
                                </li>
                            
                        <?php } ?>
                    </ol>
                </div>
                <div class="col col-auto"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBreadcrumb'),$_smarty_tpl);?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width']=='fullwidth'||$_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width']=='fullwidth-bg') {?>
        </div>
        <?php }?>
</nav>
<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width']=='inherit') {?></div><?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitlinksmanager/views/templates/hook/iqitlinksmanager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48547033759d691e56fc543-94018265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3dcd2ceee3dd6a458a9c29f5ad0be7ff371cd7' => 
    array (
      0 => 'module:iqitlinksmanager/views/templates/hook/iqitlinksmanager.tpl',
      1 => 1507233916,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '48547033759d691e56fc543-94018265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'linkBlocks' => 0,
    'linkBlock' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e575bdb5_72470738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e575bdb5_72470738')) {function content_59d691e575bdb5_72470738($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['linkBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->key => $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['linkBlock']->value['hook']=='displayNav1'||$_smarty_tpl->tpl_vars['linkBlock']->value['hook']=='displayNav2') {?>
        <div class="block-iqitlinksmanager block-iqitlinksmanager-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links-inline d-inline-block">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlock']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url'])&&isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
                        <li>
                            <a
                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                            >
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['linkBlock']->value['hook']=='displayLeftColumn'||$_smarty_tpl->tpl_vars['linkBlock']->value['hook']=='displayRightColumn') {?>
        <div class="block block-toggle block-iqitlinksmanager block-iqitlinksmanager-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links js-block-toggle">
            <h5 class="block-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
            <div class="block-content">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlock']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url'])&&isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
                            <li>
                                <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                >
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

                                </a>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } else { ?>
        <div class="col col-md block block-toggle block-iqitlinksmanager block-iqitlinksmanager-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links js-block-toggle">
            <h5 class="block-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
            <div class="block-content">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkBlock']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url'])&&isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
                            <li>
                                <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                >
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

                                </a>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>

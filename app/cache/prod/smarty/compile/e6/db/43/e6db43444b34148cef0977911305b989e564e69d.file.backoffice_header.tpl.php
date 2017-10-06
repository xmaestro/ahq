<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:24:37
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules//iqitelementor/views/templates/hook/backoffice_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36190961059d69505880827-65150774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6db43444b34148cef0977911305b989e564e69d' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules//iqitelementor/views/templates/hook/backoffice_header.tpl',
      1 => 1507233916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36190961059d69505880827-65150774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlElementor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d695058eb489_74935496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d695058eb489_74935496')) {function content_59d695058eb489_74935496($_smarty_tpl) {?>


<script type="text/template" id="tmpl-btn-edit-with-elementor">
    <div class="form-group">
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9">
            <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo smartyTranslate(array('s'=>'Edit with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl);?>
</a>
            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>' Save page first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl);?>

            <?php }?>
        </div>
    </div>
</script>

<script type="text/template" id="tmpl-btn-edit-with-elementor-product">
    <div>

            <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo smartyTranslate(array('s'=>'Add extendend content with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl);?>
</a>
            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>' Save product first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl);?>

            <?php }?>
    </div>
</script>

<script type="text/template" id="tmpl-btn-edit-with-elementor-blog">
    <div>

        <?php if ($_smarty_tpl->tpl_vars['urlElementor']->value) {?>
            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['urlElementor']->value;?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo smartyTranslate(array('s'=>'Edit with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl);?>
</a>
        <?php } else { ?>
            <?php echo smartyTranslate(array('s'=>' Save post first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl);?>

        <?php }?>
    </div>
</script>
<?php }} ?>

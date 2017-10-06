<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules//iqitelementor/views/templates/widgets/newsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199981721159d691e178bdd3-55431739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0e683c5a925d3581843ca59d474f3bdd880d54' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules//iqitelementor/views/templates/widgets/newsletter.tpl',
      1 => 1507233916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199981721159d691e178bdd3-55431739',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e179a7e8_69563017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e179a7e8_69563017')) {function content_59d691e179a7e8_69563017($_smarty_tpl) {?>


<div class="elementor-newsletter">
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl);?>
" method="post" class="elementor-newsletter-form">
        <div class="row">
            <div class="col-12">
                <input
                        class="btn btn-primary pull-right hidden-xs-down elementor-newsletter-btn"
                        name="submitNewsletter"
                        type="submit"
                        value="<?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'iqitelementor'),$_smarty_tpl);?>
"
                >
                <input
                        class="btn btn-primary pull-right hidden-sm-up elementor-newsletter-btn"
                        name="submitNewsletter"
                        type="submit"
                        value="<?php echo smartyTranslate(array('s'=>'OK','mod'=>'iqitelementor'),$_smarty_tpl);?>
"
                >
                <div class="input-wrapper">
                    <input
                            name="email"
                            class="form-control elementor-newsletter-input"
                            type="email"
                            value=""
                            placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','mod'=>'iqitelementor'),$_smarty_tpl);?>
"
                    >
                </div>
                <input type="hidden" name="action" value="0">
            </div>
        </div>
    </form>
</div><?php }} ?>

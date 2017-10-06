<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitpopup/views/templates/hook/iqitpopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97904687759d691e5bf0b03-26025849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b166f7c8dc620ec07e6ab5438f4221ad26ff2d3e' => 
    array (
      0 => 'module:iqitpopup/views/templates/hook/iqitpopup.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '97904687759d691e5bf0b03-26025849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'txt' => 0,
    'newsletter' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e5bfe9a9_95453109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e5bfe9a9_95453109')) {function content_59d691e5bfe9a9_95453109($_smarty_tpl) {?>

<div id="iqitpopup">
<div class="iqitpopup-close">
<div class="iqit-close-checkbox">
<span class="custom-checkbox">
    <input  type="checkbox" name="iqitpopup-checkbox" id="iqitpopup-checkbox" />
    <span><i class="fa fa-check checkbox-checked"></i></span>
	<label for="iqitpopup-checkbox"><?php echo smartyTranslate(array('s'=>'Do not show again.','mod'=>'iqitpopup'),$_smarty_tpl);?>
</label>
</span>

</div>
<div class="iqit-close-popup"><span class="cross" title="<?php echo smartyTranslate(array('s'=>'Close window','mod'=>'iqitpopup'),$_smarty_tpl);?>
"></span></div>
</div>


<div class="iqitpopup-content"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</div>
<?php if ($_smarty_tpl->tpl_vars['newsletter']->value) {?>
<div class="iqitpopup-newsletter-form">
	<div class="row">
	<div class="col-xs-12">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-inline">
			<div >
				<input class="inputNew form-control grey newsletter-input" type="text" name="email" size="18" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'iqitpopup'),$_smarty_tpl);?>
" value="" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-medium iqit-btn-newsletter">
                    <span><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'iqitpopup'),$_smarty_tpl);?>
</span>
                </button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
	</div>		</div></div>
	<?php }?>
</div> <!-- #layer_cart -->
<div id="iqitpopup-overlay"></div>
<?php }} ?>

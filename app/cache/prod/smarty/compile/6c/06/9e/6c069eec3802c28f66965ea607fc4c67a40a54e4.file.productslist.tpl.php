<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:12
         compiled from "/opt/lampp/apps/prestashop/htdocs/modules//iqitelementor/views/templates/widgets/productslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142402963259d691e0f3b910-00638421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c069eec3802c28f66965ea607fc4c67a40a54e4' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/modules//iqitelementor/views/templates/widgets/productslist.tpl',
      1 => 1507233916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142402963259d691e0f3b910-00638421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'arrows_position' => 0,
    'options' => 0,
    'products' => 0,
    'product' => 0,
    'slidesToShow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e10a6445_32852301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e10a6445_32852301')) {function content_59d691e10a6445_32852301($_smarty_tpl) {?>

<section class="elementor-products">
        <?php if ($_smarty_tpl->tpl_vars['view']->value=='carousel_s'||$_smarty_tpl->tpl_vars['view']->value=='carousel') {?>
            <div class="products elementor-products-carousel slick-products-carousel products-grid slick-arrows-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arrows_position']->value, ENT_QUOTES, 'UTF-8');?>
"  data-slider_options='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['options']->value);?>
'>
        <?php } else { ?>
            <div class="products row products-grid">
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['view']->value=='grid_s') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'nbMobile'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'],'nbTablet'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'],'nbDesktop'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['desktop']), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value=='carousel_s') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'carousel'=>true), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value=='grid') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'nbMobile'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'],'nbTablet'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'],'nbDesktop'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['desktop']), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'carousel'=>true), 0);?>

            <?php }?>
        <?php } ?>
    </div>
</section>
<?php }} ?>

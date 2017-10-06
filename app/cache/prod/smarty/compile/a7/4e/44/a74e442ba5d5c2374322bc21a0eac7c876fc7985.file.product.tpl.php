<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5899603559d691e10ad529-80900860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a74e442ba5d5c2374322bc21a0eac7c876fc7985' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
    'aae9da87b3218b912a1fd3643b03bacaaf49a630' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
    '898a47e3881b4c67c3a8ae0936c6a76e7aa797c7' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/variant-links.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
    'c83b7c2d82c48036e705b33ee8319a8e34700c1e' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-btn.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
    '8cdef856ec9a548dac8aa411c781f34cc7c1b6c9' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-1.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
    '3a97d36abc2bacc8250ac1af047e470d70b3d819' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-2.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
    '6c075d4af671ef1d4e52387c6bf646512ee834e1' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-3.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5899603559d691e10ad529-80900860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carousel' => 0,
    'elementor' => 0,
    'nbMobile' => 0,
    'nbTablet' => 0,
    'nbDesktop' => 0,
    'iqitTheme' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e1651048_53133722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e1651048_53133722')) {function content_59d691e1651048_53133722($_smarty_tpl) {?>

    <div class="<?php if (isset($_smarty_tpl->tpl_vars['carousel']->value)&&$_smarty_tpl->tpl_vars['carousel']->value) {?>product-carousel<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['elementor']->value)&&$_smarty_tpl->tpl_vars['elementor']->value) {?>
    col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbMobile']->value, ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbTablet']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
    col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_p'], ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_t'], ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_d'], ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_ld'], ENT_QUOTES, 'UTF-8');?>
<?php }?>
    <?php }?> ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'], ENT_QUOTES, 'UTF-8');?>
 js-product-miniature"
                data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
                itemscope itemtype="http://schema.org/Product"

        >

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout']==1) {?>
            <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e132cc78_68378357($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-1.tpl" */?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout']==2) {?>
                <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-2.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e1573fe5_77554636($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-2.tpl" */?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout']==3) {?>
                <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-3.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e15e11a7_42687173($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-3.tpl" */?>
        <?php }?>

        </article>
    </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-1.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d691e132cc78_68378357')) {function content_59d691e132cc78_68378357($_smarty_tpl) {?>

    <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e1332da2_24479582($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */?>


<div class="product-description">

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['category_name']!='') {?>
            <div class="product-category-name text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    

    
        <h1 class="h3 product-title" itemprop="name">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8');?>
</a>
        </h1>
    

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']!='') {?>
            <div class="product-reference text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    

    
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

    

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping"
                 itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer">
                <?php if (isset($_smarty_tpl->tpl_vars['currency']->value['iso_code'])) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

                <span itemprop="price" class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

                    <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCountDown'),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php }?>
    

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
            <div class="products-variants">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                    <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '5899603559d691e10ad529-80900860');
content_59d691e15249e5_66798988($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
                <?php }?>
            </div>
        <?php }?>
    

    
        <div class="product-description-short text-muted">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...'), ENT_QUOTES, 'UTF-8');?>

        </div>
    

    
        <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e154fbf4_98320191($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */?>
    

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d691e1332da2_24479582')) {function content_59d691e1332da2_24479582($_smarty_tpl) {?>
    <div class="thumbnail-container">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
            <img
                    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_lazyload']) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['carousel']->value)&&$_smarty_tpl->tpl_vars['carousel']->value) {?>
                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                    <?php } else { ?>
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                    data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                    height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                    class="img-fluid <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_lazyload']) {?>js-lazy-product-image<?php }?> product-thumbnail-first"
            >
            <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_rollover']) {?>
                    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                        <?php if (!$_smarty_tpl->tpl_vars['image']->value['cover']) {?>
                            <img
                                data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                                class="img-fluid js-lazy-product-image product-thumbnail-second"
                            >
                            <?php break 1?>
                        <?php }?>
                    <?php } ?>
                <?php }?>
            <?php }?>
        </a>

        
            <ul class="product-flags">
                <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php } ?>
            </ul>
        

        <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value)&&!isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        
            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

                    
                        <a class="quick-view" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="<?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    
                </div>
            </div>
        
        <?php }?>

        <?php if (!isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        
            <div class="product-availability">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order']&&($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?></span>
                <span class="badge product-available mt-2"><?php echo smartyTranslate(array('s'=>'Available','d'=>'Shop.Warehouse'),$_smarty_tpl);?>

                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
                    <span class="badge product-available"><?php echo smartyTranslate(array('s'=>'Product available with different options','d'=>'Shop.Warehouse'),$_smarty_tpl);?>
</span>
                    <?php } else { ?>
                    <span class="badge product-unavailable"><?php echo smartyTranslate(array('s'=>'Out of stock','d'=>'Shop.Warehouse'),$_smarty_tpl);?>
</span>
                    <?php }?>
            </div>
        
        <?php }?>

    </div>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d691e15249e5_66798988')) {function content_59d691e15249e5_66798988($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d691e154fbf4_98320191')) {function content_59d691e154fbf4_98320191($_smarty_tpl) {?>
<div class="product-add-cart">
    <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']&&($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'], ENT_QUOTES, 'UTF-8');?>
" method="post">

            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="input-group input-group-add-cart">
                <input
                        type="number"
                        name="qty"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                        class="input-group form-control input-qty"
                        min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                >

                <button
                        class="btn btn-product-list add-to-cart"
                        data-button-action="add-to-cart"
                        type="submit"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                            disabled
                        <?php }?>
                ><i class="fa fa-shopping-bag"
                    aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

                </button>
            </div>

        </form>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="btn btn-product-list"
        > <?php echo smartyTranslate(array('s'=>'View','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

        </a>
    <?php }?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-2.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d691e1573fe5_77554636')) {function content_59d691e1573fe5_77554636($_smarty_tpl) {?>

    <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e1332da2_24479582($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */?>


<div class="product-description">

    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCountDown'),$_smarty_tpl);?>

    <?php }?>

    <div class="row extra-small-gutters justify-content-end">
        <div class="col">
            
                <?php if ($_smarty_tpl->tpl_vars['product']->value['category_name']!='') {?>
                    <div class="product-category-name text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
            

            
                <h1 class="h3 product-title" itemprop="name">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8');?>
</a>
                </h1>
            

            
                <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']!='') {?>
                    <div class="product-reference text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
            


            
                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                    <div class="products-variants">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                            <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '5899603559d691e10ad529-80900860');
content_59d691e15249e5_66798988($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
                        <?php }?>
                    </div>
                <?php }?>
            

        </div>
        <div class="col col-auto product-miniature-right">

            
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="product-price-and-shipping"
                         itemprop="offers"
                         itemscope
                         itemtype="https://schema.org/Offer">
                        <?php if (isset($_smarty_tpl->tpl_vars['currency']->value['iso_code'])) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

                        <span itemprop="price" class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

                            <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

                    </div>
                <?php }?>
            

            
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

            
        </div>
    </div>

    
        <div class="product-description-short text-muted">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...'), ENT_QUOTES, 'UTF-8');?>

        </div>
    

    
        <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e154fbf4_98320191($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */?>
    

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:13
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-3.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d691e15e11a7_42687173')) {function content_59d691e15e11a7_42687173($_smarty_tpl) {?>

    <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('overlay'=>true), 0, '5899603559d691e10ad529-80900860');
content_59d691e1332da2_24479582($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl" */?>


<div class="product-description">
    <div class="product-description-inner">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-overlay-link"></a>
    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['category_name']!='') {?>
            <div class="product-category-name text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    

    
        <h1 class="h3 product-title" itemprop="name">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8');?>
</a>
        </h1>
    

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']!='') {?>
            <div class="product-reference text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    

    
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

    

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping"
                 itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer">
                <?php if (isset($_smarty_tpl->tpl_vars['currency']->value['iso_code'])) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

                <span itemprop="price" class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

                    <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

            </div>
        <?php }?>
    

    
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
            <div class="products-variants">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                    <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '5899603559d691e10ad529-80900860');
content_59d691e15249e5_66798988($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
                <?php }?>
            </div>
        <?php }?>
    

    
        <div class="product-description-short text-muted">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...'), ENT_QUOTES, 'UTF-8');?>

        </div>
    

    
        <?php /*  Call merged included template "catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/_partials/product-miniature-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5899603559d691e10ad529-80900860');
content_59d691e154fbf4_98320191($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/_partials/product-miniature-btn.tpl" */?>
    

    
        <div class="product-functional-buttons product-functional-buttons-overlay">
            <div class="product-functional-buttons-links">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

                
                    <a class="quick-view" href="#" data-link-action="quickview" data-toggle="tooltip"
                       title="<?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
">
                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                
            </div>
        </div>
    
    </div>
</div>
<?php }} ?>

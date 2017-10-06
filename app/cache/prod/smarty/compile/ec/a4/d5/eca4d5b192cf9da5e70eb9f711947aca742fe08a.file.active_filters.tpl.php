<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:21:21
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114532925659d694412b7a68-65558809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca4d5b192cf9da5e70eb9f711947aca742fe08a' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/active_filters.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114532925659d694412b7a68-65558809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
    'clear_all_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d694412e5fa9_41374637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d694412e5fa9_41374637')) {function content_59d694412e5fa9_41374637($_smarty_tpl) {?>
<div id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
    <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="active-search-filters">
            
                <span class="active-filter-title"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
            
            <ul class="filter-blocks">
                <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
                    
                        <li class="filter-block">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo smartyTranslate(array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl);?>

                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    
                <?php } ?>
                <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)>1) {?>
                    
                        <li class="filter-block filter-block-all">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo smartyTranslate(array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

                            </a>
                        </li>
                    
                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>
<?php }} ?>

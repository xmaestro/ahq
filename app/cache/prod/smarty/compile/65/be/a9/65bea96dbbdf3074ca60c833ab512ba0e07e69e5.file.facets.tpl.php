<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:21:21
         compiled from "/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/facets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162567068659d694410f45a0-62173060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65bea96dbbdf3074ca60c833ab512ba0e07e69e5' => 
    array (
      0 => '/opt/lampp/apps/prestashop/htdocs/themes/warehouse/templates/catalog/_partials/facets.tpl',
      1 => 1507233917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162567068659d694410f45a0-62173060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facets' => 0,
    'facet' => 0,
    'filter' => 0,
    '_expand_id' => 0,
    'js_enabled' => 0,
    'active_found' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d694412a6ef5_54321190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d694412a6ef5_54321190')) {function content_59d694412a6ef5_54321190($_smarty_tpl) {?>
  <div id="search_filters">

    

    <?php  $_smarty_tpl->tpl_vars["facet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["facet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["facet"]->key => $_smarty_tpl->tpl_vars["facet"]->value) {
$_smarty_tpl->tpl_vars["facet"]->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['displayed']) {?>
        <aside class="facet clearfix">
          <h4 class="block-title facet-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></h4>
          <?php $_smarty_tpl->tpl_vars['_expand_id'] = new Smarty_variable(mt_rand(10,100000), null, 0);?>
          <?php $_smarty_tpl->tpl_vars['_collapse'] = new Smarty_variable(true, null, 0);?>
          <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?><?php $_smarty_tpl->tpl_vars['_collapse'] = new Smarty_variable(false, null, 0);?><?php }?>
          <?php } ?>

          <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType']!=='dropdown') {?>

            
              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['widgetType'], ENT_QUOTES, 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?> facet_color<?php }?>">
                <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
                  <?php if ($_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                    <li>
                      <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                          <span class="custom-checkbox"
                                <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                                    data-toggle="tooltip"
                                    data-animation="false"
                                    data-placement="top"
                                    data-original-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>"
                                <?php }?>
                          >
                            <input
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="checkbox"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                              <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                              <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                              <?php } else { ?>
                              <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="fa fa-check checkbox-checked" aria-hidden="true"></i></span>
                            <?php }?>
                          </span>
                        <?php } else { ?>
                          <span class="custom-radio">
                            <input
                              data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                              type="radio"
                              name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>
                            >
                            <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                          </span>
                        <?php }?>

                          <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                             <a
                                     href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                     class="_gray-darker search-link js-search-link"
                                     rel="nofollow"
                             >
                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                 <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                                     <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                 <?php }?>
                             </a>
                         <?php }?>
                      </label>
                    </li>
                  <?php }?>
                <?php } ?>
              </ul>
            

          <?php } else { ?>

            
              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="">
                <li>
                  <div class="facet-dropdown dropdown">
                    <a class="form-control select-title expand-more" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php $_smarty_tpl->tpl_vars['active_found'] = new Smarty_variable(false, null, 0);?>
                      <span>
                        <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars['active_found'] = new Smarty_variable(true, null, 0);?>
                          <?php }?>
                        <?php } ?>
                        <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                          <?php echo smartyTranslate(array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

                        <?php }?>
                      </span>
                        <i class="fa fa-angle-down drop-icon" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu">
                      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facet']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>

                          <a
                            rel="nofollow"
                            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                            class="select-list dropdown-item <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>current<?php }?> search-link js-search-link"
                          >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude']) {?>
                              (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                            <?php }?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                              <i class="fa fa-times" aria-hidden="true"></i>
                          <?php }?>
                          </a>

                      <?php } ?>
                    </div>
                  </div>
                </li>
              </ul>
            
          <?php }?>
        </aside>
      <?php }?>
    <?php } ?>
  </div>
<?php }} ?>

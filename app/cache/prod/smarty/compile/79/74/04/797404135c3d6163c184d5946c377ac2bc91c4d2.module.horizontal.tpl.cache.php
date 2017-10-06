<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 22:11:17
         compiled from "module:iqitmegamenu/views/templates/hook/horizontal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30013667759d691e5845f04-92807138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797404135c3d6163c184d5946c377ac2bc91c4d2' => 
    array (
      0 => 'module:iqitmegamenu/views/templates/hook/horizontal.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '30013667759d691e5845f04-92807138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_settings_v' => 0,
    'horizontal_menu' => 0,
    'tab' => 0,
    'innertab' => 0,
    'element' => 0,
    'mobile_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d691e5905990_36951929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e5905990_36951929')) {function content_59d691e5905990_36951929($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/apps/prestashop/htdocs/vendor/prestashop/smarty/plugins/modifier.replace.php';
?>
	<div id="iqitmegamenu-wrapper" class="iqitmegamenu-wrapper iqitmegamenu-all">
		<div class="container container-iqitmegamenu">
		<div id="iqitmegamenu-horizontal" class="iqitmegamenu  clearfix" role="navigation">

				<?php if (isset($_smarty_tpl->tpl_vars['menu_settings_v']->value)&&$_smarty_tpl->tpl_vars['menu_settings_v']->value['ver_position']==2) {?>

					<div class="cbp-vertical-on-top">
						<?php echo $_smarty_tpl->getSubTemplate ("module:iqitmegamenu/views/templates/hook/vertical.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('ontop'=>1), 0);?>

					</div>
				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterIqitMegamenu'),$_smarty_tpl);?>

				<nav id="cbp-hrmenu" class="cbp-hrmenu cbp-horizontal cbp-hrsub-narrow">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['horizontal_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
						<li id="cbp-hrmenu-tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id_tab'], ENT_QUOTES, 'UTF-8');?>
" class="cbp-hrmenu-tab cbp-hrmenu-tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id_tab'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['tab']->value['active_label']) {?> cbp-onlyicon<?php }?><?php if ($_smarty_tpl->tpl_vars['tab']->value['float']) {?> pull-right cbp-pulled-right<?php }?> <?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?> cbp-has-submeu<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['tab']->value['url_type']==2) {?><a role="button" class="cbp-empty-mlink nav-link"><?php } else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="nav-link" <?php if ($_smarty_tpl->tpl_vars['tab']->value['new_window']) {?>target="_blank"<?php }?>><?php }?>


								<span class="cbp-tab-title"><?php if ($_smarty_tpl->tpl_vars['tab']->value['icon_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['icon_class'])) {?> <i class="icon fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 cbp-mainlink-icon"></i><?php }?>

								<?php if (!$_smarty_tpl->tpl_vars['tab']->value['icon_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['icon'])) {?> <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="cbp-mainlink-iicon" /><?php }?><?php if (!$_smarty_tpl->tpl_vars['tab']->value['active_label']) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['tab']->value['title'],'/n','<br />'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']) {?> <i class="fa fa-angle-down cbp-submenu-aindicator"></i><?php }?></span>
								<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['label'])) {?><span class="label cbp-legend cbp-legend-main"><?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['legend_icon'])) {?> <i class="icon fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['legend_icon'], ENT_QUOTES, 'UTF-8');?>
 cbp-legend-icon"></i><?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['label'], ENT_QUOTES, 'UTF-8');?>

								</span><?php }?>
						</a>
							<?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']&&!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>
							<div class="cbp-hrsub col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['submenu_width'], ENT_QUOTES, 'UTF-8');?>
">
								<div class="cbp-hrsub-inner">
									<?php if ($_smarty_tpl->tpl_vars['tab']->value['submenu_type']==1) {?>
									<div class="cbp-tabs-container">
									<div class="row no-gutters">
									<div class="col-2">
										<ul class="cbp-hrsub-tabs-names cbp-tabs-names" >
											<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs'])) {?>
											<?php  $_smarty_tpl->tpl_vars['innertab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['innertab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['innertab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['innertab']->key => $_smarty_tpl->tpl_vars['innertab']->value) {
$_smarty_tpl->tpl_vars['innertab']->_loop = true;
 $_smarty_tpl->tpl_vars['innertab']->index++;
 $_smarty_tpl->tpl_vars['innertab']->first = $_smarty_tpl->tpl_vars['innertab']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['innertabsnames']['first'] = $_smarty_tpl->tpl_vars['innertab']->first;
?>
											<li class="innertab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->id, ENT_QUOTES, 'UTF-8');?>
 ">
												<a data-target="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->id, ENT_QUOTES, 'UTF-8');?>
-innertab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id_tab'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['innertab']->value->url_type!=2) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->url, ENT_QUOTES, 'UTF-8');?>
" <?php }?> class="nav-link <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['innertabsnames']['first']) {?>active<?php }?>">
												<?php if ($_smarty_tpl->tpl_vars['innertab']->value->icon_type&&!empty($_smarty_tpl->tpl_vars['innertab']->value->icon_class)) {?> <i class="icon fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
 cbp-mainlink-icon"></i><?php }?>
												<?php if (!$_smarty_tpl->tpl_vars['innertab']->value->icon_type&&!empty($_smarty_tpl->tpl_vars['innertab']->value->icon)) {?> <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->icon, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="cbp-mainlink-iicon" /><?php }?>
												<?php if (!$_smarty_tpl->tpl_vars['innertab']->value->active_label) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->title, ENT_QUOTES, 'UTF-8');?>
 <?php }?>
												<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->label)) {?><span class="label cbp-legend cbp-legend-inner"><?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->legend_icon)) {?> <i class="icon fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->legend_icon, ENT_QUOTES, 'UTF-8');?>
 cbp-legend-icon"></i><?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->label, ENT_QUOTES, 'UTF-8');?>

												</span><?php }?>
											</a><i class="fa fa-angle-right cbp-submenu-it-indicator"></i><span class="cbp-inner-border-hider"></span></li>
											<?php } ?>
											<?php }?>
										</ul>
									</div>

										<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs'])) {?>
										<div class="tab-content col-10">
											<?php  $_smarty_tpl->tpl_vars['innertab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['innertab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['innertab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['innertab']->key => $_smarty_tpl->tpl_vars['innertab']->value) {
$_smarty_tpl->tpl_vars['innertab']->_loop = true;
 $_smarty_tpl->tpl_vars['innertab']->index++;
 $_smarty_tpl->tpl_vars['innertab']->first = $_smarty_tpl->tpl_vars['innertab']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['innertabscontent']['first'] = $_smarty_tpl->tpl_vars['innertab']->first;
?>
											<div class="tab-pane cbp-tab-pane <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['innertabscontent']['first']) {?>active<?php }?> innertabcontent-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->id, ENT_QUOTES, 'UTF-8');?>
"
												 id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['innertab']->value->id, ENT_QUOTES, 'UTF-8');?>
-innertab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['id_tab'], ENT_QUOTES, 'UTF-8');?>
" role="tabpanel">

												<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->submenu_content)) {?>
												<div class="clearfix">
												<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['innertab']->value->submenu_content; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
													<?php echo $_smarty_tpl->getSubTemplate ("module:iqitmegamenu/views/templates/hook/_partials/submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0);?>

												<?php } ?>
												</div>
												<?php }?>

											</div>
											<?php } ?>
										</div>
										<?php }?>

									</div></div>
									<?php } else { ?>

										<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>
											<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['submenu_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
												<?php echo $_smarty_tpl->getSubTemplate ("module:iqitmegamenu/views/templates/hook/_partials/submenu_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0);?>

											<?php } ?>
										<?php }?>

									<?php }?>
								</div>
							</div>
							<?php }?>
						</li>
						<?php } ?>
					</ul>
				</nav>
		</div>
		</div>
	</div>

<div id="_desktop_iqitmegamenu-mobile">
	<ul id="iqitmegamenu-mobile">
		<?php echo $_smarty_tpl->getSubTemplate ("module:iqitmegamenu/views/templates/hook/_partials/mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('menu'=>$_smarty_tpl->tpl_vars['mobile_menu']->value), 0);?>

	</ul>
</div>
<?php }} ?>

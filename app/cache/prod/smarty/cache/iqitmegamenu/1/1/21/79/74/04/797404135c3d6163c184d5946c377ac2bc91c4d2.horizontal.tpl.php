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
    'e077dd2170956816de1e46af35296e5cbbf8e702' => 
    array (
      0 => 'module:iqitmegamenu/views/templates/hook/_partials/mobile_menu.tpl',
      1 => 1507233914,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '30013667759d691e5845f04-92807138',
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
  'unifunc' => 'content_59d691e5982074_56120663',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d691e5982074_56120663')) {function content_59d691e5982074_56120663($_smarty_tpl) {?>	<div id="iqitmegamenu-wrapper" class="iqitmegamenu-wrapper iqitmegamenu-all">
		<div class="container container-iqitmegamenu">
		<div id="iqitmegamenu-horizontal" class="iqitmegamenu  clearfix" role="navigation">

								
				<nav id="cbp-hrmenu" class="cbp-hrmenu cbp-horizontal cbp-hrsub-narrow">
					<ul>
												<li id="cbp-hrmenu-tab-1" class="cbp-hrmenu-tab cbp-hrmenu-tab-1 cbp-onlyicon ">
	<a href="http://localhost/prestashop/" class="nav-link" >

								<span class="cbp-tab-title"> <i class="icon fa fa-home cbp-mainlink-icon"></i>
								</span>
														</a>
													</li>
												<li id="cbp-hrmenu-tab-2" class="cbp-hrmenu-tab cbp-hrmenu-tab-2 ">
	<a role="button" class="cbp-empty-mlink nav-link">

								<span class="cbp-tab-title">
								Sample tab</span>
														</a>
													</li>
											</ul>
				</nav>
		</div>
		</div>
	</div>

<div id="_desktop_iqitmegamenu-mobile">
	<ul id="iqitmegamenu-mobile">
		



		<li><a href="http://localhost/prestashop/">Home</a></li><li><span class="mm-expand"><i class="fa fa-angle-down expand-icon" aria-hidden="true"></i><i class="fa fa-angle-up close-icon" aria-hidden="true"></i></span><a href="http://localhost/prestashop/3-women">Women</a>	<ul><li><span class="mm-expand"><i class="fa fa-angle-down expand-icon" aria-hidden="true"></i><i class="fa fa-angle-up close-icon" aria-hidden="true"></i></span><a href="http://localhost/prestashop/4-tops">Tops</a>	<ul><li><a href="http://localhost/prestashop/5-tshirts">T-shirts</a></li><li><a href="http://localhost/prestashop/7-blouses">Blouses</a></li></ul></li><li><span class="mm-expand"><i class="fa fa-angle-down expand-icon" aria-hidden="true"></i><i class="fa fa-angle-up close-icon" aria-hidden="true"></i></span><a href="http://localhost/prestashop/8-dresses">Dresses</a>	<ul><li><a href="http://localhost/prestashop/9-casual-dresses">Casual Dresses</a></li><li><a href="http://localhost/prestashop/10-evening-dresses">Evening Dresses</a></li><li><a href="http://localhost/prestashop/11-summer-dresses">Summer Dresses</a></li></ul></li></ul></li>

	</ul>
</div>
<?php }} ?>

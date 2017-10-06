<?php
/**
* 2016 Revolution Slider
*
*  @author    SmatDataSoft <support@smartdatasoft.com>
*  @copyright 2016 SmatDataSoft
*  @license   private
*  @version   5.1.3
*  International Registered Trademark & Property of SmatDataSoft
*/

$generalSettings = self::getSettings("general");
$role = $generalSettings->getSettingValue("role", UniteBaseAdminClassRev::ROLE_ADMIN);
$includes_globally = $generalSettings->getSettingValue("includes_globally", 'on');
$pages_for_includes = $generalSettings->getSettingValue("pages_for_includes", '');
$js_to_footer = $generalSettings->getSettingValue("js_to_footer", 'off');
$show_dev_export = $generalSettings->getSettingValue("show_dev_export", 'off');

$enable_logs = $generalSettings->getSettingValue("enable_logs", 'off');
// @codingStandardsIgnoreStart
?>

<div id="dialog_general_settings" title="<?php echo RevsliderPrestashop::$lang['general_settings'];  ?>" style="display:none;">

	<div class="settings_wrapper unite_settings_wide">
		<form name="form_general_settings" id="form_general_settings">
				<script type="text/javascript">
					g_settingsObj['form_general_settings'] = {}					
				</script>
		</form>
	</div>
<br>

<a id="button_save_general_settings" class="button-primary" original-title=""><?php echo RevsliderPrestashop::$lang['update'];  ?></a>
<span id="loader_general_settings" class="loader_round mleft_10" style="display: none;"></span>


</div>
<?php
// @codingStandardsIgnoreEnd

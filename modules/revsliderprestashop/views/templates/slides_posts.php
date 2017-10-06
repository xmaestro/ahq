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

// @codingStandardsIgnoreStart
?>
<div class="wrap settings_wrap">


    <?php $slider = RevGlobalObject::getVar('slider') ?>
    <div class="title_line">

        <div id="icon-options-general" class="icon32"></div>		

        <div class="view_title"><?php echo RevsliderPrestashop::$lang['Edit_Slides']; ?>: <?php echo $slider->getTitle() ?></div>

    </div>



    <div class="vert_sap"></div>

    <?php echo RevsliderPrestashop::$lang['multiple_sources']; ?> &nbsp;

    <?php if (RevGlobalObject::getVar('showSortBy') == true): ?> 

        <?php echo RevsliderPrestashop::$lang['Sort_by']; ?>: <?php echo RevGlobalObject::getVar('selectSortBy') ?> &nbsp; <span class="hor_sap"></span>

    <?php endif ?>



    <?php // echo $linkNewPost?>

    <span id="slides_top_loader" class="slides_posts_loader" style="display:none;"><?php echo RevsliderPrestashop::$lang['Updating_Sorting']; ?></span>


    <div class="vert_sap"></div>

    <div class="sliders_list_container">
        <?php require self::getPathTemplate("slides_list_posts"); ?>
    </div>

    <div class="vert_sap_medium"></div>

    <div class="list_slides_bottom">
        <?php // echo $linkNewPost?>
        <a class="button-primary revyellow" href='<?php echo self::getViewUrl(RevSliderAdmin::VIEW_SLIDERS); ?>' ><i class="revicon-cancel"></i><?php echo RevsliderPrestashop::$lang['Close']; ?></a>
        <a href="<?php echo RevGlobalObject::getVar('linksSliderSettings') ?>" class="button-primary revgreen"><i class="revicon-cog"></i><?php echo RevsliderPrestashop::$lang['Slider_Settings']; ?></a>
    </div>



</div>





<script type="text/javascript">

    var g_messageDeleteSlide = "<?php echo RevsliderPrestashop::$lang['Warning_Removing']; ?>";

    var g_messageChangeImage = "<?php echo RevsliderPrestashop::$lang['Select_Slide_Image']; ?>";



    jQuery(document).ready(function() {



        RevSliderAdmin.initSlidesListViewPosts("<?php echo RevGlobalObject::getVar('sliderID') ?>");



    });



</script>
<?php
// @codingStandardsIgnoreEnd
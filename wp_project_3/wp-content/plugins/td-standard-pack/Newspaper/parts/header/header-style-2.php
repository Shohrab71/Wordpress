<!--
Header style 2
-->

<?php
$header_bg_img_class = '';
if ( !td_util::get_option('tds_header_background_image') == '' ) {
    $header_bg_img_class = 'td-header-background-image';
}
?>

<div class="td-header-wrap td-header-style-2 <?php echo $header_bg_img_class ?>">
    <?php if(!td_util::get_option('tds_header_background_image') == '') { ?>
        <div class="td-header-bg td-container-wrap <?php echo td_util::get_option('td_full_header_background'); ?>"></div>
    <?php } ?>

    <div class="td-header-top-menu-full td-container-wrap <?php echo td_util::get_option('td_full_top_bar'); ?>">
        <div class="td-container td-header-row td-header-top-menu">
            <?php td_api_top_bar_template::_helper_show_top_bar() ?>
        </div>
    </div>

    <div class="td-header-menu-wrap-full td-container-wrap <?php echo td_util::get_option('td_full_menu'); ?>">
        <?php
            $menuSearchClass = '';
            if(!td_util::get_option('tds_search_placement') == '')
                $menuSearchClass = 'td-header-menu-no-search';
        ?>

        <div class="td-header-menu-wrap td-header-gradient <?php echo $menuSearchClass ?>">
            <div class="td-container td-header-row td-header-main-menu">
                <?php require_once('header-menu.php');?>
            </div>
        </div>
    </div>

    <div class="td-banner-wrap-full td-container-wrap <?php echo td_util::get_option('td_full_header'); ?>">
        <div class="td-container td-header-row td-header-header">
            <div class="td-header-sp-logo">
                <?php require_once('logo-h1.php');?>
            </div>
            <?php if (td_util::is_ad_spot_enabled('header')) { ?>
                <div class="td-header-sp-recs">
                    <?php require_once('ads.php'); ?>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
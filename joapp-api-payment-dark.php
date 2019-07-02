<?php

/*
  Plugin Name: قالب تیره پرداخت JoApp API
  Plugin URI: http://joapp.ir/wordpress
  Description: با این افزونه بخش پرداخت JoApp API با تم تیره خواهد بود
  Version: 1.0
  Author: SEPAHAN DATA TOOLS Co.
  Author URI: http://bejo.ir/
  Copyright: 2018 joapp.ir & bejo.ir
 */
//joapp_api_action_get_shipping_methods    JOAPP_RESULT     ----------
//joapp_api_action_get_posts               JOAPP_RESULT     ----------
//joapp_api_action_get_post                JOAPP_RESULT     ----------
//joapp_api_action_get_about               JOAPP_RESULT     ----------
//joapp_api_action_get_comment             JOAPP_RESULT     ----------
//joapp_api_action_get_woo_categories      JOAPP_RESULT     ----------
//joapp_api_action_get_user                JOAPP_RESULT     ----------
//joapp_api_action_get_user_shipping       JOAPP_RESULT     ----------
//joapp_api_action_posts_result            JOAPP_RESULT     ----------
//joapp_api_action_get_woo_filters         JOAPP_RESULT     ----------
//joapp_api_action_get_category_index      JOAPP_RESULT     ----------
//joapp_api_action_open_pay_woo            JOAPP_RESULT     ----------
//joapp_api_action_get_author_index        JOAPP_RESULT     ----------
//joapp_api_action_get_page_index          JOAPP_RESULT     ----------
//joapp_api_action_submit_comment          ------------     JOAPP_DATA
//joapp_api_action_register_user           JOAPP_RESULT     ----------
//joapp_api_action_payment_template        JOAPP_RESULT     ----------
//
//------------------------------INITS(THIS)---------------------------
//joapp_api_action_author_init             THIS             ----------
//joapp_api_action_attachment_init         THIS             ----------
//joapp_api_action_category_init           THIS             ----------
//joapp_api_action_comment_init            THIS             ----------
//joapp_api_action_post_init               THIS             ----------
//joapp_api_action_tag_init                THIS             ----------
//
//------------------------------VIEW & SAVE for admin-----------------
//joapp_api_action_view_about && joapp_api_action_save_about
//joapp_api_action_view_admin_menu
//joapp_api_action_view_tab_connection && joapp_api_action_save_tab_connection
//joapp_api_action_view_tab_posts && joapp_api_action_save_tab_posts
//joapp_api_action_view_tab_store && joapp_api_action_save_tab_store
//joapp_api_action_view_tab_custom_field
//joapp_api_action_view_tab_pushe
//joapp_api_action_view_edit_menus
//joapp_api_action_view_edit_tags


add_action("joapp_api_action_payment_template","joapp_api_action_payment_template_func");
function joapp_api_action_payment_template_func(){
    global $joapp_result;
    $joapp_result = dirname(__FILE__) . '/payment/templates/page.php';
}

add_action("joapp_api_action_view_admin_menu","joapp_api_action_view_admin_menu_func");
function joapp_api_action_view_admin_menu_func(){
    //add_submenu_page("joapp-api", "قالب تیره پرداخت", "قالب تیره پرداخت", "manage_options",'admin.php?page=joapp_api_payment_dark');
    add_submenu_page( 'joapp-api', "قالب تیره پرداخت",  "قالب تیره پرداخت" , 'manage_options', 'joapp_api_template_dark_init', "joapp_api_template_dark_init" );
}

include_once __DIR__.'/init.php';


?>

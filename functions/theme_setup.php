<?php
    function theme_setup(){
        add_theme_support('title-tag');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        register_nav_menus(array(
            'Main_Menu'=>'منو اصلی',
            'Footer_one'=>'منو اول فوتر',
            'Footer_two'=>'دسترسی سریع',
            'Footer_three'=>'منوی لینک های مفید',
            'Footer_Social'=>'منو شبکه های اجتماعی',
        ));
    }
    add_action("after_setup_theme","theme_setup");
?>
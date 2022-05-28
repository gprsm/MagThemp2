<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="utf-8">
    <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php bloginfo('name'); ?>
    </title>
   <?php wp_head(); ?>
</head>

<body class="fixed-sn homepage-v1">
<header>
	<?php
	if ( wp_is_mobile() ) {?>
    <nav class="navbar-light fixed-top scrolling-navbar white navbar navbar-expand-md rtl">
		<?php }else{ ?>
        <nav class="navbar-light fixed-top scrolling-navbar white navbar navbar-expand-md rtl">
			<?php } the_custom_logo(); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>
	        <?php
	        if ( wp_is_mobile() ) {?>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse rtl" id="navbarSupportedContent">
	        <?php
	        $args = array(
		        'menu_class' => 'navbar-nav ml-auto rtl main_menu',
		        'menu' => 'Main_Menu',
		        'container' => 'ul',
                'add_li_class'  => 'nav-item',
		        'depth' => '1',
		        "link_class" => "nav-link "
	        );
            wp_nav_menu( $args );
	        ?>
        </div>
	        <?php }else{ ?>
                <div class="main-menu mr-3 mb-0">
                    <div class="menu-items">
				        <?php wp_nav_menu(array(
					        'theme_location' => 'Main_Menu',
					        'depth' => '3',
				        )); ?>
                    </div>
                </div>
	        <?php }
	        ?>
            <ul data-test="navbar-nav" class="navbar-nav mr-auto">
	            <?php if(is_active_sidebar('h_img')){
		            dynamic_sidebar('h_img');
	            } ?>
            </ul>
    </nav>
    <!-- Navbar -->
</header>
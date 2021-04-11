<?php 
/**
 * Header layout 2 for SKT Exceptiona Lite
 *
 * Displays The Header layout 2. This file is imported in header.php
 *
 * @package SKT Exceptiona Lite
 * 
 * @since SKT Exceptiona Lite 1.0
 */
global $complete;?>

<!--HEADER STARTS-->

<div class="header type2">
  <div class="center">
    <div class="head_inner"> 
      <!--LOGO START-->
      <div class="logo">
        <?php if(!empty($complete['logo_image_id']['url'])){   ?>
        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $complete['logo_image_id']; echo $logo['url']; ?>" /></a> <span class="desc"><?php echo bloginfo('description'); ?></span>
        <?php }else{ ?>
        <?php if ( is_home() ) { ?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) );?>">
          <?php bloginfo('name'); ?>
          </a></h1>
        <span class="desc"><?php echo bloginfo('description'); ?></span>
        <?php }else{ ?>
        <h2><a href="<?php echo esc_url( home_url( '/' ) );?>">
          <?php bloginfo('name'); ?>
          </a></h2>
        <span class="desc"><?php echo bloginfo('description'); ?></span>
        <?php } ?>
        <?php } ?>
      </div>
      <!--LOGO END-->
      
      <div class="header-content-right">
      
        <!--MENU START--> 
        <!--MOBILE MENU START--> 
        <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a> 
        <!--MOBILE MENU END-->
        
        <div id="topmenu" class="<?php if ('header' == $complete['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
          <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </div>
        <!--MENU END--> 
        
      </div>
    </div>
  </div>
</div>
<!--HEADER ENDS-->
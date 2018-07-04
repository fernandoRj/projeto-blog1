<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title>9Mobile - noticias e guias de manutenção para celulares e Smartphone </title>    
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri ();?>/img/five2.ico">
<link rel="alternate" href="https://9mobile.com.br/" hreflang="pt-br" />
<link rel="alternate" href="https://9mobile.com.br/" hreflang="x" /> 
<meta name="google-site-verification" content="PM2EFYih-uywxGMBtdcA8PoCc7bnshifFBHAYzbICt0" />
<meta name="google-site-verification" content="PM2EFYih-uywxGMBtdcA8PoCc7bnshifFBHAYzbICt0" /> 

<meta name="9Mobile é um blog para manter-lhe informado sobre todas as noticias do mundo dos Smartfones,agregando valores e conhecimento técnico através dos tutoriais de manutenção para celulares e Smartphone" />
    

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<!--Main Navigation-->


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
	<div class="container">
	
        <a class="navbar-brand" href="https://9mobile.com.br/"><strong>9Mobile</strong></a>
	
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
		
             <?php
   wp_nav_menu([
     'menu'            => 'top',
     'theme_location'  => 'top',
     'container'       => 'div',
     'container_id'    => 'navbarSupportedContent',
     'container_class' => 'navbar-collapse collapse ',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav ml-auto',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>


		</div>
    </nav>

	
	
	

           





                

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>


	

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>


<script src="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/wp-content/themes/dazzling/custom.js"></script>

<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css" />




<?php 
  $current_user = wp_get_current_user();
  $v_username=$current_user->user_login."color_background";
	$color_background = get_option($v_username);
  if($color_background===false){
    $color_background = "#00BEA1";
  }
 ?>
</head>

<body <?php body_class(); ?> style="background-color: <?php echo $color_background ?>">
<div id="page" class="hfeed site">

	<nav class="navbar navbar-default" role="navigation" style="background-color: <?php echo $color_background ?>">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
			    <span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
				<div id="logo" class="<?php echo (is_home()?"header_home":''); ?>">
					<a href="/">&nbsp;</a>

				</div><!-- end of #logo -->


						
			</div>
				<?php //dazzling_header_menu(); ?>
				<div id="navbar" class="collapse navbar-collapse navbar-ex1-collapse">
					<ul id="menu-all-pages" class="nav navbar-nav">
					<li id="menu-item-1923" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a title="INFORMATE" href="http://96.126.102.69/informate/">Infórmate</a>
					</li>
					<li id="menu-item-1922" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1922">
						<a title="Autoconocimiento" href="http://96.126.102.69/autodescubrimiento/">Autoconocimiento</a>
					</li>
					<li id="menu-item-1921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1921">
						<a title="TIPS" href="/tips/">Tips</a>
						<!--
						<ul class="submenu">
							<li><a href="manejando-tus-emociones">Manejando tus emociones</a> </li>
							<li>Consejos de estudio</li>
							<li>Activa tu cuerpo!</li>
							<li>Cuida el medio ambiente </li>
							<li>Amistad saludable</li>
							<li>Relaciones de pareja </li>
							<li>El buen dormir </li>
							<li>Persigue tus sueños</li>
							<li>Ama tu cuerpo </li>
							<li>Alimentación saludable </li>
							<li>Reduce tu estrés </li>
							<li>Supera la pera! </li>
							<li>Relaciones familiares</li>
							<li>Ciudadanía 2.0</li>
							<li>Adicciones  </li>
							<li>Resiliencia</li>
						</ul>-->
					</li>
<li id="menu-item-1926" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926"><a title="CHAT" href="http://96.126.102.69/chat-2/">Chat</a></li>
<li id="menu-item-1920" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1920"><a title="PERFIL" href="http://96.126.102.69/perfil/">Perfil</a></li>
</ul></div>
		</div>
	</nav><!-- .site-navigation -->

        <div class="top-section">
		<?php dazzling_featured_slider(); ?>
		<?php dazzling_call_for_action(); ?>
        </div>
        <div id="content" class="site-content container">

            <div class="container main-content-area"><?php

                global $post;
                if(isset($post)){
	                if( get_post_meta($post->ID, 'site_layout', true) ){
	                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
	                }
	                else{
	                        $layout_class = of_get_option( 'site_layout' );
	                }
	                if( is_home() && is_sticky( $post->ID ) ){
	                        $layout_class = of_get_option( 'site_layout' );
	                }                	
                }
                ?>
                <div class="row <?php echo $layout_class; ?> m-0">




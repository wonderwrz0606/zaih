<?php
/**
 *	The template for displaying the header.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$img_logo = get_theme_mod( 'illdy_img_logo', esc_url( get_template_directory_uri() . '/layout/images/header-logo.png' ) );
$text_logo = get_theme_mod( 'illdy_text_logo', __('Illdy', 'illdy') );
$jumbotron_general_image = get_theme_mod( 'illdy_jumbotron_general_image', esc_url( get_template_directory_uri() . '/layout/images/front-page/front-page-header.png' ) );
$preloader_enable = get_theme_mod( 'illdy_preloader_enable', 1 );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php if( $preloader_enable == 1 ): ?>
			<div class="pace-overlay"></div>
		<?php endif; ?>
		<header id="header" class="<?php echo 'header-blog'; ?>" style="background-image: url('<?php if( is_front_page() ): echo ( ( $jumbotron_general_image ) ? esc_url( $jumbotron_general_image ) : '' ); else: echo esc_url( $jumbotron_general_image ); endif; ?>');">
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<?php if( $img_logo ): ?>
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><img src="<?php echo esc_url( $img_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
							<?php else: ?>
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo illdy_sanitize_html( $text_logo ); ?></a>
							<?php endif; ?>
						</div><!--/.col-sm-2-->
						<div class="col-sm-10">
							<nav class="header-navigation">
								<ul class="clearfix">
									<?php
									wp_nav_menu( array(
										'theme_location'	=> 'primary-menu',
										'menu'				=> '',
										'container'			=> '',
										'container_class'	=> '',
										'container_id'		=> '',
										'menu_class'		=> '',
										'menu_id'			=> '', 
										'items_wrap'		=> '%3$s',
										'walker'			=> new MTL_Extended_Menu_Walker(),
										'fallback_cb'		=> 'MTL_Extended_Menu_Walker::fallback'
									) );
									?>
								</ul><!--/.clearfix-->
							</nav><!--/.header-navigation-->
							<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
						</div><!--/.col-sm-10-->
					</div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.top-header-->
			<nav class="responsive-menu">
				<ul>
					<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary-menu',
						'menu'				=> '',
						'container'			=> '',
						'container_class'	=> '',
						'container_id'		=> '',
						'menu_class'		=> '',
						'menu_id'			=> '', 
						'items_wrap'		=> '%3$s',
						'walker'			=> new MTL_Extended_Menu_Walker(),
						'fallback_cb'		=> 'MTL_Extended_Menu_Walker::fallback'
					) );
					?>
				</ul>
			</nav><!--/.responsive-menu-->
			<?php
			 
                        if( is_front_page() ):
				get_template_part( 'sections/front-page', 'bottom-header' );
			else:
				get_template_part( 'sections/blog', 'bottom-header' );
			endif;
                        
                        //get_template_part( 'sections/blog', 'bottom-header' );
			?>
		</header><!--/#header-->
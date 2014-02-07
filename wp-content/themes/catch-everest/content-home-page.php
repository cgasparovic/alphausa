<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Blog Template
 *
   Template Name: Home
 *
 * The template for Blog
 *
 * @package Catch Everest
 * @since Catch Everest 0.2
 */
 
get_header(); ?>

		<!--<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">-->
            	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!--<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>--><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'catcheverest' ), 'after' => '</div>' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'catcheverest' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

		<!--	</div>--><!-- #content .site-content -->
		<!--</div>--><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
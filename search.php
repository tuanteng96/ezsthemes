<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tiah
 */

get_header();
?>

<main class="bg-main-2">
	<?php get_template_part( 'template-parts/breadcrumbs', '' ); ?>
	<h1 class="d-none"><?php wp_title(); ?></h1>
   	<section id="primary" class="content-area">
   		<main id="main" class="site-main page-defure pd-main container">
   			<div class="row">
   				<div class="col-12">
   					<?php if ( have_posts() ) : ?>
   						<header class="page-header">
   							<h1 class="page-title">
   								<?php
   								printf( esc_html__( 'Search results for: %s', 'tiah' ), '<span>' . get_search_query() . '</span>' );
   								?>
   							</h1>
   						</header>
   						<div class="row">
   						<?php
   						while ( have_posts() ) :
   							the_post(); ?>
   							<div class="col-lg-3 col-md-4 mb-30">
   								<?php get_template_part( 'template-parts/content', 'news' ); ?>
   							</div>
   						<?php endwhile; ?>
   						</div>
   						<?php the_posts_navigation(); ?>
   					<?php
   					else :
   						get_template_part( 'template-parts/content', 'none' );
   					endif;
   					?>
   					<?php wp_reset_postdata(); ?>
   				</div>
   			</div>
   		</main>
   	</section>
</main>

<?php
get_footer();

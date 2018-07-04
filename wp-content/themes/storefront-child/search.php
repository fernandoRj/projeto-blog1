<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>

<div class="row">
<div class="col-8">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>
</div>

	
<div class="barra-lateral col-md-4 col-sm-12 col-12" id="teste123">
<?php get_sidebar()?>
</div>
</div>
<?php get_footer('blog');?>



<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template name: Home
 * @package Matheus Baumgart
 */

get_header(); ?>

<div id="content" class="site-content">

	<div id="primary" class="content-area col-6">
		<main id="main" class="site-main home" role="main">

		<?php 
		if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
		elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
		else { $paged = 1; }

		/* You can change the number of posts showing in the home page here. */
		query_posts('posts_per_page=8&paged=' . $paged); 


			while ( have_posts() ) : the_post(); ?>
			    <div class="post-item">
						<div class="post-info">
							<h3 class="post-title">
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
								<span class="separator">·</span>
								<span><?php matheus_baumgart_posted_on(); ?></span>
								<span class="separator">·</span>
								<span class="cat">
									<?php
										$categories = get_the_category();
										$separator = ' ';
										$output = '';
										if($categories){
											foreach($categories as $category) {
											$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
										}
											echo trim($output, $separator);
										}
									?>
								</span>
							</h3>
						</div>

					</div>
		<?php endwhile; ?>

		<!-- then the pagination links -->
		<?php kriesi_pagination(); ?>

		<div class="side"><?php get_sidebar(); ?></div>

		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>

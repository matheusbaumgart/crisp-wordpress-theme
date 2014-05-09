<?php
/**
 * @package Matheus Baumgart
 */
?>

<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ' ', 'matheus-baumgart' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ' ', 'matheus-baumgart' ) );

			if ( ! matheus_baumgart_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '%1$s %2$s', 'matheus-baumgart' );
				} else {
					$meta_text = __( '%1$s', 'matheus-baumgart' );
				}

			} // end check for categories on this blog

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	<header class="entry-header">
<div class="entry-meta">
			<?php matheus_baumgart_posted_on(); ?> <span class="separator">·</span> <span class="cat"><?php printf($category_list); ?></span>
		</div><!-- .entry-meta -->

		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'matheus-baumgart' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'matheus-baumgart' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

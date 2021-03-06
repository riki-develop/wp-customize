<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package customtheme
 */

get_header();
?>

	<main id="primary" class="site-main col-md-8">
		<h1>商品詳細</h1>
		<p>商品名：<?php the_title(); ?></p>

		<?php $termes = get_the_terms(get_the_ID(), 'genre'); ?>
		<?php if ($termes): ?>
			<ul>
				<?php foreach ($termes as $terme): ?>
					<li><a href="<?php echo get_term_link($terme); ?>"><?php echo esc_html($terme->name); ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'customtheme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'customtheme' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
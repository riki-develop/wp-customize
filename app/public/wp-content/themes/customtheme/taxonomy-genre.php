<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package customtheme
 */

get_header();
?>

	<main id="primary" class="site-main col-md-8">

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1>商品一覧</h1>
            <h2><?php the_archive_title(); ?></h2>
		</header><!-- .page-header -->

		<ul>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>

			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

			<?php
				endwhile;
			?>
		</ul>

		<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

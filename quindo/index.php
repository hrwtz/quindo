<?php get_header(); ?>

	<div class="row">
		<div class="cell well">
			<div class="g">
				<div class="g-b g-b--center">
	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

							<div class="entry">
								<?php the_content(); ?>
							</div>

							<footer class="postmetadata">
								<?php the_tags('Tags: ', ', ', '<br />'); ?>
								Posted in <?php the_category(', ') ?> | 
								<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
							</footer>

						</article>

					<?php endwhile; ?>

					<?php else : ?>

						<h2>Not Found</h2>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
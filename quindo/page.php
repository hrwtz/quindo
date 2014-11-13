<?php get_header(); ?>

	<div class="row">
		<div class="cell well">
			<div class="g">
				<div class="g-b g-b--center">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
						<article class="post" id="post-<?php the_ID(); ?>">

							<h2><?php the_title(); ?></h2>

							<div class="entry">

								<?php the_content(); ?>

								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

							</div>

							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

						</article>
						
						<?php comments_template(); ?>

						<?php endwhile; endif; ?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
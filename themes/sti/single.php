<?php get_header() ?>

	<div id="content" class="container-fluid">
		<div id="main" role="main">

			<?php while (have_posts()) : the_post() ?>

				<article>
					<div class="meta">
						<span class="author">
							<?php the_author() ?>
						</span>
						<time class="updated" datetime="<?php the_time('c') ?>" >
							<?php the_time('F j, Y') ?>
						</time>
					</div>
					<header class="entry-header">
						<h1><?php the_title() ?></h1>
					</header>
					<?php if (get_featured_image()): ?>
						<div class="featured-image">
							<img src="<?php the_featured_image('full') ?>" alt="">
						</div>
					<?php endif ?>
					<div class="entry-content">
						<?php the_content() ?>
					</div>
					<div class="share">
						<?php
							$permalink = get_permalink();
							$description = get_field('social_description','option');
						?>
						<span>Share This Post:</span>
						<a class="fb" data-platform="Facebook" data-permalink="<?= esc_attr($permalink) ?>" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($permalink) ?>"><span>Facebook</span></a>
						<a class="tw" data-platform="Twitter"  data-permalink="<?= esc_attr($permalink) ?>" target="_blank" href="https://twitter.com/intent/tweet?url=<?= urlencode($permalink) ?>&amp;text=<?= urlencode($description) ?>"><span>Twitter</span></a>
						<a class="ml" data-platform="Email"    data-permalink="<?= esc_attr($permalink) ?>" href="mailto:?subject=&body=<?= rawurlencode($description."\n\n".$permalink) ?>"><span>Email</span></a>
					</div>
					<div class="authordeets">
						<div class="author">
							<?php the_author() ?>
						</div>
						<div class="bio">
							<?= get_the_author_meta('description') ?>
						</div>
					</div>
				</article>

			<?php endwhile ?>

		</div>
		<?php get_template_part('sections/contact-us') ?>
	</div>

<?php get_footer() ?>
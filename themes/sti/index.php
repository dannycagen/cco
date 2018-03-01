<?php get_header() ?>

	<div id="content" class="blog container-fluid">
        
		<div id="main" role="main">

			<?php while (have_posts()) : the_post() ?>

				<article>
					<header class="entry-header">
						<h1><?php the_title() ?></h1>
					</header>
					<div class="entry-content">
						<?php the_content() ?>
					</div>
				</article>

			<?php endwhile ?>

		</div>
		<?php get_template_part('sections/contact-us') ?>
	</div>

<?php get_footer() ?>
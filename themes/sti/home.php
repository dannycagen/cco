<?php get_header() ?>

	<div id="content" class="container-fluid">
		<div id="main" role="main">

			<?php get_template_with('sections', array( 'post' => get_option('page_for_posts') )) ?>
			<?php get_template_part('sections/contact-us') ?>

		</div>
	</div>

<?php get_footer() ?>
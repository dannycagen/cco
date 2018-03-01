<?php get_header() ?>

	<div id="content" class="container-fluid">
		<div id="main" role="main">
<?php  echo the_language_switcher()  ?>
			<?php get_template_part('sections') ?>
			

		</div>
	</div>

<?php get_footer() ?>
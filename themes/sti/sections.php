
<?php while (have_rows('sections', $post)) : the_row() ?>

	<?php if (get_row_layout() === 'herospace'): ?>
		<?php get_template_part('sections/herospace') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'heading'): ?>
		<?php get_template_part('sections/heading') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'basic'): ?>
		<?php get_template_part('sections/basic') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'blog'): ?>
		<?php get_template_part('sections/blog') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'latest-news'): ?>
		<?php get_template_part('sections/latest-news') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'text_with_photo'): ?>
		<?php get_template_part('sections/text-with-photo') ?>
	<?php endif ?>
	
	<?php if (get_row_layout() === 'text_with_photo_right'): ?>
		<?php get_template_part('sections/text-with-photo-right') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'add_your_voice'): ?>
		<?php get_template_part('sections/add-your-voice') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'know_the_facts'): ?>
		<?php get_template_part('sections/know-the-facts') ?>
	<?php endif ?>

	<?php if (get_row_layout() === 'thank_mp'): ?>
		<?php get_template_part('sections/thank-mp') ?>
	<?php endif ?>

<?php endwhile ?>


	</div><!-- /#document -->

	<footer id="contentinfo" role="contentinfo">
	<div class="container-fluid">
	<div class="col-sm-6">
		
	</div>
	<div class="col-sm-6 footerlinks">
		<h3><?php if (trans() === 'fr'): ?>
							LIENS
						<?php else: ?>
							Links
						<?php endif ?>
		</h3>
		<a href="<?= get_permalink(145) ?>"><?= trans('Privacy Policy', 'Politique de protection de la vie privée') ?></a>
	</div></div>
		
			<div class="copyright">
				&copy;<?php echo date('Y') ?> <?= trans('Patients Voice', 'La voix des patients') ?> <br>
			</div>
		
	</footer>

</div><!-- /#wrap -->


<div id="siteshare" style="display:none">
	<?php
		$permalink = home_url();
		$description = get_field('social_description','option');
	?>
	<div class="share">
		<a class="fb" data-platform="Facebook" data-permalink="<?= esc_attr($permalink) ?>" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($permalink) ?>"><span>Facebook</span></a>
		<a class="tw" data-platform="Twitter"  data-permalink="<?= esc_attr($permalink) ?>" target="_blank" href="https://twitter.com/intent/tweet?url=<?= urlencode($permalink) ?>&amp;text=<?= urlencode($description) ?>"><span>Twitter</span></a>
		<a class="ml" data-platform="Email"    data-permalink="<?= esc_attr($permalink) ?>" href="mailto:?subject=<?= trans('Make your voice heard!', 'Faites entendre votre voix!') ?>&body=<?= rawurlencode($description."\n\n".$permalink) ?>"><span>Email</span></a>
	</div>
</div>


<?php wp_footer() ?>

</body>
</html>

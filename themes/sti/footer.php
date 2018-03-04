
	</div><!-- /#document -->

	<footer id="contentinfo" role="contentinfo">
	<div class="container-fluid">
        <div class="col-sm-2">
		<img src="<?php site_url(); ?>/app/themes/sti/assets/img/cco-logo.jpg" class="bottomlogo" />
	</div>
        <div class="col-sm-2">
		<p>155 Lynden Rd, Unit 2<br />
Brantford, ON. N3R 8A7<br />
Tel: (519) 752-2124 Ext.100<br />
            Fax: (519) 752-3649</p>
	</div>
	<div class="col-sm-2  footerlinks">
		
		<a href="<?= get_permalink(145) ?>" class="contactfooter"><?= trans('Contact', 'Contacte') ?></a>
        <a href="<?= get_permalink(145) ?>"><?= trans('Privacy Policy', 'Politique de protection de la vie privée') ?></a>
	</div>
	<div class="col-sm-6">
		
	</div></div>
        
		<div class="col-sm-10"></div>
			<div class="col-sm-2"><a href="#main"><img src="<?php site_url(); ?>/app/themes/sti/assets/img/jump-to-top.jpg" class="jumptotop" /></a></div>
		
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

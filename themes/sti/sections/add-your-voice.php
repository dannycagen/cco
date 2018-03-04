
<div id="contact-your-mp" class="row section-add-your-voice" style="<?php the_sub_image_field('photo','full',true) ?>">
	<div class="col-sm-5">
		<div class="section-background visible-xs-block" style="<?php the_sub_image_field('photo','full',true) ?>"></div>
		<div class="section-wrapper">
			<div class="section-content" data-mh="contact-your-mp">
				<?php the_sub_field('content') ?>
			</div>
		</div>
	</div>
	
	<div class="col-sm-5" data-mh="contact-your-mp">
		<div class="form-wrapper">
			<form name="addYourVoiceStep1Form" role="form">
				
				<div class="alert alert-danger" style="display:none"></div>
				<div class="form-group">
					<label class="sr-only" for="addYourVoiceStep1FormName"><?= trans('Enter Your Name', 'Nom') ?></label>
					<input type="text" class="form-control" id="addYourVoiceStep1FormName" name="name" placeholder="<?= trans('Enter Your Name', 'Nom') ?>" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="addYourVoiceStep1FormEmail"><?= trans('Enter Your Email' , 'Courriel') ?></label>
					<input type="email" class="form-control" id="addYourVoiceStep1FormEmail" name="email" placeholder="<?= trans('Enter Your Email' , 'Courriel') ?>" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="addYourVoiceStep1FormStreetAddress"><?= trans('Enter Your Street Address', 'Adresse') ?></label>
					<input type="text" class="form-control" id="addYourVoiceStep1FormStreetAddress" name="street_address" placeholder="<?= trans('Enter Your Street Address', 'Adresse') ?>" required>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group">
						<label class="sr-only" for="addYourVoiceStep1FormCity"><?= trans('Your City', 'Ville') ?></label>
						<input type="text" class="form-control" id="addYourVoiceStep1FormCity" name="city" placeholder="<?= trans('Your City', 'Ville') ?>" required>
					</div>
					<div class="col-sm-6 form-group">
						<label class="sr-only" for="addYourVoiceStep1FormPostalCode"><?= trans('Your Postal Code', 'Code postal') ?></label>
						<input type="text" class="form-control" id="addYourVoiceStep1FormPostalCode" name="postal_code" placeholder="<?= trans('Your Postal Code', 'Code postal') ?>" required pattern="[A-Za-z][0-9][A-Za-z] ?[0-9][A-Za-z][0-9]">
					</div>
				</div>
				
				

				<div class="form-group checkbox">
					<label>
						<input type="checkbox" name="opt_in">
						<span>
						<?php if (trans() === 'fr'): ?>
							Sélectionnez cette case si vous souhaitez être informé(e) par courriel des développements liées à l’initiative « La voix des patients »
							<a href="<?= get_permalink(145) ?>" target="_blank">cliquez ici</a>
						<?php else: ?>
							By clicking submit, you agree to be contacted periodically with important updates on the campaign and related matters. You can read our privacy statement by clicking
							<a href="<?= get_permalink(145) ?>" target="_blank">here.</a>
						<?php endif ?>
						</span>
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn">
						<i class="fa fa-spinner fa-spin" style="display:none"></i>
						<?php _e("[:fr]FAITES ENTENDRE VOTRE VOIX[:en]Continue[:]"); ?>
					</button>
				</div>
			</form>
			<form name="addYourVoiceStep2Form" role="form" style="display:none">
				<p>
				<?php _e("[:fr]Dites à votre député(e) de faire entendre la voix des patients[:en]Tell Your MNA to listen to the patients voice[:]"); ?>
					
				</p>
				<div class="alert alert-danger" style="display:none"></div>
				<input type="hidden" name="voice">
				<div class="form-group checkbox">
					<div class="error-message">
						<?php _e("[:fr]S.V.P. envoyez une copie de cette lettre au ministre de la Santé et des Services sociaux du Québec.[:en]Please send a copy of this email to the Minister of Health and Social Services.[:]"); ?>
					</div>
					
				</div>
				<div class="preview"><?php _e("[:fr]En cliquant sur « Envoyer à mon (ma) député(e) » votre député(e) recevra un courriel lui demandant de s’assurer que le ministère de la Santé et des Services sociaux du Québec prenne en compte les conséquences que l’article 80.2 (1) aura sur l’accessibilité et le choix des traitements recommandés par les médecins et les patients.[:en]By clicking 'Send to MNA' your MNA will receive an e-mail asking him/her to ensure that the Quebec Ministry of Health and Social Services considers the consequences that section 80.2 (1) will have on accessibility and choice of the treatments recommended by doctors and patients. [:]"); ?></div>
				<div class="form-group checkbox">
					<label>
						<input type="checkbox" name="cc_confirmation" value="true" checked="">
<?php _e("[:en]A copy of this letter will be sent to the Minister of Health and Social Services. If you don’t want to send this letter to the Minister, please check the following box.[:fr]Une copie de cette lettre sera envoyée au ministre de la Santé et des Services sociaux. Si vous ne souhaitez pas envoyer de copie au ministre, cliquez ici.[:]");?>
					</label>
					<button type="submit" class="btn">
						<i class="fa fa-spinner fa-spin" style="display:none"></i>
						<?php _e("[:fr]ENVOYER À MON (MA) DÉPUTÉ(E)[:en]SEND TO MNA[:]"); ?>
					</button>
				</div>
			</form>
			<div class="thankyou" style="display:none">
				<?php the_sub_field('thank_you_message') ?>
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
		</div>
	</div>
</div>

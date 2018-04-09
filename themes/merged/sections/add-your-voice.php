<div id="contact-your-mp" class="row section-add-your-voice" style="<?php the_sub_image_field('photo','full',true) ?>">
  <div class="col-12" data-mh="contact-your-mp">
    <div class="form-wrapper">
      <form name="addYourVoiceStep1Form" role="form">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label class="sr-only" for="addYourVoiceStep1FormName"><?php _e('<!--:en-->Enter Your Name<!--:--><!--:ur-->اپنا نام درج کریں<!--:--><!--:zh-->输入您的姓名<!--:--><!--:pa-->ਆਪਣਾ ਨਾਮ ਦਾਖਲ ਕਰੋ<!--:--><!--:tl-->Ilagay ang Iyong Pangalan<!--:-->'); ?></label>
              <input type="text" class="form-control" id="addYourVoiceStep1FormName" name="name" placeholder="<?php _e('<!--:en-->Enter Your Name<!--:--><!--:ur-->اپنا نام درج کریں<!--:--><!--:zh-->输入您的姓名<!--:--><!--:pa-->ਆਪਣਾ ਨਾਮ ਦਾਖਲ ਕਰੋ<!--:--><!--:tl-->Ilagay ang Iyong Pangalan<!--:-->'); ?>" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="addYourVoiceStep1FormEmail"><?php _e('<!--:en-->Enter Your Email<!--:--><!--:ur-->اپنا ای میل درج کریں<!--:--><!--:zh-->输入您的电子邮件地址<!--:--><!--:pa-->ਆਪਣਾ ਈਮੇਲ ਪਤਾ ਦਾਖਲ ਕਰੋ<!--:--><!--:tl-->Ilagay ang Iyong Pangalan<!--:-->'); ?></label>
              <input type="email" class="form-control" id="addYourVoiceStep1FormEmail" name="email" placeholder="<?php _e('<!--:en-->Enter Your Email<!--:--><!--:ur-->اپنا ای میل درج کریں<!--:--><!--:zh-->输入您的电子邮件地址<!--:--><!--:pa-->ਆਪਣਾ ਈਮੇਲ ਪਤਾ ਦਾਖਲ ਕਰੋ<!--:--><!--:tl-->Ilagay ang Iyong Email<!--:-->'); ?>" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="addYourVoiceStep1FormStreetAddress"><?php _e('<!--:en-->Enter Your Street Address<!--:--><!--:ur-->اپنا اسٹریٹ ایڈریس درج کریں<!--:--><!--:zh-->输入您的街道住址<!--:--><!--:pa-->ਆਪਣਾ ਡਾਕ ਪਤਾ ਦਾਖਲ ਕਰੋ<!--:--><!--:tl-->Ilagay ang Kalye ng Iyong Tirahan<!--:-->'); ?></label>
              <input type="text" class="form-control" id="addYourVoiceStep1FormStreetAddress" name="street_address" placeholder="<?php _e('<!--:en-->Enter Your Street Address<!--:--><!--:ur-->اپنا اسٹریٹ ایڈریس درج کریں<!--:--><!--:zh-->输入您的街道住址<!--:--><!--:pa-->ਆਪਣਾ ਡਾਕ ਪਤਾ ਦਾਖਲ ਕਰੋ<!--:--><!--:tl-->Ilagay ang Kalye ng Iyong Tirahan<!--:-->'); ?>" required>
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-6 form-group">
            <label class="sr-only" for="addYourVoiceStep1FormCity"><?php _e('<!--:en-->Your City<!--:--><!--:ur-->آپ کا شہر<!--:--><!--:zh-->您所在的城市<!--:--><!--:pa-->ਤੁਹਾਡਾ ਸ਼ਹਿਰ<!--:--><!--:tl-->Iyong Lungsod<!--:-->'); ?></label>
            <input type="text" class="form-control" id="addYourVoiceStep1FormCity" name="city" placeholder="<?php _e('<!--:en-->Your City<!--:--><!--:ur-->آپ کا شہر<!--:--><!--:zh-->您所在的城市<!--:--><!--:pa-->ਤੁਹਾਡਾ ਸ਼ਹਿਰ<!--:--><!--:tl-->Iyong Lungsod<!--:-->'); ?>" required>
          </div>
          <div class="col-sm-6 form-group">
            <label class="sr-only" for="addYourVoiceStep1FormPostalCode"><?php _e('<!--:en-->Your Postal Code<!--:--><!--:ur-->آپ کا ڈاک کا کوڈ<!--:--><!--:zh-->您的邮政编码<!--:--><!--:pa-->ਤੁਹਾਡਾ ਪੋਸਟਲ ਕੋਡ<!--:--><!--:tl-->Iyong Postal Code<!--:-->'); ?></label>
            <input type="text" class="form-control" id="addYourVoiceStep1FormPostalCode" name="postal_code" placeholder="<?php _e('<!--:en-->Your Postal Code<!--:--><!--:ur-->آپ کا ڈاک کا کوڈ<!--:--><!--:zh-->您的邮政编码<!--:--><!--:pa-->ਤੁਹਾਡਾ ਪੋਸਟਲ ਕੋਡ<!--:--><!--:tl-->Iyong Postal Code<!--:-->'); ?>" required pattern="[A-Za-z][0-9][A-Za-z] ?[0-9][A-Za-z][0-9]">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group checkbox">
              <label>
                <input type="checkbox" name="opt_in">
                 <span>
                <?php _e('<!--:en-->I agree to be contacted periodically with important updates on the campaign and related matters. You can read our privacy statement by clicking <a href="/privacy-policy">here.</a><!--:--><!--:ur-->جمع کرانے<a href="/privacy-policy"> پر کلک کرنے سے، آپ مہم اور متعلقہ معاملات پر اہم اپ ڈیٹس کے ساتھ وقفہ وار رابطہ کیے جانے سے اتفاق کرتے ہیں۔ آپ یہاں کلک کرکے اپنا رازداری کا بیان پڑھ سکتے ہیں۔</a><!--:--><!--:zh-->点击提交即代表您同意我们就活动的重要更新与相关事项定期与您进行联系。点击此处，<a href="/privacy-policy">查看我们的隐私声明。</a><!--:--><!--:pa-->ਸਬਮਿਟ (submit) ਬਟਨ ’ਤੇ ਕਲਿੱਕ ਕਰਨ ਦੁਆਰਾ, ਤੁਸੀਂ ਇਸ ਚੀਜ਼ ਲਈ ਸਹਿਮਤ ਹੁੰਦੇ ਹੋ ਕਿ ਤੁਹਾਨੂੰ ਸਮੇਂ-ਸਮੇਂ ’ਤੇ ਮੁਹਿੰਮ ਅਤੇ ਇਸ ਨਾਲ ਸਬੰਧਿਤ ਮਾਮਲਿਆਂ ਬਾਰੇ ਅਹਿਮ ਅੱਪਡੇਟਾਂ ਬਾਰੇ ਦੱਸਣ ਲਈ ਸੰਪਰਕ ਕੀਤਾ ਜਾਵੇਗਾ। ਤੁਸੀਂ ਏਥੇ ਕਲਿੱਕ ਕਰਨ ਦੁਆਰਾ ਸਾਡੇ ਪਰਦੇਦਾਰੀ ਬਾਰੇ ਬਿਆਨ ਨੂੰ ਪੜ੍ਹ ਸਕਦੇ ਹੋ।<!--:--><!--:tl-->Sa pag-click ng isumite, ikaw ay sumasang-ayon na sa pana-panahon, mapapadalhan ka ng mahahalagang update na ukol sa kampanya at mga kaugnay na isyu. Maaari mong basahin ang aming pahayag sa pribasiya sa pamamagitan ng <a href="/privacy-policy">pag-click dito</a><!--:-->'); ?>
                </span>
               </label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn">
                <i class="fa fa-spinner fa-spin" style="display:none"></i>
                <?php _e("[:ur]جاری رہے[:zh]继续[:pa]ਜਾਰੀ ਰੱਖੋ[:tl]MAGPATULOY[:en]Continue[:]"); ?>
              </button>
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </form>
      <form name="addYourVoiceStep2Form" role="form" style="display:none">
        <input type="hidden" name="voice">
        <div class="preview mb-3"><?php _e("[:tl]Sa pagkumpleto sa impormasyon sa ibaba, ikaw ay dadalhin sa isang link ng email na direktang naka-address sa iyong MPP kung saan maaari mong ipadala ito nang ganito mismo, o i-edit ng sa palagay mong naaangkop.[:ur]درج ذیل معلومات کو مکمل کرنے سے آپ کو، آپ کے MPP سے براہ راست مخاطب، ایک ای میل لنک پر بھیج دیا جائے گا، جس کے بارے میں آپ کے پاس اسی طرح سے بھیج دینے یا جیسے آپ موزوں سمجھیں تدوین کرنے کا اختیار ہے۔[:zh]填妥下列信息后，您将跳转到直接发送至所在地省议员（MPP）的电子邮件链接，您可以直接发送内容，亦可视需要进行编辑。[:pa]ਹੇਠਾਂ ਦਿੱਤੀ ਜਾਣਕਾਰੀ ਭਰਨ ਦੁਆਰਾ ਤੁਹਾਨੂੰ ਸਿੱਧਾ ਤੁਹਾਡੇ MPP ਨੂੰ ਸੰਬੋਧਿਤ ਇੱਕ ਈਮੇਲ ਲਿੰਕ ’ਤੇ ਭੇਜਿਆ ਜਾਵੇਗਾ ਜਿੱਥੇ ਜਾਕੇ ਤੁਸੀਂ ਇਸ ਜਾਣਕਾਰੀ ਨੂੰ ਜਾਂ ਤਾਂ ਜਿਉਂ ਦੀ ਤਿਉਂ ਭੇਜ ਸਕਦੇ ਹੋ ਜਾਂ ਆਪਣੀ ਇੱਛਾ ਮੁਤਾਬਿਕ ਉਸ ਵਿੱਚ ਸੋਧ ਕਰ ਸਕਦੇ ਹੋ।[:en]By clicking 'Send to MPP' your MPP will receive an e-mail.[:]"); ?></div>
        <div class="form-group ">
          <button type="submit" class="btn">
            <i class="fa fa-spinner fa-spin" style="display:none"></i>
            <?php _e("[:ur]ای میل بھیجیں[:zh]发电子邮件[:pa]EMAIL ਭੇਜੋ[:tl]SUGUIN E MAIL[:en]SEND NOW[:]"); ?>
          </button>
        </div>
      </form>
      <div class="thankyou sign_up" style="display:none; background: transparent; padding:0px;">
        <div class="container">
        	<div class="">
	            <div class="col-md-12 float-right">
	                <p><?php the_field('join_us_text'); ?></p>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php bloginfo('url'); ?>" class="btn orange_btn" style="margin:20px;"><i class="fab fa-facebook-f fa-lg"></i><?php _e('<!--:en-->&nbsp; Share on facebook<!--:--><!--:ur-->&nbsp; فیس بک پر شیئر کریں<!--:--><!--:zh-->&nbsp; 在脸书上分享<!--:--><!--:pa-->&nbsp; ਫੇਸਬੁੱਕ ਤੇ ਸਾਂਝਾ ਕਰੋ<!--:--><!--:tl-->&nbsp; Ibahagi Sa Facebook<!--:-->'); ?></a>
                  <a href="https://twitter.com/home?status=<?php bloginfo('url'); ?>" class="btn orange_btn" style="margin:20px;><i class="fab fa-twitter fa-lg"></i><?php _e('<!--:en-->&nbsp; Tweet your support<!--:--><!--:ur-->&nbsp; ٹائٹر پر اشتراک کریں<!--:--><!--:zh-->&nbsp; 分享到TWITTER<!--:--><!--:pa-->&nbsp; ਟਵਿੱਟਰ ਤੇ ਸਾਂਝਾ ਕਰੋ<!--:--><!--:tl-->&nbsp; Ibahagi Sa Twitter<!--:-->'); ?></a>
	            </div>
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>

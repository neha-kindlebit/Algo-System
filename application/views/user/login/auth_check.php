
Enter the verification code generated by Google Authenticator app on your phone.
<div id="img">
	<img src='<?php if($qrCodeUrl){ echo $qrCodeUrl; } ?>' />
</div>

<form method="post" action="<?= base_url();?>auth/verify_phonecode">
	<label>Enter Google Authenticator Code</label>
	<input type="text" name="code" />
	<input type="hidden" name="authcode" value="<?php if($authcode) { echo $authcode; }?>" />
	<input type="submit" name="subm" class="button"/>
</form>

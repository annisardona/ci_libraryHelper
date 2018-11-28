<html>
<head>
<title>My Form</title>
</head>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open('LibraryHelper'); ?>
<?php echo form_open('captcha'); ?>
<h5>Username</h5>
<input type="text" name="username" value="" size="50" />
<h5>Password</h5>
<input type="text" name="password" value="" size="50" />
<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />
<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />
<div class="form-group">
<br>
<label for="captcha"><?php echo $captcha['image']; ?></label>
    <br>
    <input type="text" autocomplete="off" name="userCaptcha" placeholder="Enter above text" value="<?php if(!empty($userCaptcha)){ echo $userCaptcha;} ?>" />
    <span class="required-server"><?php echo form_error('userCaptcha','<p style="color:#F83A18">','</p>'); ?></span> </div>
	<div class="form-group">
	</br>
</br>
<div><input type="submit" value="Submit" /></div>
<?php echo form_close(); ?>
</body>
</html>



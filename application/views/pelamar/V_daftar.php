<?php echo form_open('pelamar/Auth/insertPelamar'); ?>
<br><label>nama lengkap</label>
	<input type="text" name="nama_pelamar" placeholder="nama lengkap">
<br><label>email</label>
	<input type="email" name="email_pelamar" placeholder="dominic@gmail.com">
<br><label>password</label>
	<input type="password" name="password_pelamar" placeholder="xxxxxx">
	<br>
	<input type="submit" value="Submit">
<?php echo form_close(); ?>
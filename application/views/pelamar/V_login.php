
	<h1>Halaman Login</h1>
	<form action="<?php echo site_url('pelamar/Auth/LoginPelamar')?>" method="POST">
  Email:<br>
  <input type="Email" name="email_pelamar" placeholder="email">
  <br>
  Password:<br>
  <input type="password" name="password_pelamar" placeholder="Password">
  <br><br>
  <input type="submit" value="Submit">
</form> 
<?php 
					echo validation_errors('<p style="color:red">','</p>'); 
					
					if($this->session->flashdata('mdd')) {
				        echo "<p style='color:red'>";
				        echo $this->session->flashdata('mdd');
				        echo "</p>";
				    }

				?>
				<a href="<?php echo site_url('pelamar/Auth/daftar')?>">Register</a>

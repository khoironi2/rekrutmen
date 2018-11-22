


<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('assets/login/images/bg-01.jpg') ?>');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<?php 
				echo validation_errors('<p style="color:red">','</p>'); 
				
				if($this->session->flashdata('mdd')) {
					echo "<p style='color:red'>";
					echo $this->session->flashdata('mdd');
					echo "</p>";
				}
			?>
			<form action="<?php echo site_url('pelamar/Auth/insertPelamar') ?>" method="POST" class="login100-form validate-form">
				<span class="login100-form-title p-b-49">
					DAFATR MEMBER REKRUTMEN
				</span>

				<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
					<span class="label-input100">Nama Lengkap :</span>
					<input class="input100" type="text" name="nama_pelamar" placeholder="Masukan nama anda">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Email :</span>
					<input class="input100" type="email" name="email_pelamar" placeholder="dominic@gmail.com">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Password :</span>
					<input class="input100" type="password" name="password_pelamar" placeholder="xxxxxxxxxxxx">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>
				
				<!-- <div class="text-right p-t-8 p-b-31">
					<a href="#">
						Forgot password?
					</a>
				</div> -->
				
				<div class="container-login100-form-btn mt-5">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" type="submit">
							Daftar
						</button>
					</div>
				</div>

				<div class="txt1 text-center p-t-54 p-b-20">
					<span>
						Or Sign Up Using
					</span>
				</div>

				<div class="flex-c-m">
					<a href="#" class="login100-social-item bg1">
						<i class="fa fa-facebook"></i>
					</a>

					<a href="#" class="login100-social-item bg2">
						<i class="fa fa-twitter"></i>
					</a>

					<a href="#" class="login100-social-item bg3">
						<i class="fa fa-google"></i>
					</a>
				</div>

				<div class="flex-col-c p-t-155">
					<span class="txt1 p-b-17">
						Or Sign Up Using
					</span>

					<a href="<?php echo site_url('pelamar/Auth') ?>" class="txt2">
						Login
					</a>
				</div>
			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>
	

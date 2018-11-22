<div class="table-responsive">
	<table class="table" >
		<tr>
			<td style="text-align: center;">
				<?php if($pelamar->pas_foto != "") { ?>
					<img src="<?php echo base_url('assets/upload/pelamar/img/'.$pelamar->pas_foto)?>" alt="Gambar Profile" height="90px">
					
				<?php } else { ?>
					<img src="<?php echo base_url('assets/image/icon.png')?>" alt="Gambar Profile" height="90px">
				<?php } ?>
			</td>
		</tr>
		<tr><td style="text-align: center;" ><b><?php echo $this->session->userdata('nama_pelamar'); ?></b></td></tr>
		<tr><td style="text-align: center;" >
			<a href="<?php echo site_url('pelamar/dashboard') ?>"><button type="button" class="btn btn-info">Lihat Profile</button></a>
		</td></tr>
		<?php echo form_open_multipart('pelamar/Dashboard/updateAva'); ?>
			<tr><td><input type="file" name="avapelamar" class="form-control"></td></tr>
			<tr><td style="text-align: center;"><input type="submit" class="btn btn-info btn-sm" name="submit" value="Update Foto"></td></tr>	
		<?php echo form_close(); ?>
		
	</table>
<h1>Anda login sebagai :<?php echo $this->session->userdata('nama_pelamar'); ?></h1>
<a href="<?php echo site_url('pelamar/Auth/logOut') ?>">Logout</a>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                        <?php 
                            echo validation_errors('<p style="color:red">','</p>'); 
                            
                            if($this->session->flashdata('sukses')) {
                                echo "<p style='color:red'>";
                                echo $this->session->flashdata('sukses');
                                echo "</p>";
                            }
                        ?>
                    </div>
                    <div class="content">
                        <form action="<?php echo site_url('pelamar/Dashboard/doupdate') ?>" method="POST" class="login100-form validate-form">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" name="id_pelamar" value="<?php echo $this->session->userdata('id_pelamar') ?>" hidden>
                                        <label>Alamat Email</label>
                                        <input required type="text" class="form-control" disabled placeholder="Company" value="<?php echo $pelamar->email_pelamar; ?>">
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telpon</label>
                                        <input type="text" name="notelp_pelamar" class="form-control input100" value="<?php echo $pelamar->notelp_pelamar; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_pelamar" class="form-control" placeholder="Company" value="<?php echo $pelamar->nama_pelamar; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>kewarganegaraan</label>
                                        <input type="text" class="form-control" name="kewarganegaraan" placeholder="Indonesia" value="<?php echo $pelamar->kewarganegaraan; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat KTP</label>
                                        <input type="text" class="form-control" name="alamat_pelamar" placeholder="Home Address" value="<?php echo $pelamar->alamat_pelamar ?>">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat Domisili</label>
                                        <input type="text" name="alamat_domisili" class="form-control" placeholder="Home Address" value="<?php echo $pelamar->alamat_domisili ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input type="text" class="form-control" name="umur_pelamar" placeholder="Umur" value="<?php echo $pelamar->umur_pelamar ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>status</label>
                                        <select name="status_pelamar" class="form-control">
                                        	<option class="form-control"><?php echo $pelamar->status_pelamar ?></option>
                                        	<option class="form-control">Lajang</option>
                                        	<option>Menikah</option>
                                        	<option>Duda</option>
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir_pelamar" value="<?php echo $pelamar->tgl_lahir_pelamar ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                	<div class="form-group">
                                		<label>Jenis Kelamin</label>
                                		<select class="form-control" name="jenis_kelamin_pelamar">
                                			<option><?php echo $pelamar->jenis_kelamin_pelamar; ?></option>
                                			<option>Laki - Laki</option>
                                			<option>Perempuan</option>
                                		</select>
                                	</div>
                                </div>
                            </div>

                            <div class="row">
                            	<div class="col-md-3">
                            		<div class="form-group">
                            			<label>Tinggi Badan</label>
                            			<input placeholder="172" type="text" name="tinggi_badan" class="form-control" value="<?php echo $pelamar->tinggi_badan ?>">
                            		</div>
                            	</div>
                            	<div class="col-md-3">
                            		<div class="form-group">
                            			<label>Berat Badan</label>
                            			<input placeholder="75" type="text" name="berat_badan" class="form-control" value="<?php echo $pelamar->berat_badan ?>">
                            		</div>
                            	</div>
                            	<div class="col-md-4">
                            		<div class="form-group">
                            			<label>Agama</label>
                                        <select class="form-control" name="id_agama">
                                            <?php foreach ($agama as $aga): ?>
                            				<option value="<?php echo $aga->id_agama ?>">
                                                <?php echo $aga->agama; ?>
                                                <?php endforeach ?>
                                            </option>
                            			</select>
                            		</div>
                            	</div>
                            	<div class="col-md-2">
                            		<div class="form-group">
                            			<label>Gol Darah</label>
                            			<select class="form-control" name="gol_darah">
                            				<option><?php echo $pelamar->gol_darah; ?></option>
                            				<option>A</option>
                            				<option>B</option>
                            				<option>AB</option>
                            				<option>O</option>
                            			</select>
                            		</div>
                            	</div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Hobi</label>
                                        <textarea name="hobi" rows="5" class="form-control" placeholder="Jl. Melati ....." ><?php echo $pelamar->hobi ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                   <div class="header">
                        <h4 class="title"><b>PAS FOTO</b></h4>
                        
                    </div>
                    <div class="content">
                        <?php if($pelamar->pas_foto != "") { ?>
                            <img class="img-thumbnail" src="<?php echo base_url('assets/upload/pelamar/img/'.$pelamar->pas_foto)?>" alt="..."/>
                        <?php } else { ?>
                                <img class="img-thumbnail" src="<?php echo base_url('assets/image/avatar.jpg')?>" alt="Gambar Profile">
                        <?php } ?>

                    </div>
                    <hr>
                    <?php echo form_open_multipart('pelamar/Dashboard/updateAva'); ?>
						<button href="#" class="btn btn-simple" style="margin-left: 20px;">
                            <input type="file" name="avapelamar" class="btn btn-info" style="position: relative; overflow: hidden; margin: 10px;">
                        </button>
						
					<br><br>
                    <div class="text-center">
                    	<button type="submit" name="submit" class="btn btn-info btn-fill" style="border-radius: 40px;">Update</button>
                        <!-- <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button> -->
                    <br><br>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!-- foto ful badan-->
                <div class="card card-user">
                    <div class="header">
                        <h4 class="title"><b>FOTO FULL BADAN</b></h4>
                        
                    </div>
                    <div class="content">
                        <?php if($pelamar->foto_full_badan != "") { ?>
                            <img class="img-thumbnail" src="<?php echo base_url('assets/upload/pelamar/img/Full/'.$pelamar->foto_full_badan)?>" alt="..."/>
                            <?php } else { ?>
                                <img class="img-thumbnail" src="<?php echo base_url('assets/image/avatar.jpg')?>" alt="Gambar Profile">
                            <?php } ?>

                    </div>
                   
                    <hr>
                    <?php echo form_open_multipart('pelamar/Dashboard/updateAvaFull'); ?>
                        <button href="#" class="btn btn-simple" style="margin-left: 20px;">
                            <input type="file" name="avapetinju" class="btn btn-info" style="position: relative; overflow: hidden; margin: 5px;">
                        </button>
                        
                    <br><br>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-info btn-fill" style="border-radius: 40px;">Update</button>
                        <!-- <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button> -->
                    <br><br>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
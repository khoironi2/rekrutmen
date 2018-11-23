
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
                                <form action="<?php echo site_url('pelamar/Pendidikan/doTambah') ?>" method="POST" class="login100-form validate-form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                               <input type="text" name="id_pelamar" value="<?php echo $this->session->userdata('id_pelamar')?> "hidden>
                                                <label>Nama</label>
                                                <input required type="text" class="form-control" disabled placeholder="Company" value="<?php echo $this->session->userdata('nama_pelamar') ?>">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenjang</label>
                                                <select name="jenjang" class="form-control">
                                                    <option>S3</option>
                                                    <option>S2</option>
                                                    <option>S1</option>
                                                    <option>SMA / SMK</option>
                                                    <option>SMP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun Lulus</label>
                                                <input type="text" name="tahun_lulus" class="form-control" placeholder="2018">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>no seri ijazah</label>
                                                <input type="text" class="form-control" name="no_seri_ijazah" placeholder="23/AD">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ipk</label>
                                                <input type="text" class="form-control" name="ipk" placeholder="3.00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>status lulus</label>
                                                <select name="status_lulus" class="form-control">
                                                    
                                                    <option>LULUS</option>
                                                    <option>BELUM LULUS</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>judul skripsi</label>
                                                <textarea placeholder="Analisis" class="form-control" name="judul_skripsi"></textarea>
                                               
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
								<button href="#" class="btn btn-simple"><input type="file" name="avapelamar"></button>
								
									
							
                            <div class="text-center">
                            	<button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
                                <button href="#" class="btn btn-simple"><input type="file" name="avapetinju"></button>
                                
                                    
                            
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
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
                                <form action="<?php echo site_url('pelamar/Pendidikan/doTambah') ?>" method="POST" class="login100-form validate-form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                               <input type="text" name="id_pelamar" value="<?php echo $this->session->userdata('id_pelamar')?> "hidden>
                                                <label>Nama</label>
                                                <input required type="text" class="form-control" disabled placeholder="Company" value="<?php echo $this->session->userdata('nama_pelamar') ?>">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenjang</label>
                                                <select name="jenjang" class="form-control">
                                                    <option>S3</option>
                                                    <option>S2</option>
                                                    <option>S1</option>
                                                    <option>SMA / SMK</option>
                                                    <option>SMP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun Lulus</label>
                                                <input type="text" name="tahun_lulus" class="form-control" placeholder="2018">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>no seri ijazah</label>
                                                <input type="text" class="form-control" name="no_seri_ijazah" placeholder="23/AD">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ipk</label>
                                                <input type="text" class="form-control" name="ipk" placeholder="3.00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>status lulus</label>
                                                <select name="status_lulus" class="form-control">
                                                    
                                                    <option>LULUS</option>
                                                    <option>BELUM LULUS</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>judul skripsi</label>
                                                <textarea placeholder="Analisis" class="form-control" name="judul_skripsi"></textarea>
                                               
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
                                <button href="#" class="btn btn-simple"><input type="file" name="avapelamar"></button>
                                
                                    
                            
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
                                <button href="#" class="btn btn-simple"><input type="file" name="avapetinju"></button>
                                
                                    
                            
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
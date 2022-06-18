<?php 
     include("koneksi.php");
     include('fungsi/data penduduk/fungsiupdatependuduk.php');   
    ?>
  <!-- Modal -->
  <div class="modal fade" id="editpenduduk" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Edit Data Penduduk</h5>
								<!-- <button  onclick=" return confirm('anda yakin ingin kembali'); " type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
								<!-- <span aria-hidden="true">&times;</span> -->
								</button>
							</div>
							<div class="modal-body">
								<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
								        <div class="row">
                                            <div class="col-sm-6  ">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama"
                                                    value="<?php echo $penduduk["nama_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">		
                                                <div class="form-group ">
                                                    <label>Agama</label>
                                                    <select class="form-control" name="agama">
                                                        <option><?php echo $penduduk["agama"] ?></option><br>
                                                        <option disabled="disabled"><br></option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Khatolik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>Khonghucu</option>
                                                    </select>
                                                </div>
                                            </div>     
                                            <div class="col-sm-6  ">    
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan blok rumah" name="alamat"
                                                    value="<?php echo $penduduk["alamat_penduduk"] ?>">
                                                </div>
                                            </div>    
                                            <div class="col-sm-6  ">    
                                                <div class="form-group">
                                                    <label>RT</label>
                                                    <select class="form-control" name="rt">
                                                        <option><?php echo $penduduk["rt_penduduk"] ?></option><br>
                                                        <option disabled="disabled"><br></option>
                                                        <option>RT 01</option>
                                                        <option>RT 02</option>
                                                        <option>RT 03</option>
                                                        <option>RT 04</option>
                                                        <option>RT 05</option>
                                                        <option>RT 06</option>
                                                        <option>RT 07</option>
                                                        <option>RT 08</option>
                                                        <option>RT 09</option>
                                                        <option>RT 10</option>
                                                        <option>RT 11</option>
									                </select>
                                                </div>
                                            </div>    
                                            <div class="col-sm-6  ">    
                                                <div class="form-group">
                                                    <label>no Tlp</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan No Tlp" name="tlp"
                                                    value="<?php echo $penduduk["no_penduduk"] ?>">
                                                </div>
                                            </div>    
                                            <div class="col-sm-6  ">     
                                                <div class="form-group">
                                                    <label>No Nik</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan No Nik" name="nik"
                                                    value="<?php echo $penduduk["nik_penduduk"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6  "> 
                                                 <div class="form-group">
                                                    <label>No KK</label>
                                                    <input type="text" class="form-control" placeholder="Masukkan No KK" name="kk"
                                                    value="<?php echo $penduduk["kk_penduduk"] ?>">
                                                </div> 
                                            </div>
                                            <div class="col-sm-12  ">      
                                               <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" 
                                                            value="Laki-Laki" <?php echo ($penduduk['jenis_kelamin'] == 'Laki-Laki') ? 'checked' : ''?> >
                                                                <label class="form-check-label">
                                                                        Laki-Laki
                                                                </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jenis_kelamin" 
                                                            value="Perempuan" <?php echo ($penduduk['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''?> >
                                                                <label class="form-check-label">
                                                                        Perempuan
                                                                </label>
                                                    </div>
                                                </div>
                                            </div>
                                                <!-- <div class="col-sm-12  ">    
                                                        <div class="form-group">
                                                            <label>Foto Ktp</label><br>
                                                            <img id="foto" src="images/< echo $penduduk["ktp_penduduk"] ?>" alt="" width = "150">
                                                            <input id="thumbnail" type="file" class="form-control-file" name="poto">
                                                        </div>
                                                     </div>     -->
                                        </div> 
                                </form>
							</div>
							<div class="modal-footer">
                                <a onclick=" return confirm('anda yakin ingin kembali'); "  href="datapenduduk.php" class="btn btn-secondary mr-2"> Kembali</a>
								<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</div>
				</div>
     

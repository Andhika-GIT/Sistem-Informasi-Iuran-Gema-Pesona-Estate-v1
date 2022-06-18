<?php 
     include("koneksi.php");
     include('fungsi/data penduduk/fungsitambahpenduduk.php');   
    ?>
  <!-- Modal -->
                <div class="modal fade" id="addpenduduk" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Masukkan Data Penduduk Baru</h5>
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
                                                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="field harus di isi">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">		
                                            <div class="form-group ">
                                                <label>Agama</label>
                                                <select class="form-control" name="agama" required="field harus di isi">
                                                    <option value="" disabled selected>Pilih Agama</option>
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
                                                <input type="text" class="form-control" placeholder="Masukkan blok rumah" name="alamat" required="field harus di isi">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">		
                                            <div class="form-group ">
                                                <label>RT</label>
                                                <select class="form-control" name="rt" required="field harus di isi">
                                                    <option value="" disabled selected>Pilih No Rt</option>
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
                                        <div class="col-sm-6 ">	
                                            <div class="form-group">
                                                <label>no Tlp</label>
                                                <input type="text" class="form-control" placeholder="Masukkan No Tlp" name="tlp" required="field harus di isi">
                                            </div>
                                        </div>	
                                        <div class="col-sm-6">	
                                            <div class="form-group">
                                                <label>No Nik</label>
                                                <input type="text" class="form-control" placeholder="Masukkan No Nik" name="nik" required="field harus di isi">
                                            </div>
                                        </div>	
                                        <div class="col-sm-6 ">	
                                            <div class="form-group">
                                                <label>No KK</label>
                                                <input type="text" class="form-control" placeholder="Masukkan No KK" name="kk" required="field harus di isi">
                                            </div>	
                                        </div>	
                                        <div class="col-sm-12">	
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" required="field harus di isi">
                                                <label class="form-check-label">
                                                    Laki-Laki
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required="field harus di isi">
                                                <label class="form-check-label">
                                                    Perempuan
                                                </label>
                                                </div>
                                            </div>
                                        </div>								
                                    </div>
                                </form>    		
							</div>
							<div class="modal-footer">
                                <a onclick=" return confirm('anda yakin ingin kembali'); "  href="datapenduduk.php" class="btn btn-secondary mr-2"> Kembali</a>
								<input type="submit" name="submit" class="btn btn-primary" value="simpan"></input>
							</div>
						</div>
					</div>
				</div>
     

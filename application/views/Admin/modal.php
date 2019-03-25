
<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smallmodalLabel">Hapus File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Apakah Anda Yakin Ingin Menghapus File?
                            </p>
                        </div>
                        <div class="modal-footer" id = "footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a class="a" href = ""><button type="button" class="btn btn-primary">Hapus</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediummodalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediummodalLabel">Tambah File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <?php $random = rand('00000', '99999')?>
                        <form class="form" method="post" action="<?php echo base_url()?>index.php/admin/simpan" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class='form-group'>
                                <label class="form-control-label">NIK</label>
                                <input type = "text" name='nik' class='form-control' value = "G<?php echo $random?>" readonly>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nama</label>
                                <input type = "text" name='nama' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Password</label>
                                <input type = "text" name='password' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Mata Pelajaran</label>
                                <select class="form-control" name="matpel">
                                <?php foreach ($b as $b) { ?>
                                <option value = "<?php echo $b['Kode_matpel']?>"><?php echo $b['Nama_matpel']?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Alamat</label>
                                <input type = "text" name='alamat' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Tanggal Masuk</label>
                                <input type = "date" name='tgl_masuk' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Foto</label>
                                <input type = "file" name='foto' class='form-control'>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" name="simpan" class="btn btn-primary" value = "Simpan">
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Update -->
            <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="mediummodalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediummodalLabel">update File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div id="form">
                        <form class="form" method="post" action = "" id = "nik" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class='form-group'>
                                <label class="form-control-label">NIK</label>
                                <input type = "text" name='nik' class='form-control' id = "nik" readonly>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nama</label>
                                <input type = "text" name='nama' class='form-control' id = "nama">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Password</label>
                                <input type = "text" name='password' class='form-control' id = "password">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Mata Pelajaran</label>
                                <select class="form-control" name="matpel">
                                <option value = "P001">IPA</option>
                                <option value = "P002">IPS</option>
                                <option value = "P003">Pendidikan Agama</option>
                                <option value = "P004">Pendidikan Pancasila Dan Kewarganegaraan</option>
                                <option value = "P005">Bahasa Indonesia</option>
                                <option value = "P006">Bahasa Inggris</option>
                                <option value = "P007">Seni Budaya</option>
                                <option value = "P008">Prakarya</option>
                                <option value = "P009">Pendidikan Jasmani Dan Olahraga</option>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Alamat</label>
                                <input type = "text" name='alamat' class='form-control' id = "alamat">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Tanggal Masuk</label>
                                <input type = "date" name='tgl_masuk' class='form-control' id = "tgl">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Foto</label>
                                <input type = "file" name='foto' class='form-control' id = "foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" name="simpan" class="btn btn-primary" value = "Ubah">
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href=""><button type="button" class="btn btn-primary">Hapus</button></a>
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
                        <form class="form" method="post" action="<?php echo base_url()?>index.php/murid/simpan" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class='form-group'>
                                <label class="form-control-label">NIS</label>
                                <input type = "text" name='nis' class='form-control' value = "1516<?php echo $random?>" readonly>
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
                                <label class="form-control-label">Kelas</label>
                                <select class="form-control" name="kelas">
                                <?php foreach ($k as $k){?>
                                <option value = "<?php echo $k['Kode_kelas']?>"><?php echo $k['Kelas']?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Alamat</label>
                                <input type = "text" name='alamat' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Wali</label>
                                <input type = "text" name='wali' class='form-control'>
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
                        <form class="form" method="post" action="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class='form-group'>
                                <label class="form-control-label">NIS</label>
                                <input type = "text" name='nis' class='form-control' id = "nis" readonly>
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
                                <label class="form-control-label">Kelas</label>
                                <select class="form-control" name="kelas">
                                <option value="" id = "kelas"><div id = "kelas"></div></option>
                                <?php foreach ($ku as $ku){?>
                                <option value = "<?php echo $ku['Kode_kelas']?>"><?php echo $ku['Kelas']?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Alamat</label>
                                <input type = "text" name='alamat' class='form-control' id = "alamat">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">wali</label>
                                <input type = "text" name='wali' class='form-control' id = "wali">
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
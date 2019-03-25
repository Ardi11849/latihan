
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
                        <form class="form" method="post" action="<?php echo base_url()?>index.php/nilai/simpan" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class='form-group'>
                                <label class="form-control-label">Kode</label>
                                <input type = "text" name='kode' class='form-control' value = "N<?php echo $random?>" readonly>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nama Murid</label>
                                <select class="form-control" name="nama">
                                <?php foreach ($b as $b) { ?>
                                <option value = "<?php echo $b['NIS']?>"><?php echo $b['Nama']?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nama Guru</label>
                                <select class="form-control" name="guru">
                                <?php foreach ($c as $c) {?>
                                <option value="<?php echo $c['NIK']?>"><?php echo $c['Nama_g']?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Mata Pelajaran</label>
                                <select class="form-control" name="matpel">
                                <?php foreach ($d as $d) {?>
                                <option value="<?php echo $d['Kode_matpel']?>"><?php echo $d['Nama_matpel']?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nilai Harian</label>
                                <input type = "number" name='nilai_h' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nilai Ulangan</label>
                                <input type = "number" name='nilai_u' class='form-control'>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nilai Akhir</label>
                                <input type = "number" name='nilai' class='form-control'>
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
                                <label class="form-control-label">Kode Nilai</label>
                                <input type = "text" name='kode' class='form-control' id = "kode" readonly>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nama</label>
                                <input type = "text" name='nama' class='form-control' id = "nama" value="" readonly>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Kelas</label>
                                <input type = "text" name='kelas' class='form-control' id = "kelas" readonly>
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Guru</label>
                                <input type = "text" name='guru' class='form-control' id = "guru" value = "" readonly>
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
                                <label class="form-control-label">Nilai Harian</label>
                                <input type = "number" name='nilai_h' class='form-control' id = "nilai_h">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nilai Ulangan</label>
                                <input type = "number" name='nilai_u' class='form-control' id = "nilai_u">
                            </div>
                            <div class='form-group'>
                                <label class="form-control-label">Nilai</label>
                                <input type = "number" name='nilai' class='form-control' id = "nilai">
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
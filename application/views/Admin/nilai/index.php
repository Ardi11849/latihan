<<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
    <?php 
    include 'header_mobile.php';
    ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
    <?php 
    include 'menu.php';
    $no = 1;
    ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php 
                include 'header_dekstop.php';
             ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
     <?php echo $this->session->flashdata('msg')?>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Daftar Nilai</h2>
                                    <button class="btn btn-outline-primary btn-sm"  data-toggle="modal" data-target="#tambah">
                                        <i class="zmdi zmdi-plus"></i>Masukan Nilai</button>
                                </div>
                                <br>
                                <br>
                                    <table class="table table-responsive table--no-card m-b-40 table-borderless table-striped table-earning dataTable" id="dataTables">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Murid</th>
                                                <th>Kelas</th>
                                                <th>Nama Matpel</th>
                                                <th>Nama Guru</th>
                                                <th>Nilai Harian</th>
                                                <th>Nilai Ulangan Harian</th>
                                                <th>Nilai Akhir</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          foreach ($a as $a) {
                                            ?>
                                            <tr>
                                                <td><?php echo $Jumlah = $no++; ?></td>
                                                <td><?php echo $a['Nama']; ?></td>
                                                <td><?php echo $a['Kelas']; ?></td>
                                                <td><?php echo $a['Nama_matpel']; ?></td>
                                                <td><?php echo $a['Nama_g']; ?></td>
                                                <td><?php echo $a['Nilai_h']; ?></td>
                                                <td><?php echo $a['Nilai_u']; ?></td>
                                                <td><?php echo $a['Nilai']; ?></td>
                                                <td><button class="btn btn-outline-warning btn-sm" data-toggle="modal" id = "edit" data-guru = "<?php echo $a['Nama_g']?>" data-target="#update" data-kode = "<?php echo $a['Kode_nilai']?>" data-nis = "<?php echo $a['NIS'];?>" data-nik = "<?php echo $a['NIK']?>" data-nama = "<?php echo $a['Nama']; ?>" data-kelas = "<?php echo $a['Kelas']; ?>" data-matapelajaran = "<?php echo $a['Nama_matpel']; ?>" data-nilai_h = "<?php echo $a['Nilai_h']; ?>" data-nilai_u = "<?php echo $a['Nilai_u']; ?>" data-nilai = "<?php echo $a['Nilai']; ?>"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button type="button" class="btn btn-outline-danger btn-sm" id = "delete" data-kode = "<?php echo $a['Kode_nilai']?>" data-toggle="modal" data-target="#smallmodal"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                            <div class="footer">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Ardi Suryana.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>
</div>
<?php include 'modal.php'; ?>
</body>
<?php include 'js.js'; ?>
</html>
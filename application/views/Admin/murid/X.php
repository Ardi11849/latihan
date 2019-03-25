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
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Password</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Wali</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          foreach ($a as $a) {
                                            ?>
                                            <tr>
                                                <td><?php echo $Jumlah = $no++; ?></td>
                                                <td><?php echo $nis = $a['NIS']; ?></td>
                                                <td><?php echo $a['Nama']; ?></td>
                                                <td><?php echo $a['Password']; ?></td>
                                                <td><?php echo $a['Kelas']; ?></td>
                                                <td><?php echo $a['Alamat']; ?></td>
                                                <td><?php echo $a['Wali']; ?></td>
                                                <td><img src="<?php echo base_url()?>images/murid/<?php echo $a['Foto']?>" width="200px"></td>
                                                <td><button class="btn btn-outline-warning btn-sm" data-toggle="modal" id = "edit" data-target="#update" data-nis = "<?php echo $a['NIS']; ?>" data-nama = "<?php echo $a['Nama']; ?>" data-password = "<?php echo $a['Password']; ?>" data-kelas = "<?php echo $a['Kelas']; ?>" data-alamat = "<?php echo $a['Alamat']; ?>" data-wali = "<?php echo $a['Wali']; ?>" data-foto = "<?php echo $a['Foto']; ?>"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-outline-danger btn-sm" data-toggle="modal" id = "delete" data-target="#smallmodal" data-nis="<?php echo $a['NIS']?>"><i class="fa fa-trash"></i> </button>
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
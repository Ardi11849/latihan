
	// <!-- Jquery JS-->
	<script src="<?php echo base_url()?>vendor/jquery-3.2.1.min.js"></script>
	// <!-- Bootstrap JS-->
	<script src="<?php echo base_url()?>vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="<?php echo base_url()?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>js/datatables.js"></script>
	// <!-- Vendor JS       -->
	<script src="<?php echo base_url()?>vendor/slick/slick.min.js">
	</script>
	<script src="<?php echo base_url()?>vendor/wow/wow.min.js"></script>
	<script src="<?php echo base_url()?>vendor/animsition/animsition.min.js"></script>
	<script src="<?php echo base_url()?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="<?php echo base_url()?>vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url()?>vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="<?php echo base_url()?>vendor/circle-progress/circle-progress.min.js"></script>
	<script src="<?php echo base_url()?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?php echo base_url()?>vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="<?php echo base_url()?>vendor/select2/select2.min.js">
	</script>

	// <!-- Main JS-->
	<script src="<?php echo base_url()?>js/main.js"></script>
	<script type="text/javascript">
		$(document).on("click", "#edit", function(){
		var nik = $(this).data('nik');
		var nama = $(this).data('nama');
		var pass = $(this).data('password');
		var matpel = $(this).data('matapelajaran');
		var alamat = $(this).data('alamat');
		var tgl = $(this).data('masuk');
		var foto = $(this).data('foto');
		$(".modal-body #nik").val(nik);
		$(".modal-body #nama").val(nama);
		$(".modal-body #password").val(pass);
		$(".modal-body #alamat").val(alamat);
		$(".modal-body #tgl").val(tgl);
		$(".modal-body #foto").val(foto);
	})
	</script>
	<script>
		$(document).ready( function () {
    $('#dataTables').DataTable();
} );
	</script>
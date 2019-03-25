
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
	$(document).on("click", "#delete", function() {
		var kode = $(this).data("kode");
		$("a").attr("href", "<?php echo base_url()?>index.php/Nilai/delete/"+kode);
	})
	</script>
	<script type="text/javascript">
		$(document).on("click", "#edit", function(){
			var kode = $(this).data("kode")
			var nis = $(this).data('nis');
			var nik = $(this).data('nik');
		var nama = $(this).data('nama');
		var kelas = $(this).data('kelas');
		var matpel = $(this).data('matapelajaran');
		var guru = $(this).data('guru');
		var nis = $(this).data('nis');
		var nik = $(this).data('nik');
		var nilai_h = $(this).data('nilai_h');
		var nilai_u = $(this).data('nilai_u');
		var nilai = $(this).data('nilai');
		$(".modal-body #nama").attr("value", nis);
		$(".modal-body #guru").attr("value", nik);
		$("form").attr("action", "<?php echo base_url()?>index.php/Nilai/ubah/"+kode);
		$(".modal-body #kode").val(kode);
		$(".modal-body #nama").val(nama);
		$(".modal-body #kelas").val(kelas);
		$(".modal-body #nilai_h").val(nilai_h);
		$(".modal-body #guru").val(guru);
		$(".modal-body #nilai_u").val(nilai_u);
		$(".modal-body #nilai").val(nilai);
	})
	</script>
	<script>
		$(document).ready( function () {
    $('#dataTables').DataTable();
} );
	</script>
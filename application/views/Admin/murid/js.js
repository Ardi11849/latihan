
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
	$(document).on("click", "#delete", function(){
		var nis = $(this).data('nis');
		$("a").attr("href", "<?php echo base_url()?>index.php/Murid/delete/"+nis);
	});
		$(document).on("click", "#edit", function(){
		var nis = $(this).data('nis');
		var nama = $(this).data('nama');
		var pass = $(this).data('password');
		var kelas = $(this).data('kelas');
		var alamat = $(this).data('alamat');
		var wali = $(this).data('wali');
		var foto = $(this).data('foto');
		$("form").attr("action", "<?php echo base_url()?>index.php/Murid/ubah/"+nis)
		$(".modal-body #nis").val(nis);
		$(".modal-body #nama").val(nama);
		$(".modal-body #password").val(pass);
		$(".modal-body #kelas").val(kelas);
		$(".modal-body #alamat").val(alamat);
		$(".modal-body #wali").val(wali);
		$(".modal-body #foto").val(foto);
	});
		$(document).ready( function () {
    $('#dataTables').DataTable();
} );
	</script>
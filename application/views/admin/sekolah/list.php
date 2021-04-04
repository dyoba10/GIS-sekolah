<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body id="page-top">

    <?php $this->load->view('admin/_partials/nav.php') ?>

  <div id="wrapper">

    <?php $this->load->view('admin/_partials/sidebar.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <?php $this->load->view('admin/_partials/breadcrumb.php') ?>

      <!-- DataTables -->
      <div class="card mb-3">
        <div class="card-header">
        <a href="<?php echo site_url('admin/sekolah/add') ?>"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Nama Sekolah</th>
                        <th>Gambar</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Website</th>
                        <th>Kontak</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sekolah as $sekolah): ?>
                    <tr>
                        <td width="150">
                            <?php echo $sekolah->nama_sekolah ?>
                        </td>
                        <td>
                            <img src="<?php echo base_url('upload/sekolah/'.$sekolah->gambar) ?>" width="64">
                        </td>
                        <td>
                            <?php echo $sekolah->alamat ?>
                        </td>
                        <td class="medium">
                        <?php echo $sekolah->deskripsi ?>
                        </td>
                        <td>
                         <a href="<?php echo "http://".$sekolah->website ?>"><?php echo $sekolah->website ?></a> 
                        </td>
                        <td>
                        <?php echo $sekolah->kontak?>
                        </td>
                        <td>
                            <?php echo $sekolah->latitude ?>
                        </td>
                        <td>
                            <?php echo $sekolah->longitude ?>
                        </td>
                        <td width="250">
						    <a href="<?php echo site_url('admin/sekolah/edit/'.$sekolah->id_sekolah) ?>"
								 class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
						    <a onclick="deleteConfirm('<?php echo site_url('admin/sekolah/delete/'.$sekolah->id_sekolah) ?>')"
							    href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
						</td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>  
            </div>
        </div>
      </div>  

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view('admin/_partials/modal.php') ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin.min.js')?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('js/demo/datatables-demo.js')?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>
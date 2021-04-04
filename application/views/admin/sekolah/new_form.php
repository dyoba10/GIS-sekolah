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

      <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
	  <?php endif; ?>

      <!-- DataTables -->
      <div class="card mb-3">
        <div class="card-header">
        <a href="<?php echo site_url('admin/sekolah/') ?>"><i class="fas fa-plus"></i> Back</a>
        </div>
        <div class="card-body">
            <form action="<?php base_url('admin/sekolah/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input class="form-control <?php echo form_error('nama_sekolah') ? 'is-invalid':'' ?>"
					    type="text" name="nama_sekolah" placeholder="Nama Sekolah" />
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_sekolah') ?>
                    </div>    
                </div>

                <div class="form-group">
					<label for="name">Gambar</label>
					<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
					    type="file" name="gambar" />
					<div class="invalid-feedback">
						<?php echo form_error('gambar') ?>
				    </div>
                </div>

                <div class="form-group">
					<label for="name">Alamat*</label>
						<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="Alamat"></textarea>
					<div class="invalid-feedback">
						<?php echo form_error('alamat') ?>
					</div>
				</div>

                <div class="form-group">
					<label for="name">Deskripsi*</label>
						<textarea class="form-control <?php echo form_error('Deskripsi') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Deskripsi"></textarea>
					<div class="invalid-feedback">
						<?php echo form_error('deskripsi') ?>
					</div>
				</div>

        <div class="form-group">
					<label for="price">Website</label>
					<input class="form-control <?php echo form_error('website') ? 'is-invalid':'' ?>"
						type="text" name="website" placeholder="Website" />
					 <div class="invalid-feedback">
						<?php echo form_error('website') ?>
				    </div> 
				</div>

        <div class="form-group">
					<label for="price">Kontak</label>
					<input class="form-control <?php echo form_error('kontak') ? 'is-invalid':'' ?>"
						type="text" name="kontak" placeholder="Kontak" />
					 <div class="invalid-feedback">
						<?php echo form_error('kontak') ?>
				    </div> 
				</div>

                <div class="form-group">
					<label for="price">Latitude</label>
					<input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>"
						type="text" name="latitude" placeholder="Latitude" />
					 <div class="invalid-feedback">
						<?php echo form_error('latitude') ?>
				    </div> 
				</div>

                 <div class="form-group">
					<label for="longitude">Longitude</label>
					<input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>"
						type="text" name="longitude" placeholder="Longitude" />
					<div class="invalid-feedback">
						<?php echo form_error('longitude') ?>
				    </div>
				</div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />    
            </form>
        </div>
      </div>  

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © SIG - SMA/SMK 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

</body>

</html>
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
          <a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Details Modal-->
<div class="modal fade" id="edit-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Details Sekolah</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
                <div class="form-group">
	                  <label class="col-lg-2 col-sm-2 control-label">Nama</label>
	                    <div class="col-lg-10">
	                      <input type="hidden" id="id_sekolah" name="id_sekolah">
	                      <input type="text" class="form-control" id="nama_sekolah" name="nama" placeholder="Tuliskan Nama" readonly>
	                    </div>
	              </div>

                <div class="form-group">
	                  <label class="col-lg-2 col-sm-2 control-label">Gambar</label>
	                    <div class="col-lg-10">
                        <img id="imgpreview" src="" style="width: 400px; height: 264px;">
	                    </div>
	              </div>

                <div class="form-group">
	                  <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
	                    <div class="col-lg-10">
                        <textarea class="form-control" id="alamat" name="alamat" readonly></textarea>
	                    </div>
	              </div>
                
                <div class="form-group">
	                  <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
	                    <div class="col-lg-10">
                      <textarea class="form-control" id="deskripsi" name="deskripsi" readonly></textarea>
	                    </div>
	              </div>

                <div class="form-group">
	                  <label class="col-lg-2 col-sm-2 control-label">Website</label>
	                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="website" name="website" readonly>
	                    </div>
	              </div>

                <div class="form-group">
	                  <label class="col-lg-2 col-sm-2 control-label">Kontak</label>
	                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="kontak" name="kontak" readonly>
	                    </div>
	              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_sekolah').attr("value",div.data('id_sekolah'));
            modal.find('#nama_sekolah').attr("value",div.data('nama_sekolah'));
            modal.find('#imgpreview').attr("src",div.data('imgsource'));
            modal.find('#alamat').html(div.data('alamat'));
            modal.find('#deskripsi').html(div.data('deskripsi'));
            modal.find('#website').attr("value",div.data('website'));
            modal.find('#kontak').attr("value",div.data('kontak'));
        });
    });
</script>
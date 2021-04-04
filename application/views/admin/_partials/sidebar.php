<ul class="sidebar navbar-nav">
      <li class="nav-item active" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
        <a class="nav-link" href="<?php echo base_url('admin/') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown" <?php echo $this->uri->segment(2) == 'sekolah' ? 'active': '' ?>>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Sekolah</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar Menu :</h6>
          <a class="dropdown-item" href="<?php echo base_url('admin/sekolah/')?>">List Data Sekolah</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/sekolah/add')?>">Tambah Data Sekolah</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/user/')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
      </li>
    </ul>
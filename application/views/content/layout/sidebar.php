<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <li class="nav-item">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>Home">
      <div class="sidebar-brand-icon">
        <img src="<?php echo base_url() ?>assets/img/logo.png">
      </div>
      <div class="sidebar-brand-text mx-3">Geprek Nana</div>
    </a>
    <hr class="sidebar-divider my-0">
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>Home">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Features
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Master Data</span>
    </a>
    <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">master data</h6>
          <a class="collapse-item" href="<?php echo base_url() ?>Dashboard/beranda">Data Beranda</a>
          <a class="collapse-item" href="<?php echo base_url() ?>Dashboard/menu">Data Menu</a>
      </div>
    </div>
  </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Layanan</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">layanan</h6>
          <a class="collapse-item" href="<?php echo base_url() ?>Dashboard/informasi">Data Informasi</a>
        </div>
      </div>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() ?>" target="_blank">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Lihat Web</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="version">
    Copyright &copy; 2024. Geprek Nana
  </div>
</ul>
<!-- Sidebar -->
<style>
  .card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    /* Add shadow on hover */
    transform: translateY(-5px);
    /* Move the card up slightly on hover */
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    /* Add smooth transition */
  }
</style>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </div>
  <?php if ($_SESSION['is_login'] == true) {
  ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>Selamat Datang <?= $_SESSION['nama'] ?> </strong>
    </div>
  <?php
  }
  ?>
  <div class="row mb-3">
    <!-- Data Balita Card Example -->
    <?php if ($_SESSION['level'] == 1 or $_SESSION['level'] == 2) { ?>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $beranda ?></div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"></span>
                  <div class="text-xs font-weight-bold text-uppercase mb-1">
                      Data
                      Beranda</div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-child fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- Data Kader Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $menu ?></div>
              <div class="mt-2 mb-0 text-muted text-xs">
                <span class="text-success mr-2"></span>
                <div class="text-xs font-weight-bold text-uppercase mb-1">Data Menu</div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-female fa-2x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Data Kematian Card Example -->
    <?php if ($_SESSION['level'] == 1 or $_SESSION['level'] == 2) { ?>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $informasi ?></div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"></span>
                  <div class="text-xs font-weight-bold text-uppercase mb-1">
                      Data Informasi
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- Data  Card Example -->

  </div>
  <!--Row-->

  <!-- <div class="row">
    <div class="col-lg-12 text-left">
      <p>Selamat Datang, 
      // $_SESSION['nama']
        </p>
    </div>
  </div> -->

</div>
<!---Container Fluid-->
</div>
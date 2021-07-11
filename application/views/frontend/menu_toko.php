<section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo base_url('home/menu');?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
          </div>

            <div class="card-body">
              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php endif; ?>

          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Toko <strong>" <?php echo $toko->namaToko ?> "</strong></h4>
                  </div>
                  <div class="card-body">
               <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="<?php echo site_url('toko/detail/'.$toko->idToko);?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('toko/edit/'.$toko->idToko);?>" class="nav-link">Edit</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('toko/produk/'.$toko->idToko);?>" class="nav-link">Produk</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('toko/pesanan');?>" class="nav-link">Pesanan</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('toko/laporan');?>" class="nav-link">Laporan</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Produk</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pesanan</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Transaksi</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
     
          </div>
              </div>
            </div>
  		    </div>
      	</section>
      
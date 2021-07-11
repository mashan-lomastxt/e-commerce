<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
   <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/components.css'); ?>">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="http://localhost/tokokita_dev/index.php" class="navbar-brand sidebar-gone-hide">Tokokita</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Tentang Tokokita</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Cara Belanja</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Hubungi Kami</a></li>
          </ul>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
		  <select data-width="150" class="form-control">
		  		  <option class="form-control">Baju Laki-laki</option>
		  		  <option class="form-control">Celana Cowok</option>
		  		  <option class="form-control">Baju Cewek</option>
		  		  </select>
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="300">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
      
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
     
          </li>

        </ul>
						 <a href="http://localhost/tokokita_dev/index.php/member" class="btn btn-outline-light">Menu Member</a>
		 &nbsp; &nbsp; &nbsp;
		 <a href="http://localhost/tokokita_dev/index.php/member/logout" class="btn btn-outline-light">Logout</a>
				
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
                      <li class="nav-item">
              <a href="#" class="nav-link"><span>Baju Laki-laki</span></a>
            </li>
		              <li class="nav-item">
              <a href="#" class="nav-link"><span>Celana Cowok</span></a>
            </li>
		              <li class="nav-item">
              <a href="#" class="nav-link"><span>Baju Cewek</span></a>
            </li>
		            </ul>
        </div>
      </nav>
	 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
        
          </div>

          <div class="section-body">
         

            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Member</h4>
                  </div>
                  <div class="card-body">
               <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/transaksi" class="nav-link">Transaksi</a></li>
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/riwayat_transaksi" class="nav-link">Riwayat Transaksi</a></li>
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/toko" class="nav-link">Toko</a></li>
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/ubah_profil" class="nav-link">Ubah Profil</a></li>
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/logout" class="nav-link">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
	
              <div class="col-md-8">
			  <form id="setting-form" method="post" enctype="multipart/form-data" action="http://localhost/tokokita_dev/index.php/member/insert_toko">
                  <div class="card" id="settings-card">
                    <div class="card-header">
                      <h4>Form Membuat Toko Baru</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Toko</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" name="nama_toko" class="form-control" id="site-title">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control-label col-sm-3 text-md-right">Deskripsi</label>
                        <div class="col-sm-6 col-md-9">
                          <textarea class="form-control" name="deskripsi" id="site-description"></textarea>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label class="form-control-label col-sm-3 text-md-right">Logo Toko</label>
                        <div class="col-sm-6 col-md-9">
                          <div class="custom-file">
                            <input type="file" name="logo_toko" class="custom-file-input" id="site-logo">
                            <label class="custom-file-label">Choose File</label>
                          </div>
                          <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                        </div>
                      </div>
             
                  
                    </div>
                    <div class="card-footer bg-whitesmoke text-md-right">
                      <button class="btn btn-primary" id="save-btn">Save Changes</button>
                      <button class="btn btn-secondary" type="button">Reset</button>
                    </div>
                  </div>
                </form>
            </div>
  		    </div>
      	</section>
      </div>
 
	  
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
 <script src="<?php echo base_url('assets/admin/assets/js/stisla.js');?>"></script>


  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
   <script src="<?php echo base_url('assets/admin/assets/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/custom.js');?>"></script>
</body>
</html>
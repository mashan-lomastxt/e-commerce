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
                      <li class="nav-item"><a href="<?php echo site_url('member/transaksi'); ?>" class="nav-link">Transaksi</a></li>
                      <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/riwayat_transaksi" class="nav-link">Riwayat Transaksi</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member/toko'); ?>" class="nav-link">Toko</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member/user'); ?>" class="nav-link">Ubah Profil</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member/logout'); ?>" class="nav-link">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
					<div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('member/buattoko'); ?>">Silakan Membuat Toko</a>
                      </li>
               
                    </ul>
                  </div>
                </div>
              </div>
            </div><br>
         
     <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Toko</h4>
                  <div class="card-header-action">
                   
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama Toko</th>
                        <th>Deskripsi</th>
                        <th>Logo</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
											                      <tr>
                        <td>Toko Bagus</td>
                        <td class="font-weight-600">Bagus</td>
												<td>logo_toko.jpg</td>
                        <td>
																								<div class="badge badge-success">Aktif</div>
																								</td>
                        
                        <td>
                          <a href="http://localhost/tokokita_dev/index.php/toko/main/1" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                                     <tr>
                        <td>Toko kedua</td>
                        <td class="font-weight-600">kedua</td>
												<td>logo_toko1.jpg</td>
                        <td>
																								<div class="badge badge-success">Aktif</div>
																								</td>
                        
                        <td>
                          <a href="http://localhost/tokokita_dev/index.php/toko/main/2" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                                     <tr>
                        <td>Toko Baju</td>
                        <td class="font-weight-600">Toko Baju</td>
												<td>logo_toko2.jpg</td>
                        <td>
																								<div class="badge badge-success">Aktif</div>
																								</td>
                        
                        <td>
                          <a href="http://localhost/tokokita_dev/index.php/toko/main/3" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                               
              
               
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>

			
            </div>
  		    </div>
      	</section>
      </div>
 
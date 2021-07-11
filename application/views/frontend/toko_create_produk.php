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
			          <form id="setting-form" method="post" enctype="multipart/form-data" action="<?php echo site_url('toko/insert_produk/'.$toko->idToko);?>">
                      <input type="number" name="id_toko" value="<?php echo $toko->idToko ?>" hidden required>
                  <div class="card" id="settings-card">
                    <div class="card-header">
                      <h4>Form Membuat Produk Baru</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Produk</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" name="namaProduk" class="form-control" id="site-title" required>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">kategori</label>
                        <div class="col-sm-6 col-md-9">
                          <select name="kategori" class="form-control">
                            <?php foreach ($kategori as $key => $value) {
                            ?>
                            <option value="<?php echo $value->idkat ?>"><?php echo $value->namakat ?></option>
                            <?php
                            } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Harga</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="number" name="harga" class="form-control" id="site-title" required>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Stok</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="number" name="stok" class="form-control" id="site-title" required>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Berat</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="number" name="berat" class="form-control" id="site-title" required>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control-label col-sm-3 text-md-right">Deskripsi</label>
                        <div class="col-sm-6 col-md-9">
                          <textarea class="form-control" name="deskripsi" id="site-description" required></textarea>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label class="form-control-label col-sm-3 text-md-right">Foto</label>
                        <div class="col-sm-6 col-md-9">
                          <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="site-logo" required>
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
  		    </div>
      	</section>
      
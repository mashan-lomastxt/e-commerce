<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Pengiriman</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Jasa Pengiriman</a></div>
              <div class="breadcrumb-item">Kota</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="<?php echo site_url('member/save') ;?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Member</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="namaKonsumen" placeholder="Nama Konsumen">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="alamat" placeholder="Alamat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="telepon" placeholder="Telepon">
                      </div>
                    </div>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
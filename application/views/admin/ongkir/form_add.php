<!-- Main Content line 400-->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Forms</h2>
            <div class="row">

              <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="<?php echo site_url('ongkir/save'); ?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Ongkos Kirim</h4>
                  </div>

                  <form>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Kurir</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="inputEmail3" name="Kurir">
                            <option value="">--Pilih--</option>
                            <?php foreach($kurir as $item) {; ?>
                            <option class="form-control" value="<?php echo $item->idKurir; ?>"><?php echo $item->namaKurir; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Asal</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="inputEmail3" name="KotaAsal">
                            <option value="">--Pilih--</option>
                            <?php foreach($kota as $item) {; ?>
                            <option class="form-control" value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="inputEmail3" name="KotaTujuan">
                            <option value="">--Pilih--</option>
                            <?php foreach($kota as $item) {; ?>
                            <option class="form-control" value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ongkir</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Biaya">
                        </div>
                      </div>
                    </div>
                  </form>

                  <div class="card-footer">
                    <button type="Submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<div class="main-content">
        <section class="section">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body"> <form method="POST" action="<?php echo
              site_url('home/act_reg'); ?>"> 
              <div class="row"> 
                <div class="form-group col-6"> 
              <label for="nama">Nama Lengkap</label> 
              <input id="nama" type="text" class="form-control"
              name="nama" autofocus> </div> <div class="form-group
              col-6"> <label for="email">Email</label> <input
              id="email" type="email" class="form-control" name="email">
              </div> </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirm">
                    </div>
                  </div>

                  <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="Alamat">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Kota</label>
                      <select class="form-control selectric">
                        <?php foreach ($kota as $val) {?>
                        <option><?php echo $val->idKota; ?><?php echo $val->namaKota; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Nomor Telepon</label>
                      <input type="text" class="form-control" name="no_telepon">
                    </div>
                  </div> 
                    

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
</div>
  

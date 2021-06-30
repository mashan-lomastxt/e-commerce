       <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Kategori</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <?php echo $this->session->flashdata('pesan'); ?>
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kategori</h4><a href="<?php echo site_url('kategori/add');?>" class="btn btn-primary"> Tambah Kategori</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No. </th>
                          <th>Nama Kategori</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach ($kategori as $item); {?>
                        <tr>
                          <td><?php echo $item->idKat;?></td>
                          <td><?php echo $item->namaKat;?></td>
                         <td><a href="<?php echo site_url('kategori/getid/' .$item->idKat); ?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('kategori/delete/' .$item->idKat); ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                      <?php }?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
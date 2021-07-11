      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Ongkos Kirim</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Ongkos Kirim</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Ongkos Kirim</h2>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-9">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Ongkos Kirim</h4>
                    <a href="<?php echo site_url('ongkir/add'); ?>" class="btn btn-primary">Tambah Ongkos Kirim</a>
                  </div>
                  <?php if ($this->session->flashdata('ting tong')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $this->session->flashdata('ting tong'); ?>
                    </div>
                  <?php } ?>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Kurir</th>
                          <th>Kota Asal</th>
                          <th>Kota Tujuan</th>
                          <th>Ongkir</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach ($ongkir as $item) :?>
                        <tr>  
                          <td><?php echo $item->idBiayaKirim; ?></td>
                          <td><?php echo $item->namaKurir; ?></td>
                          <td><?php echo $item->Asal; ?></td>
                          <td><?php echo $item->Tujuan; ?></td>
                          <td><?php echo $item->biaya; ?></td>
                          <td><a href="<?php echo site_url('ongkir/getid/'.$item->idBiayaKirim); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('ongkir/delete/'.$item->idBiayaKirim); ?>" class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin menghapus data ini ?')" >Hapus</a></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
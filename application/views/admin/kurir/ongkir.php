     <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Manajemen Ongkos Pengiriman</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Jasa Pengiriman</a></div>
            <div class="breadcrumb-item">Ongkos Kirim</div>
          </div>
        </div>

        <div class="section-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <?php echo $this->session->flashdata('pesan'); ?>
              <div class="card">
                <div class="card-header">
                  <h4>Data Ongkos Kirim</h4><a href="<?php echo site_url('ongkir/add');?>" class="btn btn-primary"> Tambah Ongkos Kirim</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">
                      <tr>
                        <th>No. </th>
                        <th>Nama Kurir</th>
                        <th>Kota Asal</th>
                        <th>Kota Tujuan</th>
                        <th>Ongkos Kirim</th>
                        <th>Action</th>
                      </tr>
                      <?php foreach ($ongkir as $item) {?>
                      <tr>
                        <td><?php echo $item->idBiayaKirim;?></td>
                        <td><?php echo $item->namaKurir;?></td>
                        <td><?php echo $item->asal;?></td>
                        <td><?php echo $item->tujuan;?></td>
                        <td><?php echo $item->biaya;?></td>
                       <td><a href="<?php echo site_url('ongkir/getid/' .$item->idBiayaKirim); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('ongkir/delete/' .$item->idBiayaKirim); ?>" class="btn btn-danger">Hapus</a> </td>
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

      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Manajemen Ongkos Kirim</h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="<?php echo site_url('jasakirim/ongkir'); ?>">Ongkos Kirim</a></div>
                      <div class="breadcrumb-item">Ongkir</div>
                  </div>
              </div>
              <div class="section-body">
                  <h2 class="section-title">Data Ongkos Kirim</h2>
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4>Data Ongkos Kirim</h4> <a href="<?= site_url('jasakirim/addOngkir'); ?>" class="btn btn-primary"> Tambah Kurir </a>
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-md">
                                          <tr>
                                              <th>No</th>
                                              <th>Nama Kurir</th>
                                              <th>Kota Asal</th>
                                              <th>Kota Tujuan</th>
                                              <th>Ongkos</th>
                                              <th>Action</th>
                                          </tr>
                                          <?php
                                            $n = 1;
                                            foreach ($ongkir as $item) { ?>
                                              <tr>
                                                  <td><?= $n; ?></td>
                                                  <td><?= $item->namaKurir; ?></td>
                                                  <td><?= $item->kotaAsal; ?></td>
                                                  <td><?= $item->kotaTujuan; ?></td>
                                                  <td><?= $item->biaya; ?></td>
                                                  <td><a class="btn btn-warning" href="<?= site_url('jasakirim/getidOngkir/' . $item->idBiayaKirim); ?>"> Edit </a> <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin menghapus data ini ?')" href="<?= site_url('jasakirim/delOngkir/' . $item->idBiayaKirim); ?>"> Hapus </a></td>
                                              </tr>
                                          <?php $n++;
                                            } ?>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>
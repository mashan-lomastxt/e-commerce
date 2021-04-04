      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Manajemen Kurir</h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="<?php echo site_url('jasakirim/kurir'); ?>">Kurir</a></div>
                      <div class="breadcrumb-item">Kurir</div>
                  </div>
              </div>
              <div class="section-body">
                  <h2 class="section-title">Data Kurir</h2>
                  <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          <div class="card">
                              <div class="card-header">
                                  <h4>Data Kurir</h4> <a href="<?= site_url('jasakirim/addKurir'); ?>" class="btn btn-primary"> Tambah Kurir </a>
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-md">
                                          <tr>
                                              <th>No</th>
                                              <th>Nama Kurir</th>
                                              <th>Action</th>
                                          </tr>
                                          <?php
                                            $n = 1;
                                            foreach ($kurir as $item) { ?>
                                              <tr>
                                                  <td><?= $n; ?></td>
                                                  <td><?= $item->namaKurir; ?></td>
                                                  <td><a class="btn btn-warning" href="<?= site_url('jasakirim/getidKurir/' . $item->idKurir); ?>"> Edit </a> <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin menghapus data ini ?')" href="<?= site_url('jasakirim/delKurir/' . $item->idKurir); ?>"> Hapus </a></td>
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
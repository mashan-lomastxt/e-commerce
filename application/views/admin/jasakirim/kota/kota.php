      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Manajemen Kota</h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="<?php echo site_url('jasakirim/kota'); ?>">Kota</a></div>
                      <div class="breadcrumb-item">kota</div>
                  </div>
              </div>
              <div class="section-body">
                  <h2 class="section-title">Data Kota</h2>
                  <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                          <div class="card">
                              <div class="card-header">
                                  <h4>Data Kota</h4> <a href="<?= site_url('jasakirim/addKota'); ?>" class="btn btn-primary"> Tambah Kota </a>
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-md">
                                          <tr>
                                              <th>No</th>
                                              <th>Nama Kota</th>
                                              <th>Action</th>
                                          </tr>
                                          <?php
                                            $n = 1;
                                            foreach ($kota as $item) { ?>
                                              <tr>
                                                  <td><?= $n; ?></td>
                                                  <td><?= $item->namaKota; ?></td>
                                                  <td><a class="btn btn-warning" href="<?= site_url('jasakirim/getidKota/' . $item->idKota); ?>"> Edit </a> <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin menghapus data ini ?')" href="<?= site_url('jasakirim/delKota/' . $item->idKota); ?>"> Hapus </a></td>
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
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Member</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Member</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Data Member</h2>
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                  <h4>Data Member</h4> <a href="<?php echo site_url('member/add'); ?>" class="btn btn-primary">Tambah Member</a>
                  </div>
                  <?php if ($this->session->flashdata('notif')) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?= $this->session->flashdata('notif'); ?>
                    </div>
                  <?php } ?>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Username</th>
                          <th>Nama Konsumen</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>Telepon</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <?php foreach($member as $item) {?>
                        <tr>
                          <td><?php echo $item->userName; ?></td>
                          <td><?php echo $item->namaKonsumen; ?></td>
                          <td><?php echo $item->alamat; ?></td>
                          <td><?= $item->email; ?></td>
                          <td><?php echo $item->tlpn; ?></td>
                          <td><?= $item->statusAktif;  ?></td>                  
                          <td><a href="<?php echo site_url('member/getid/'.$item->idKonsumen);?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('member/delete/'. $item->idKonsumen);?>" class="btn btn-danger" onclick="javascript: return confirm('Yakin ingin menghapus kah hyung?')" >Hapus</a></td>
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
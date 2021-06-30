<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Manajemen Toko</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Toko</a></div>
        <div class="breadcrumb-item">Main</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Toko</h4><a href="<?php echo site_url('toko/add');?>" class="btn btn-primary"> Tambah Toko</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>No. </th>
                    <th>Nama Toko</th>
                    <th>Logo</th>
                    <th>Deskripsi</th>
                    <th>Status Aktif</th>
                  </tr>
                  <?php foreach ($toko as $item) {?>
                  <tr>
                    <td><?php echo $item->idToko;?></td>
                    <td><?php echo $item->namaToko;?></td>
                    <td><?php echo $item->logo;?></td>
                    <td><?php echo $item->deskripsi;?></td>
                   <td>
                    <?php if($item->StatusAktif=='Y') { ?>
                    <div class="badge badge-success">Aktif</div>
                    <?php } else { ?> 
                    <div class="badge badge-danger">Tidak Aktif</div>
                    <?php } ?>
                    <?php if($item->StatusAktif=='Y') { ?>
                    <a href="<?php echo site_url('toko/non_aktif/'.$item->idToko);?>" class="btn btn-warning">Non Aktif</a>
                    <?php } else { ?>
                    <a href="<?php echo site_url('toko/aktif/'.$item->idToko);?>" class="btn btn-primary">Aktif</a>
                    <?php } ?>
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

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajemen Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?php echo site_url('member'); ?>">Member</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Member</h2>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <td><a href="<?php echo site_url('member/add'); ?>" class="btn btn-primary">Tambah Member</a></td>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Member</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php foreach ($member as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->idKonsumen; ?></td>
                                            <td><?php echo $item->namaKonsumen; ?></td>
                                            <td><a href="<?php echo site_url('member/getid/' . $item->idKonsumen); ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?php echo site_url('member/delete/' . $item->idKonsumen); ?>" onclick="return confirm('Yakin akan menghapus data ini..?')" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
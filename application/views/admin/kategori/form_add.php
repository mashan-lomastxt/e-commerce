<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajemen Kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?php echo site_url('kategori'); ?>">Kategori</a></div>
                <div class="breadcrumb-item">Form Tambah Kategori</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Tambah Kategori</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6"></div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
            <form action="<?php echo site_url('kategori/simpan'); ?>" method="post">
                <div class="card">
                    <div class="card-header">
                        <h4>Horizontal Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="namakat" placeholder="Nama Kategori">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
        </div>
</div>
</div>
</section>
</div>
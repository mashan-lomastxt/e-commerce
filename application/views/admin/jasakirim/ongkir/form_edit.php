<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Edit Data</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Form Edit</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form method="POST" action="<?= site_url('jasakirim/editOngkir'); ?>">
                        <input type="hidden" name="id" value="<?= $ongkir->idBiayaKirim; ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Biaya Kirim</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kurir</label>
                                    <div class="col-sm-9">
                                        <select name="idKurir" class="form-control selectric">
                                            <?php foreach ($kurir as $key) { ?>
                                                <option value="<?= $key->idKurir; ?>" <?= $ongkir->idKurir == $key->idKurir ? "selected" : null ?>> <?= $key->namaKurir; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Asal</label>
                                    <div class="col-sm-9">
                                        <select name="kotaAsal" class="form-control selectric">
                                            <?php foreach ($kota as $key) { ?>
                                                <option value="<?= $key->idKota; ?>" <?= $ongkir->idKotaAsal == $key->idKota ? "selected" : null ?>> <?= $key->namaKota; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                                    <div class="col-sm-9">
                                        <select name="kotaTujuan" class="form-control selectric">
                                            <?php foreach ($kota as $key) { ?>
                                                <option value="<?= $key->idKota; ?>" <?= $ongkir->idKotaTujuan == $key->idKota ? "selected" : null ?>> <?= $key->namaKota; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Ongkos</label>
                                    <div class="col-sm-9">
                                        <input type="numeric" class="form-control" id="inputEmail3" name="biaya" placeholder="Ongkos Kirim" value="<?= $ongkir->biaya ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
</div>
</section>
</div>
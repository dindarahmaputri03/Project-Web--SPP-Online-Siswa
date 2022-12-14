<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <div class="row">

        <!-- card -->
        <div class="card shadow mb-4 py-4 px-4 col-12">

            <form method="post" action="<?= base_url('admin/tambahkurikulum'); ?>">
                <div class="row">
                    <div class="col-lg">
                        <div class="form-group">
                            <label for="nama">Nama Kurikulum</label>
                            <select class="form-control" name="nama" id="nama" type="text">
                                <option value="">-- Pilih kurikulum --</option>
                                <option value="K-2022 Paket">K-2022 Paket</option>
                                <option value="K-2022 SKS">K-2022 SKS</option>
                                <option value="K-2018 (KTSP)">K-2018 (KTSP)</option>
                            </select>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" name="semester" id="semester" type="text">
                                <option value="">-- Pilih Semester --</option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                            </select>
                            <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" class="form-control" id="tahun" name="tahun">
                            <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('admin/master'); ?>">Batal</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!-- /.card -->

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
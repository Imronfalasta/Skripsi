<?= $this->extend('template/template-admin') ?>
<?= $this->section('content'); ?>


<div class="col-sm-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><b>DATA SANTRI</b></h2>

                    <div class="card-header">
                        <div class="input-group input-group-sm" style="width: 140px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th whidth="70">#</th>
                                    <th>Nama Santri</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($santri as $key => $value) { ?>
                                    <tr>
                                        <td <?= $no++ ?>></td>
                                        <td><?= $value['nama_santri'] ?></td>
                                        <td><?= $value['alamat']; ?></td>
                                        <td><?= $value['tanggal_lahir']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
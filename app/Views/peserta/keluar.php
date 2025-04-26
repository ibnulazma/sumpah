<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<?php
$db     = \Config\Database::connect();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();

?>

<div class="content-header">
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title"><?= $subtitle ?></h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7">
                        <h5>Daftar Peserta Didik Keluar</h5>
                        </p>
                    </div>

                </div>

                <table class="table table-bordered" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>L/P</th>
                            <th>NIK</th>
                            <th>NISN</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu</th>
                            <th>Tanggal Keluar</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($keluar as $key => $value) { ?>
                            <tr class="text-center">
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['nama_siswa'] ?></td>
                                <td><?= $value['jenis_kelamin'] ?></td>
                                <td><?= $value['nik'] ?></td>
                                <td><?= $value['nisn'] ?></td>
                                <td><?= formatindo($value['tanggal_lahir']) ?></td>
                                <td><?= $value['nama_ibu'] ?></td>
                                <td><?= formatindo($value['tgl_ajuan']) ?></td>
                                <td><a href="<?= base_url('peserta/printmohon/' . $value['nisn']) ?>" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i></a></td>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach ($keluar as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_siswa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open('surat/tambahsiswa/' . $value['id_siswa']) ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Print Surat siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">No Surat</label>
                        <input type="text" class="form-control" name="no_surat" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-print"></i> Print</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
<?php } ?>



<?= $this->endSection() ?>
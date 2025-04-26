<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

<div class="content-header">
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Tambah Keluarga</h1>
            </div>
            <div class="card-body">

                <?php if ($data['status_pernikahan'] == 1) { ?>

                <?php } elseif ($data['status_pernikahan'] == 2) { ?>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Anggota Keluarga
                    </button>

                <?php } elseif ($data['status_pernikahan'] == 3) { ?>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Anggota Keluarga
                    </button>
                <?php } ?>
            </div>
        </div>
    </div>
</div>



<?php if ($data['status_pernikahan'] == 1) { ?>
    Silahkan Menikah Dahulu

<?php } elseif ($data['status_pernikahan'] == 2) { ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">
                            Anggota Keluarga
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nama Anggota</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($keluarga as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_anggota'] ?></td>
                                        <td><?= $data['status'] ?></td>
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
<?php } elseif ($data['status_pernikahan'] == 3) { ?>
    </div>
    </div>
<?php } ?>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?= form_open('pendidik/tambahkeluarga') ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <div class="col-4">
                        <label for="">Nama Anggota Keluarga</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="nama_anggota" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4">
                        <label for="">Hubungan Keluarga</label>
                    </div>
                    <div class="col-8">
                        <select name="status" id="" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                            <option value="Anak Kandung">Anak Kandung</option>
                            <option value="Anak Tiri">Anak Tiri</option>
                        </select>
                    </div>
                </div>
                <input type="text" name="id_guru" value="<?= $data['id_guru'] ?>">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>

<?= $this->endSection() ?>
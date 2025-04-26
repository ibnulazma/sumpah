<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>

<?php

$db     = \Config\Database::connect();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();

?>

<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title"><?= $subtitle ?></h5>
            <p class="text-muted mb-4">Tahun Pelajaran <b>Aktif</b> <?= $ta['ta'] ?> Semester <b> <?= $ta['semester'] ?></b></p>
        </div>
    </div>
    <div class="nav-align-top mb-6">
        <ul class="nav nav-pills mb-4" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">Aktif</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">Keluar</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-lulus" aria-controls="navs-pills-top-lulus" aria-selected="false">Lulus</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">Verifikasi</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-tambahsiswa" aria-controls="navs-pills-top-messages" aria-selected="false">Tambah Siswa</button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-bordered" id="guru">
                        <thead>
                            <tr>
                                <th class="text-center">#</i></th>
                                <th class="text-center">NUPTK</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">NIY</th>
                                <th class="text-center">Nama Guru</th>
                                <th class="text-center">Wali Kelas</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($guru as $key => $row) { ?>
                                <tr>
                                    <td class="text-center"><a href=""><i class="bx bxs-user"></i></a></td>
                                    <td class="text-center"><?= $row['nuptk'] ?></td>
                                    <td class="text-center"><?= $row['nik'] ?></td>
                                    <td class="text-center"><?= $row['niy'] ?></td>
                                    <td><?= $row['nama_guru'] ?></td>
                                    <td class="text-center">
                                        <?php if ($row['walas'] = 1) { ?>
                                            <span class="badge bg-info">Ya</span>
                                        <?php } else { ?>
                                            <span class="badge bg-danger">Tidak</span>
                                        <?php } ?>



                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>



            </div>
            <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
<<<<<<< HEAD:app/Views/ptk/v_guru.php
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>NUPTK</th>
                                    <th>NIK</th>
                                    <th>NIY</th>
                                    <th>NAMA</th>
                                    <th>WALAS</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
=======
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">NISN</th>
                                    <th class="text-center">Nama Siswa</th>
                                    <th class="text-center">TTL</th>
                                    <th class="text-center">L/P</th>
                                    <th class="text-center">Tingkat</th>
                                    <th class="text-center">Alasan</th>
                                    <th class="text-center"></th>
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15:app/Views/admin/v_guru.php
                                </tr>
                            </thead>
                            <tbody>

<<<<<<< HEAD:app/Views/ptk/v_guru.php
                                <?php $no = 1;
                                foreach ($guru as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?= $value["nuptk"] ?></td>
                                        <td class="text-center"><?= $value["nik_guru"] ?></td>
                                        <td class="text-center"><?= $value["niy"] ?></td>
                                        <td><?= $value["nama_guru"] ?></td>
                                        <td class="text-center">
                                            <?php if ($value['walas'] == 1) { ?>
                                                <i class="fa-solid fa-circle-check fa-lg" style="color: #63E6BE;"></i>
                                            <?php } else if ($value['status_guru'] == 2) { ?>
                                                <i class="fa-solid fa-circle-xmark fa-lg" style="color: #e6053d;"></i>
                                            <?php } ?>
                                        </td>
                                        <td class="text-center">

                                            <?php if ($value['status_guru'] == 0) { ?>
                                                <span class="badge badge-danger ">belum aktif</span>
                                            <?php } else if ($value['status_guru'] == 1) { ?>
                                                <button data-toggle="modal" data-target="#edit<?= $value['id_guru'] ?>" class="btn btn-danger btn-xs ">verifikasi</button>
                                            <?php } else if ($value['status_guru'] == 2) { ?>
                                                <a href="" class="btn btn-danger btn-xs ">aktif</a>
                                            <?php } ?>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#edit<?= $value['id_guru'] ?>"> <i class="fas fa-pencil"></i> </a>
                                            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapus<?= $value['id_guru'] ?>"> <i class=" fas fa-trash-alt"></i></button>
                                            <a class="btn btn-xs btn-info" href="<?= base_url('guru/detail_guru/' . $value['id_guru']) ?>"> <i class=" fas fa-user"></i></a>
                                        </td>

                                    </tr>
                                <?php } ?>
=======
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15:app/Views/admin/v_guru.php
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-lulus" role="tabpanel">

            </div>
            <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">

                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-top-tambahsiswa" role="tabpanel">

            </div>
        </div>
    </div>
</div>










<!-- Tambah Guru Single -->

<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo form_open_multipart('guru/add') ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah PTK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <input type="text" class="form-control" name="nama_guru">
                </div>
                <div class="form-group">
                    <label for="">NIY</label>
                    <input type="text" class="form-control" name="niy">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="">Wali Kelas</label>
                    <select name="walas" id="" class="form-control">
                        <option value="">-Walas Atau Tidak-</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-left">Simpan</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>
<!-- Upload Guru -->
<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo form_open_multipart('guru/add') ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="<?= base_url('guru/templateGuru') ?>" class="btn btn-outline-success btn-lg"> <i class="fas fa-file-excel mr-2"></i> Download Template</a>
                <?= form_open_multipart('peserta/upload') ?>
                <div class="form-group mt-2">
                    <label for="exampleInputFile">
                        <h5>File input</h5>
                    </label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="fileimport" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-folder"></i></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pull-left">Simpan</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>


<!-- Edit -->

<?php foreach ($guru as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_guru'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <?php echo form_open('guru/edit/' . $value['id_guru']); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit PTK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Guru</label>
                        <input type="text" class="form-control" name="nama_guru" value="<?= $value['nama_guru'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Wali Kelas</label>
                        <select name="walas" id="" class="form-control">
                            <option value="">-Walas Atau Tidak-</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Guru</label>
                        <input type="text" class="form-control" name="link_wa" value="<?= $value['link_wa'] ?>">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
<?php } ?>







<?php foreach ($guru as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_guru'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open('guru/nonaktif/' . $value['id_guru']) ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proses Non Aktif PTK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah yakin akan menonaktifkan PTK A.N <?= $value['nama_guru'] ?> ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
                <?= form_close() ?>
            </div>

        </div>
    </div>
<?php } ?>


<?= $this->endSection() ?>
<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>







<?php
$db     = \Config\Database::connect();


$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();


?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-3 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang <?= $siswa['nama_siswa'] ?>! 🎉</h5>

                            <?php if ($siswa['status_daftar'] == '1') { ?>
                                <p class="mb-4 text-danger">
                                    Anda terdeteksi belum update data. Silahkan klik tombol di bawah untuk update data !!!
                                </p>
                                <a href="<?= base_url('siswa/edit_alamat/' . $siswa['id_siswa']) ?>" class="btn btn-sm btn-outline-danger">Update Data</a>
                            <?php } else if ($siswa['status_daftar'] == '2') { ?>
                                <p class="mb-4 text-warning">
                                    Data anda sedang diverifikasi oleh Admin. Hubungi admin untuk verifikasi data anda!!
                                </p>
                            <?php } else if ($siswa['status_daftar'] == '3') { ?>
                                <p class="mb-4">
                                    Semester Aktif: <span class="fw-bold">Ganjil</span> Tahun Ajaran <?= $ta['ta'] ?>
                                </p>

                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">

<<<<<<< HEAD
                <?php  } else if ($siswa['status_daftar'] == 2) { ?>

                    <div class="bg-warning p-2">
                        Verifikasi : <b>Silahkan Bawa Ijazah dan Kartu Keluarga Asli Ke Sekolah untuk melakukan scan oleh TU !!!</b>

                    </div>

                <?php  } else if ($siswa['status_daftar'] == 3) { ?>
                    <div class="bg-primary p-2">
                        Final: Data Anda Sudah Aktif !!!
                    </div>

                <?php } else if ($siswa['status_daftar'] == 4) { ?>
                    <div class="small-box bg-danger">
                        Perhatian: Data Anda Silahkan Perbaiki Data Yang Salah !!!!
                    </div>
                <?php } ?>


                <div class="card mt-2">
                    <div class="card-header">
                        <p class="card-title">
                            Selamat Datang
                        </p>
                    </div>
                    <div class="card-body">
                        <p> Selamat Datang <strong><?= $siswa['nama_siswa'] ?></strong> di Sistem Informasi Akademik SMP INSAN KAMIL <br></p>
                        <h5>TAHUN PELAJARAN AKTIF : Semester <?= $ta['semester'] ?> <?= $ta['ta'] ?></h5>
                    </div>
                    <div class="card-footer">
                        <?php if ($siswa['status_daftar'] == 0) { ?>
                            <a href="<?= base_url('siswa/edit_alamat/' . $siswa['id_siswa']) ?>" class="btn btn-danger"><i class="fas fa-pencil"></i> Update Data </a>
                        <?php } elseif ($siswa['status_daftar'] == 1) { ?>
                            <a href="<?= base_url('siswa/edit_alamat/' . $siswa['id_siswa']) ?>" class="btn btn-danger"><i class="fas fa-pencil"></i> Update Data </a>

                        <?php } elseif ($siswa['status_daftar'] == 2) { ?>
                            <p class="btn btn-warning"><i class="fas fa-list"></i> Verifikasi </p>
                        <?php } ?>
=======
                            <?php if ($siswa['jenis_kelamin'] == 'L') { ?>
                                <img
                                    src="<?= base_url() ?>/template/assets/img/illustrations/man.png"
                                    height="140"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            <?php  } else { ?>
                                <img
                                    src="<?= base_url() ?>/template/assets/img/illustrations/girls.png"
                                    height="150"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/girls.png"
                                    data-app-light-img="illustrations/girls.png" />
                            <?php } ?>
                        </div>
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <a href="<?= base_url('siswa/portofolio') ?>" class="btn btn-success"><i class="bx bx-bullseye"></i> Rangkuman Data</a>
        </div>
    </div>
</div>






<<<<<<< HEAD
=======






















































>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15
<?= $this->endSection() ?>
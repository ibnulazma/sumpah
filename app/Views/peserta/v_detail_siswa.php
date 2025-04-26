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

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4 pb-4 border-bottom">
                        <?php
                        $gender = "L";
                        if ($gender == $siswa['jenis_kelamin']) { ?>
                            <img src="<?= base_url('foto/muslim.png') ?>" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                        <?php } else { ?>
                            <img src="<?= base_url('foto/woman.png') ?>" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                        <?php  } ?>
                        <div class="text-center">
<<<<<<< HEAD:app/Views/peserta/v_detail_siswa.php
                            <?php if ($siswa['foto_siswa'] == null) { ?>
                                <?php
                                $gender = "L";
                                if ($gender == $siswa['jenis_kelamin']) { ?>

                                    <img class="img-profil" src="<?= base_url('foto/muslim.png') ?>" id="profileDisplay" onClick="triggerClick()" id="profileDisplay">
                                    <input type="file" name="foto_siswa" onChange="displayImage(this)" id="profileImage" class="form-control" style="display:none">

                                <?php } else { ?>
                                    <img class="img-profil" src="<?= base_url('foto/woman.png') ?>" alt="User profile picture" style="" onClick="triggerClick()" id="profileDisplay">
                                    <input type="file" name="foto_siswa" onChange="displayImage(this)" id="profileImage" class="form-control" style="display:none">
                                <?php  } ?>

                            <?php  } else { ?>
                                <img class="img-profil" src="<?= base_url('foto_siswa/' . $siswa['foto_siswa']) ?>" alt="User profile picture" style="" onClick="triggerClick()" id="profileDisplay">
                                <input type="file" name="foto_siswa" onChange="displayImage(this)" id="profileImage" class="form-control" style="display:none">
                            <?php    } ?>
                        </div>

                        <!-- <input type=" file" name="foto_siswa" class="form-control"> -->
                        <button type="submit" class="btn btn-primary btn-sm mb-3 mt-2">Save Foto</button>
                        <?= form_close() ?>

                        <h3 class="profile-username text-center"><?= $siswa['nama_siswa'] ?></h3>
                        <p class="text-muted text-center">(<?= $siswa['nisn'] ?> / <?= $siswa['nis'] ?>)</p>
                    </div>
                    <div class="card-footer text-center">
                        <?php if ($siswa['status_daftar'] == 1) { ?>
                            <span class="badge bg-danger">belum aktif</span>
                        <?php } elseif ($siswa['status_daftar'] == 2) { ?>
                            <a class="btn btn-xs btn-info" href="<?= base_url('peserta/verifikasi/' .  $siswa['nisn']) ?>" class="btn btn-info">verifikasi</a>
                        <?php } elseif ($siswa['status_daftar'] == 3) { ?>
                            <span class="badge bg-success">aktif</span>
                        <?php } ?>
=======
                            <h3 class="profile-username text-center"><?= $siswa['nama_siswa'] ?></h3>
                            <p class="text-muted text-center">(<?= $siswa['nisn'] ?> / <?= $siswa['nis'] ?>)</p>
                            <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#fullscreenModal">edit</a>
                            <button class="btn btn-danger btn-sm">edit</button>
                        </div>
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15:app/Views/admin/peserta/v_detail_siswa.php
                    </div>

                    <div class="card-body border-bottom mb-4">
                        <ul class="mb-3 p-0" style="list-style: none;">
                            <li class="d-flex justify-content-between align-items-center">
                                Jenis Kelamin
                                <span> <?php
                                        $gender = "L";
                                        if ($gender == $siswa['jenis_kelamin']) { ?>
                                        Laki-laki
                                    <?php } else { ?>
                                        Perempuan
                                    <?php  } ?>
                                </span>

                            </li>
                            <hr>
                            <li class="d-flex justify-content-between align-items-center">
                                Tempat Lahir
                                <span> <?= $siswa['tempat_lahir'] ?> </span>
                            </li>
                            <hr>
                            <li class="d-flex justify-content-between align-items-center">
                                Tanggal Lahir
                                <span> <?= formatindo(date($siswa['tanggal_lahir']))  ?> </span>
                            </li>
                            <hr>
                            <li class="d-flex justify-content-between align-items-center">
                                Ibu kandung
                                <span> <?= $siswa['nama_ibu'] ?> </span>
                            </li>
<<<<<<< HEAD:app/Views/peserta/v_detail_siswa.php

=======
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15:app/Views/admin/peserta/v_detail_siswa.php
                        </ul>
                    </div>
                    <div class="pembelajaran border-bottom mb-4">
                        <h5>Pembelajaran</h5>
                        <ul style="list-style: none;">
                            <li>Rombel : 7.2</li>
                            <li>Tingkat Pendidikan: <?= $siswa['tingkat'] ?></li>
                            <li>Semester Aktif : <?= $ta['ta'] ?>/<b><?= $ta['semester'] ?></b></li>
                        </ul>
                    </div>

                    <div class="mapii">
                        <h5>Tempat Tinggal</h5>
                        <p><?= $siswa['alamat'] ?> RT <?= $siswa['rt'] ?> RW <?= $siswa['rw'] ?></p>
                        <p>Desa/Kel <?= $siswa['desa'] ?> Kec. <?= $siswa['kecamatan'] ?></p>
                        <div id="map" style="height:500px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="nav-align-top mb-6">
                <ul class="nav nav-pills mb-4" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">Data Atribut</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">Rekam Didik</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">Messages</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Identitas</h5>
                                <ul class="atribut" style="list-style:none">
                                    <li class="p-0">
                                        NIK :
                                        <span><?= $siswa['nik'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Agama :
                                        <span>Islam</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Kewarganegaraan :
                                        <span>Indonesia</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Kebutuhan Khusus :
                                        <span>Tidak Ada</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Alat Transportasi :
                                        <span><?= $siswa['transportasi'] ?></span>
                                    </li>
                                    <hr>
                                </ul>
                                <h5>Registrasi</h5>
                                <ul class="atribut" style="list-style:none">
                                    <li class="p-0">
                                        NIPD
                                        <span><?= $siswa['nis'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Nomor Seri Ijazah
                                        <span><?= $siswa['seri_ijazah'] ?></span>
                                    </li>
                                    <hr>
                                </ul>
                                <h5>DATA LAINNYA</h5>
                                <ul class="atribut" style="list-style:none">
                                    <li class="p-0">
                                        Tinggi Badan
                                        <span><?= $siswa['tinggi'] ?> cm</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Berat Badan
                                        <span><?= $siswa['berat'] ?> cm</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Anak Ke
                                        <span><?= $siswa['anak_ke'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Jumlah Saudara
                                        <span><?= $siswa['jml_saudara'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Hobi
                                        <span><?= $siswa['hobi'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Cita-cita
                                        <span><?= $siswa['cita_cita'] ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h5>Jenis Tinggal</h5>
                                <ul class="atribut" style="list-style:none">
                                    <li class="p-0">
                                        Tinggal:
                                        <span><?= $siswa['tinggal'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Nomor Telp:
                                        <span><?= $siswa['telp_anak'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Email:
                                        <span>Indonesia</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Kebutuhan Khusus :
                                        <span>Tidak Ada</span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Alat Transportasi :
                                        <span><?= $siswa['transportasi'] ?></span>
                                    </li>
                                    <hr>
                                </ul>
                                <h5>Orang Tua</h5>
                                <ul class="atribut" style="list-style:none">
                                    <li class="p-0">
                                        Nama Ayah:
                                        <span><?= $siswa['nama_ayah'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        No Hp :
                                        <span><a href="https://wa.me/<?= gantiformat($siswa['telp_ayah']) ?>" target="_blank"><?= gantiformat($siswa['telp_ayah']) ?></a></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        Nama Ibu :
                                        <span><?= $siswa['nama_ayah'] ?></span>
                                    </li>
                                    <hr>
                                    <li class="p-0">
                                        No Hp:
                                        <span><a href="https://wa.me/<?= gantiformat($siswa['telp_ibu']) ?>" target="_blank"><?= gantiformat($siswa['telp_ibu']) ?></a></span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <button class="btn btn-primary btn-sm mb-4" data-bs-toggle="modal" data-bs-target="#pilihkelas">Pilih Kelas</button>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Semester</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rekamdidik as $key => $value) { ?>
                                    <tr>
                                        <td><?= $value['ta'] ?> <?= $value['semester'] ?></td>
                                        <td><?= $value['kelas'] ?> <?= $value['nama_guru'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
<<<<<<< HEAD:app/Views/peserta/v_detail_siswa.php
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <strong>ALAMAT</strong>
                        </h5>
                        <button class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#alamat"><i class="fas fa-edit"></i> </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-unbordered mb-3">

                                    <li class="list-group-item">
                                        <span> Alamat: <?= $siswa['alamat'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <span> RT/ RW: <?= $siswa['rt'] ?>/<?= $siswa['rw'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <span> Desa/Kel: <?= $siswa['desa'] ?> </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <span> Kec: <?= $siswa['nama_kecamatan'] ?> </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span> Kab/Kota: <?= $siswa['city_name'] ?> </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span> Kode Pos: <?= $siswa['kodepos'] ?> </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <strong>DATA ORANG TUA</strong>
                        </h5>
                        <button class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#orangtua"><i class="fas fa-edit"></i> </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <span> Nama Ayah: <?= $siswa['nama_ayah'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        NIK Ayah: <?= $siswa['nik_ayah'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Tahun Lahir: <?= $siswa['tahun_ayah'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Pendidikan : <?= $siswa['didik_ayah'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Pekerjaan : <?= $siswa['kerja_ayah'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Penghasilan : <?= $siswa['hasil_ayah'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Telp : <a href="https://wa.me/<?= gantiformat($siswa['telp_ayah']) ?>" target="_blank"><?= gantiformat($siswa['telp_ayah']) ?></a> </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <span> Nama Ibu: <?= $siswa['nama_ibu'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        NIK Ibu: <?= $siswa['nik_ibu'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Tahun Lahir: <?= $siswa['tahun_ibu'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Pendidikan : <?= $siswa['didik_ibu'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Pekerjaan : <?= $siswa['kerja_ibu'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Penghasilan : <?= $siswa['hasil_ibu'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Telp : <a href="https://wa.me/<?= gantiformat($siswa['telp_ibu']) ?>" target="_blank"><?= gantiformat($siswa['telp_ibu']) ?></a> </span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">DATA PERIODIK dan REGISTRASI</h5>
                        <button class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#periodik"><i class="fas fa-edit"></i> </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-unbordered mb-3">

                                    <li class="list-group-item">
                                        <span> Anak Ke : <?= $siswa['anak_ke'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <span> Berat Badan : <?= $siswa['berat'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Tinggi Badan : <?= $siswa['tinggi'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Lingkar Kepala : <?= $siswa['lingkar'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Jumlah Saudara : <?= $siswa['jml_saudara'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Tinggal Bersama : <?= $siswa['tinggal'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Transportasi : <?= $siswa['transportasi'] ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        Hobi: <?= $siswa['hobi'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        Cita-cita: <?= $siswa['cita_cita'] ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        No Telp : <a href="https://wa.me/<?= gantiformat($siswa['telp_anak']) ?>" target="_blank"><?= gantiformat($siswa['telp_anak']) ?></a></span>
                                    </li>
                                    <li class="list-group-item">
                                        No Seri Ijazah : <?= $siswa['seri_ijazah'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Berkas</h5>
=======
                    <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                        <p>
                            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
                            bears
                            cake chocolate.
                        </p>
                        <p class="mb-0">
                            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
                            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
                            jelly.
                        </p>
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15:app/Views/admin/peserta/v_detail_siswa.php
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFullTitle">Edit Biodata Peserta Didik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Data Diri</h5>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="basic-default-company">Nama Siswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="basic-default-company" placeholder="<?= $siswa['nama_siswa'] ?>" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="basic-default-company">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <select name="" id="" class="form-select">

                                    <?php if ($siswa['jenis_kelamin'] == 'L') {
                                        echo  "<option value='L' selected>Laki-laki</option>";
                                    } else {
                                        echo  "<option value='L'>Laki-laki</option>";
                                    }

                                    if ($siswa['jenis_kelamin'] == 'P') {
                                        echo  "<option value='P' selected>Perempuan</option>";
                                    } else {
                                        echo  "<option value='P'>Perempuan</option>";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="tempat">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tempat" placeholder="<?= $siswa['tempat_lahir'] ?>" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="date">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="date" placeholder="<?= $siswa['tanggal_lahir'] ?>" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="nik">NIK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nik" placeholder="<?= $siswa['nik'] ?>" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="nisn">NISN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nisn" placeholder="<?= $siswa['nisn'] ?>" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="no_kk">No KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="no_kk" placeholder="<?= $siswa['no_kk'] ?>" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="basic-default-company">Provinsi</label>
                            <div class="col-sm-8">
                                <select name="provinsi" id="provinsi" class="form-select">
                                    <option value="">Pilih Provinsi</option>
                                    <?php foreach ($provinsi as $key => $prov) { ?>
                                        <?php if ($siswa['provinsi'] == $prov['id_provinsi']) {
                                            $select = "selected";
                                        } else {
                                            $select = "";
                                        }
                                        echo "<option value=" . $prov['id_provinsi'] . " $select>" . $prov['prov_name'] . "</option>";
                                        ?>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="basic-default-company">Kabupaten</label>
                            <div class="col-sm-8">
                                <select name="id_kabupaten" id="kabupaten" class="form-select">
                                    <option value=""><?= $siswa['city_name'] ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="basic-default-company">Kecamatan</label>
                            <div class="col-sm-8">
                                <select name="id_kecamatan" id="kecamatan" class="form-select">
                                    <option value=""><?= $siswa['nama_kecamatan'] ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="basic-default-company">Desa</label>
                            <div class="col-sm-8">
                                <select name="" id="desa" class="form-select">
                                    <option value=""><?= $siswa['desa'] ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="kodepos">Kode Pos</label>
                            <div class="col-sm-8">
                                <input type="text" name="kodepos" id="kodepos" class="form-control" value="<?= $siswa['kodepos'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5> DATA LAINNYA</h5>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="tempattinggal">Tempat Tinggal</label>
                            <div class="col-sm-8">
                                <select name="tinggal" id="tempattinggal" class="form-control">
                                    <?php foreach ($tinggal as $key => $row) { ?>
                                        <?php if ($siswa['tinggal'] == $row['tinggal']) {
                                            $select = "selected";
                                        } else {
                                            $select = "";
                                        }
                                        echo "<option value=" . $row['tinggal'] . " $select>" . $row['tinggal'] . "</option>";
                                        ?>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="transportasi">Transportasi</label>
                            <div class="col-sm-8">
                                <select name="transportasi" id="transportasi" class="form-control">
                                    <?php foreach ($transportasi as $key => $row) { ?>
                                        <?php if ($siswa['transportasi'] == $row['transportasi']) {
                                            $select = "selected";
                                        } else {
                                            $select = "";
                                        }
                                        echo "<option value=" . $row['transportasi'] . " $select>" . $row['transportasi'] . "</option>";
                                        ?>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="tempattinggal">Anak Ke</label>
                            <div class="col-sm-8">
                                <input type="text" name="" id="" class="form-control" value="<?= $siswa['jml_saudara'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="pilihkelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= form_open('peserta/masukkelas/' . $siswa['nisn']) ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="id_kelas" id="" class="form-control">
                                <option value="">Pilih Kelas</option>
                                <?php foreach ($kelas as $k) { ?>
                                    <option value="<?= $k['id_kelas'] ?>"><?= $k['kelas'] ?> | <?= $k['nama_guru'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk"></i> Submit</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>




<script src="<?= base_url() ?>/template/assets/vendor/libs/jquery/jquery.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
    const map = L.map('map').setView([-6.282785267302884, 106.5934756654008], 14);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {

        attribution: '&copy; SMPINKA'
    }).addTo(map);

    L.marker([<?= $siswa['latitude'] ?>, <?= $siswa['longitude'] ?>])
        .bindPopup("<b><?= $siswa['nama_siswa'] ?></b>").addTo(map)
        .openPopup();
</script>




<script>
    $(document).ready(function() {
        $("#provinsi").change(function() {
            var id_kabupaten = $("#provinsi").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Peserta/dataKabupaten') ?>/' + id_kabupaten,
                success: function(html) {
                    $("#kabupaten").html(html);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#kabupaten").change(function() {
            var id_kecamatan = $("#kabupaten").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Peserta/dataKecamatan') ?>/' + id_kecamatan,
                success: function(html) {
                    $("#kecamatan").html(html);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#kecamatan").change(function() {
            var id_desa = $("#kecamatan").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Peserta/dataDesa') ?>/' + id_desa,
                success: function(html) {
                    $("#desa").html(html);
                }
            });
        });
    });
</script>

<?= $this->endSection() ?>
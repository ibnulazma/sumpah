<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>



<div class="content-header">
    <?php if ($data['status_guru'] == 0) { ?>

        <div class="container-fluid mt-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Edit Identitas</h1>
                </div>
                <div class="card-body">
                    <?= form_open('pendidik/editguru/' . $data['id_guru']) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nama_guru">Nama Lengkap</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" name="nama_guru" value="<?= $data['nama_guru'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Tempat Lahir</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('tmpt_lahir')) ? 'is-invalid' : ''; ?>" name="tmpt_lahir" value="<?= $data['tmpt_lahir'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tmpt_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" name="tgl_lahir" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tgl_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" value="<?= $data['email'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">No Hp/WA</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('telp_guru')) ? 'is-invalid' : ''; ?>" name="telp_guru" value="<?= gantiformat($data['telp_guru']) ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('telp_guru'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Alamat Domisili</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('alamat_guru')) ? 'is-invalid' : ''; ?>" name="alamat_guru" value="<?= $data['alamat_guru'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat_guru'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">RT</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control <?= ($validation->hasError('rt_guru')) ? 'is-invalid' : ''; ?>" name="rt_guru" value="<?= $data['rt_guru'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('rt_guru'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">RW</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control <?= ($validation->hasError('rw_guru')) ? 'is-invalid' : ''; ?>" name="rw_guru" value="<?= $data['rw_guru'] ?>">
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('rw_guru'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Desa/Kel</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('desa_guru')) ? 'is-invalid' : ''; ?>" name="desa_guru" value="<?= $data['desa_guru'] ?>">
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('desa_guru'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Kecamatan</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('kec_guru')) ? 'is-invalid' : ''; ?>" name="kec_guru" value="<?= $data['kec_guru'] ?>">
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('kec_guru'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Kabupaten</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('kab_guru')) ? 'is-invalid' : ''; ?>" name="kab_guru" value="<?= $data['kab_guru'] ?>">
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('kab_guru'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Nama Ibu</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('ibu_guru')) ? 'is-invalid' : ''; ?>" name="ibu_guru" value="<?= $data['ibu_guru'] ?>">
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('ibu_guru'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Status Pernikahan</label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="status_pernikahan" id="" class="form-control <?= ($validation->hasError('status_pernikahan')) ? 'is-invalid' : ''; ?>">
                                        <option value="">-Pilih Salah Satu-</option>
                                        <option value="1">Belum Menikah</option>
                                        <option value="2">Menikah</option>
                                        <option value="3">Duda/Janda</option>
                                    </select>
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('status_pernikahan'); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Link Grup WA</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control <?= ($validation->hasError('link_wa')) ? 'is-invalid' : ''; ?>" name="link_wa" value="<?= $data['link_wa'] ?>">
                                    <div class="invalid-feedback ">
                                        <?= $validation->getError('link_wa'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>

    <?php } else if ($data['status_guru'] == 1) { ?>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Profile</h1>
                </div>
                <div class="card-body">
                    <?= form_open('pendidik/reset/' . $data['id_guru']) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nama_guru">Nama Lengkap</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-mute"> <?= $data['nama_guru'] ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Tempat Lahir</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-mute"> <?= $data['tmpt_lahir'] ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-mute"> <?= $data['tgl_lahir'] ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-mute"> <?= $data['email'] ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">No Hp/WA</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-mute"> <?= gantiformat($data['telp_guru']) ?></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Alamat Domisili</label>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-mute"> <?= $data['alamat_guru'] ?>

                                        RT <?= $data['rt_guru'] ?>/
                                        RW <?= $data['rw_guru'] ?>
                                        Desa <?= $data['rw_guru'] ?>
                                        Kecamatan <?= $data['kec_guru'] ?>
                                        Kab <?= $data['kab_guru'] ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Status Pernikahan</label>
                                </div>
                                <div class="col-sm-8">
                                    <?php if ($data['status_pernikahan'] == 1) { ?>
                                        <p class="text-mute"> Belum Nikah</p>

                                    <?php } else if ($data['status_pernikahan'] == 2) { ?>
                                        <p class="text-mute"> Menikah</p>
                                    <?php } else if ($data['status_pernikahan'] == 3) { ?>
                                        <p class="text-mute"> Duda/janda</p>
                                    <?php } ?>

                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="">Link Grup WA</label>
                                </div>
                                <?= $data['link_wa'] ?>
                            </div>

                        </div>

                    </div>
                    <input type="hidden" name="status_guru" value="2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Reset</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>

    <?php } else if ($data['status_guru'] == 2) { ?>
        <h5> Silahkan Lapor Ke Operator Untuk Reset Data</h5>
    <?php } ?>

    <iframe src="https://www.google.com/maps/place/-6.2819672644843125, 106.59499423458101"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



</div>


<?= $this->endSection() ?>
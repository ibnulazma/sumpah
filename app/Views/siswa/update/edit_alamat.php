<?= $this->extend('template/template-edit') ?>
<?= $this->section('content') ?>


<?= form_open('siswa/update_alamat/' . $siswa['id_siswa'], ['class' => 'formsimpan']) ?>

<div class="row">
    <div class="col-md-6">
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">Alamat</label>
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" id="alamat">
                <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                </div>
            </div>
        </div>
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">RT</label>
            </div>
            <div class="col-sm-8">
                <input type="number" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" name="rt" id="rt">
                <div class="invalid-feedback">
                    <?= $validation->getError('rt'); ?>
                </div>
            </div>
        </div>
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">RW</label>
            </div>
            <div class="col-sm-8">
                <input type="number" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" name="rw" id="rw">
                <div class="invalid-feedback ">
                    <?= $validation->getError('rw'); ?>
                </div>
            </div>
        </div>
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">Provinsi</label>
            </div>
            <div class="col-sm-8">
                <select name="provinsi" class="form-select  <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?> " id="provinsi" value="<?= old('provinsi') ?>">
                    <option value="">--Pilih Provinsi--</option>
                    <?php foreach ($provinsi as $row) { ?>
                        <option value="<?= $row['id_provinsi'] ?>"><?= $row['prov_name'] ?></option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('provinsi'); ?>
                </div>
            </div>
        </div>
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">Kab/Kota</label>
            </div>
            <div class="col-sm-8">
                <select name="kabupaten" class="form-select <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" value="<?= old('kebupaten') ?>">
                </select>
                <div class=" invalid-feedback">
                    <?= $validation->getError('kabupaten'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">Kecamatan</label>
            </div>
            <div class="col-sm-8">
                <select name="kecamatan" class="form-select <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" id="kecamatan" value="<?= old('kecamatan') ?>">
                </select>
                <div class=" invalid-feedback">
                    <?= $validation->getError('kecamatan'); ?>
                </div>
            </div>
        </div>
        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">Desa</label>
            </div>
            <div class="col-sm-8">
                <select name="desa" class="form-select <?= ($validation->hasError('desa')) ? 'is-invalid' : ''; ?>" id="desa" value="<?= old('desa') ?>">
                </select>
                <div class=" invalid-feedback">
                    <?= $validation->getError('desa'); ?>
                </div>
            </div>
        </div>

        <div class="mb-4 row">
            <div class="col-sm-4">
                <label for="">Kode Pos</label>
            </div>
            <div class="col-sm-8">
                <input type="number" class="form-control <?= ($validation->hasError('kodepos')) ? 'is-invalid' : ''; ?>" name="kodepos" value="<?= old('kodepos') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('kodepos'); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<button type="submit" class="btn btn-primary w-100 tombolSimpan">Simpan</button>
<?= form_open() ?>

</div>





<script src="<?= base_url() ?>/template/assets/vendor/libs/jquery/jquery.js"></script>
<!-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script> -->

<script>
    $(document).ready(function() {
        $("#kabupaten").change(function() {
            var id_kecamatan = $("#kabupaten").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Siswa/dataKecamatan') ?>/' + id_kecamatan,
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
                url: '<?= base_url('Siswa/dataDesa') ?>/' + id_desa,
                success: function(html) {
                    $("#desa").html(html);
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
                url: '<?= base_url('Siswa/dataDesa') ?>/' + id_desa,
                success: function(html) {
                    $("#desa").html(html);
                }
            });
        });
    });
</script>










<?= $this->endSection() ?>
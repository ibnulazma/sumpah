<?= $this->extend('template/template-backend') ?>
<?= $this->section('content') ?>


<?php

$db     = \Config\Database::connect();

$ta = $db->table('tbl_ta')

    ->get()->getResultArray();

?>


<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

<div class="content-header">
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title"><?= $subtitle ?></h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7">
                        <h5>Daftar Peserta Didik Lulus</h5>

                    </div>

                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="ta" id="ta" class="form-control" width="100%">
                                <option value="">Pilih Tahun Pelajaran</option>
                                <?php foreach ($ta as $key => $row) { ?>
                                    <option value="<?= $row['ta'] ?>"><?= $row['ta'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <button onclick="Lihatsiswa()" class="btn btn-primary">Lihat Siswa</button>
                        </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Data <?= $subtitle ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="Tabel" id="Tabel">

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>




<script>
    function Lihatsiswa() {
        let ta = $('#ta').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Peserta/Lihatsiswa') ?>",
            data: {
                ta: ta,
            },
            dataType: "JSON",
            success: function(response) {
                if (response.data) {
                    $('.Tabel').html(response.data)
                }
            }
        });
    }
</script>
<?= $this->endSection() ?>
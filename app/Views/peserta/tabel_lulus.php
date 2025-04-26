<div class="table-responsive">
    <table class="table table-bordered" id="example2">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>L/P</th>
                <th>NIK</th>
                <th>NISN</th>
                <th>Tanggal Lahir</th>
                <th>Nama Ibu</th>
                <th>Rombel Terakhir</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $no = 1;

            foreach ($datasiswa as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value["nama_siswa"] ?></td>
                    <td class="text-center"><?= $value["jenis_kelamin"] ?></td>
                    <td class="text-center"><?= $value["nik"] ?></td>
                    <td class="text-center"><?= $value["nisn"] ?>
                    <td class="text-center"><?= date('d M Y', strtotime($value["tanggal_lahir"])) ?></td>
                    </td>
                    <td class="text-center"><?= $value["nama_ibu"] ?></td>

                    <td class="text-center">
                        undefined

                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
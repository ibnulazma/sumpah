<?php

namespace App\Controllers;

use App\Models\ModelPendidik;
use App\Models\ModelJadwal;
use App\Models\ModelSiswa;
use App\Models\ModelKelas;
use App\Models\ModelSurat;
use App\Models\ModelWilayah;
use \Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pendidik extends BaseController
{

    public function __construct()

    {
        helper('gantiformat');
        helper('form');
        helper('formatindo');







        $this->ModelPendidik = new ModelPendidik();
        $this->ModelJadwal = new ModelJadwal();
        $this->ModelWilayah = new ModelWilayah();
        $this->ModelKelas = new ModelKelas();
        $this->ModelSurat = new ModelSurat();
        $this->siswa = new ModelSiswa();
    }

    public function index()
    {
        $guru = $this->ModelPendidik->DataGuru();
        $data = [
            'title' => 'SIAKAD',
            'subtitle' => 'Pendidik',
            'menu'          => 'pendidik',
            'submenu'       => 'pendidik',
            'guru'          => $this->ModelPendidik->DataGuru(),
            'walas'         => $this->ModelPendidik->walas($guru['id_guru'])
        ];
        return view('guru/v_dashboard', $data);
    }

    public function profile()
    {

        $data = [
            'title' => 'SIAKAD',
            'subtitle' => 'Pendidik',
            'menu'          => 'profile',
            'submenu'       => 'profile',
            'data'          => $this->ModelPendidik->DataGuru(),
            'validation'    =>  \Config\Services::validation(),
            'provinsi'      => $this->ModelWilayah->provinsi(),
        ];
        return view('guru/edit_guru', $data);
    }
    public function tambah_keluarga()
    {
        $keluarga = $this->ModelPendidik->DataGuru();
        $data = [
            'title' => 'SIAKAD',
            'subtitle' => 'Pendidik',
            'menu'          => 'tambah_keluarga',
            'submenu'       => 'tambah_keluarga',
            'data'          => $this->ModelPendidik->DataGuru(),
            'keluarga'          => $this->ModelPendidik->anggotakeluarga($keluarga['id_guru']),

        ];
        return view('guru/tambah_keluarga', $data);
    }
    public function tambah_pendidikan()
    {

        $data = [
            'title' => 'SIAKAD',
            'subtitle' => 'Pendidik',
            'menu'          => 'tambah_pendidikan',
            'submenu'       => 'tambah_pendidikan',
            'data'          => $this->ModelPendidik->DataGuru(),

        ];
        return view('guru/tambah_pendidikan', $data);
    }

    // public function jadwal()
    // {
    //     $guru = $this->ModelPendidik->DataGuru();
    //     $data = [
    //         'title' => 'SIAKAD',
    //         'subtitle' => 'Jadwal Mengajar',
    //         'menu'          => 'pendidik',
    //         'submenu'       => 'pendidik',
    //         'jadwal' => $this->ModelPendidik->Jadwal($guru['id_guru'])
    //     ];
    //     return view('guru/jadwal', $data);
    // }
    public function walas()
    {
        $guru = $this->ModelPendidik->DataGuru();
        $data = [
            'title'         => 'SIAKAD',
            'subtitle'      => 'Rombongan Belajar',
            'menu'          => 'pendidik',
            'submenu'       => 'pendidik',
            'walas'         => $this->ModelPendidik->walas($guru['id_guru'])
        ];
        return view('guru/walas', $data);
    }

    public function presensiKelas()
    {

        $guru = $this->ModelPendidik->DataGuru();
        $data = [
            'title'         => 'SIAKAD',
            'subtitle'      => 'Absen Kelas',
            'menu'          => 'pendidik',
            'submenu'       => 'pendidik',
            'absen'         => $this->ModelPendidik->Mapel($guru['id_guru'])
        ];
        return view('guru/absen/absenkelas', $data);
    }


    public function absensikelas($id_mapel)
    {

        $data = [
            'title' => 'SIAKAD',
            'subtitle' => 'Presensi Peserta Didik',
            'menu'          => 'pendidik',
            'submenu'       => 'pendidik',
            'absen' => $this->ModelPendidik->Kelas($id_mapel)
        ];
        return view('guru/pengajuan', $data);
    }

    public function nilai()
    {

        $guru = $this->ModelPendidik->DataGuru();
        $data = [
            'title' => 'SIAKAD',
            'menu' => 'nilai',
            'submenu' => 'nilai',
            'subtitle' => 'Penilaian ',
            'ambilmapel' => $this->ModelPendidik->Mapel($guru['id_guru'])
        ];
        return view('guru/nilai/nilai', $data);
    }




    public function eksporexcel()
    {

        $siswa =   $this->siswa->AllData();


        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'No');
        $activeWorksheet->setCellValue('B1', 'Nama');
        $activeWorksheet->setCellValue('C1', 'Jenis Kelamin');
        $activeWorksheet->setCellValue('D1', 'Tanggal Lahir');


        $column = 2;
        foreach ($siswa as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value->nama_siswa);
            $sheet->setCellValue('C' . $column, $value->jenis_kelamin);
            $sheet->setCellValue('D' . $column, $value->tanggal_lahir);

            $column++;
        }


        $writer = new Xlsx($spreadsheet);
        header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename=data anak.xlsx');
        header('Cache-Control:max-age=0');
        $writer->save('php://output');
        exit();
    }

    public function pengajuan()
    {
        $guru = $this->ModelPendidik->DataGuru();
        $data = [
            'title' => 'SIAKAD',
            'menu' => 'pengajuan',
            'submenu' => 'pengajuan',
            'subtitle' => 'Pengajuan Mutasi Peserta Didik',
            'pengajuan' => $this->ModelPendidik->mutasi($guru['id_guru']),

        ];
        return view('guru/pengajuan', $data);
    }


    public function konfirmasi($id_mutasi)
    {
        $data = [
            'id_mutasi' => $id_mutasi,
            'status_mutasi' => 2
        ];
        $this->ModelSurat->konfirmasi($data);
        session()->setFlashdata('pesan', 'Reset Berhasil !!!');
        return redirect()->to(base_url('pendidik/pengajuan'));
    }
    public function printmutasi($id_mutasi)
    {

        $dompdf = new Dompdf();
        // $siswa = $this->ModelSiswa->DataSiswa($id_siswa);
        $data = [
            'title'         =>  'Surat Permohonan Mutasi Siswa',
            'mutasi'     => $this->ModelSurat->detail_data($id_mutasi),


            // 'tingkat'       => $this->ModelKelas->SiswaTingkat(),
        ];
        $html = view('guru/print_mutasi', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('data siswa kelas.pdf', array(
            "Attachment" => false
        ));
        exit();
    }

    public function editguru($id_guru)
    {
        if ($this->validate([

            'nama_guru' => [
                'label' => 'Nama lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tmpt_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tgl_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required'          => '{field} harus diisi',

                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],


            'telp_guru' => [
                'label' => 'NO WA',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',

                ]
            ],

            'alamat_guru' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required'   => '{field} harus diisi',


                ]
            ],
            'ibu_guru' => [
                'label' => 'Nama Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',

                ]
            ],
            'link_wa' => [
                'label' => 'Link GRUP WA',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',

                ]
            ],
            'status_pernikahan' => [
                'label' => 'Status Pernikahan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus dipilih',

                ]
            ],
            'rt_guru' => [
                'label' => 'RT',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi',

                ]
            ],
            'rw_guru' => [
                'label' => 'RW',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi',

                ]
            ],
            'desa_guru' => [
                'label' => 'Desa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi',

                ]
            ],
            'kec_guru' => [
                'label' => 'Kecamatan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi',

                ]
            ],
            'kab_guru' => [
                'label' => 'Kabupaten',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi',

                ]
            ],


        ])) {
            $data = [
                'id_guru'          => $id_guru,
                'nama_guru'         => $this->request->getPost('nama_guru'),
                'ibu_guru'         => $this->request->getPost('ibu_guru'),
                'tmpt_lahir'         => $this->request->getPost('tmpt_lahir'),
                'tgl_lahir'        => formatindo($this->request->getPost('tgl_lahir')),
                'email'         => $this->request->getPost('email'),
                'alamat_guru'         => $this->request->getPost('alamat_guru'),
                'rt_guru'        => $this->request->getPost('rt_guru'),
                'rw_guru'         => $this->request->getPost('rw_guru'),
                'desa_guru'          => $this->request->getPost('desa_guru'),
                'kec_guru'           => $this->request->getPost('kec_guru'),
                'kab_guru'           => $this->request->getPost('kab_guru'),
                'telp_guru'          => $this->request->getPost('telp_guru'),
                'link_wa'          => $this->request->getPost('link_wa'),
                'status_pernikahan'    => $this->request->getPost('status_pernikahan'),
                'telp_guru'    => $this->request->getPost('status_pernikahan'),
                'status_guru' => 1,


            ];
            $this->ModelPendidik->edit($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diubah');
            return redirect()->to('pendidik/profile');
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            $validation =  \Config\Services::validation();
            return redirect()->to('pendidik/profile')->withInput()->with('validation', $validation);
        }
    }


    public function reset($id_guru)
    {

        $data = [
            'id_guru'          => $id_guru,
            'status_guru'         => $this->request->getPost('status_guru'),
        ];
        $this->ModelPendidik->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('pendidik/profile');
    }

    public function tambahkeluarga()
    {
        $data = [

            'id_guru'         => $this->request->getPost('id_guru'),
            'nama_anggota'          => $this->request->getPost('nama_anggota'),
            'status'          => $this->request->getPost('status'),
        ];
        $this->ModelPendidik->addkeluarga($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to('pendidik/tambah_keluarga');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendidikan extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_pendidikan')
            ->orderBy('id_pendidikan', 'DESC')
            ->get()->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_pendidikan')
            ->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_pendidikan')
            ->where('id_pendidikan', $data['id_pendidikan'])
            ->update($data);
    }
    public function delete_data($data)
    {
        $this->db->table('tbl_pendidikan')
            ->where('id_pendidikan', $data['id_pendidikan'])
            ->delete($data);
    }

    public function addkeluarga($data)
    {
        $this->db->table('tambah_keluarga')
            ->insert($data);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tanggapan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pengaduan', 'tanggal', 'tanggapan', 'id_petugas'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getTanggapan()
    {
        $builder = $this->db->table('tanggapan');
        $builder->select('pengaduan.laporan, pengaduan.foto, pengaduan.status, tanggapan.tanggal, tanggapan.tanggapan');
        $builder->join('pengaduan', 'pengaduan.id = tanggapan.id_pengaduan');
        $builder->where('pengaduan.status', 'Selesai');

        return $builder->get();
    }

    public function getHistory($id = null)
    {
        $builder = $this->db->table('tanggapan');
        $builder->select('pengaduan.laporan, pengaduan.foto, pengaduan.status, tanggapan.tanggal, tanggapan.tanggapan');
        $builder->join('pengaduan', 'pengaduan.id = tanggapan.id_pengaduan');
        $builder->where('nik', $id);
        $builder->where('pengaduan.status', 'Selesai');

        return $builder->get();
    }
}

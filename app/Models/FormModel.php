<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id_history';
    protected $allowedFields = ['Tanggal', 'Kegiatan', 'Jenis_Perbaikan', 'Permasalahan', 'Nama_Ruangan', 'Hasil'];
}

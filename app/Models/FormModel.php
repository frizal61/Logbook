<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id_history';
    protected $allowedFields = ['Tanggal', 'Kegiatan', 'Jenis_Perbaikan', 'Langkah_Perbaikan', 'Nama_Ruangan', 'Hasil'];
}

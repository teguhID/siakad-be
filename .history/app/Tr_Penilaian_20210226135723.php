<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Penilaian extends Model
{
    protected $table = 'tr_penilaian';
    protected $fillable = ['nilai_tugas', 'nilai_uts', 'nilai_uas', 'nilai_akhir', 'keterangan', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_penilaian';
    public $timestamps = true;
    
    function guru() {
        return $this->hasOne(Md_Guru::class, 'id_guru', 'id_guru');
    }

    function murid() {
        return $this->hasOne(Md_Murid::class, 'id_murid', 'id_murid');
    }

    function kelas() {
        return $this->hasOne(Md_Kelas::class, 'id_kelas', 'id_kelas');
    }

    function mata_pelajaran() {
        return $this->hasOne(Md_Mata_Pelajaran::class, 'id_mata_pelajaran', 'id_mata_pelajaran');
    }
}

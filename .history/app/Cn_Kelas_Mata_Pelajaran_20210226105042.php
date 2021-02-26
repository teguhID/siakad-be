<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cn_Kelas_Mata_Pelajaran extends Model
{
    protected $table = 'cn_kelas_mata_pelajaran';
    protected $fillable = ['id_conf_kelas_mata_pelajaran', 'id_kelas', 'id_mata_pelajaran', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_conf_kelas_mata_pelajaran';
    public $timestamps = true;

    function murid() {
        return $this->hasOne(Md_Murid::class, 'id_mata_pelajaran', 'id_mata_pelajaran');
    }

    function kelas() {
        return $this->hasOne(Md_Kelas::class, 'id_kelas', 'id_kelas');
    }
}

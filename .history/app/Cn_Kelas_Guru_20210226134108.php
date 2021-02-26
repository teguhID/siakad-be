<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cn_Kelas_Murid extends Model
{
    protected $table = 'cn_kelas_murid';
    protected $fillable = ['id_conf_kelas_murid', 'id_kelas', 'id_murid', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_conf_kelas_murid';
    public $timestamps = true;

    function murid() {
        return $this->hasOne(Md_Murid::class, 'id_murid', 'id_murid');
    }

    function kelas() {
        return $this->hasOne(Md_Kelas::class, 'id_kelas', 'id_kelas');
    }
}

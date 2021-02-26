<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cn_Kelas_Guru extends Model
{
    protected $table = 'cn_kelas_guru';
    protected $fillable = ['id_conf_kelas_guru', 'id_kelas', 'id_guru', 'created_at', 'updated_at'];
    protected $primaryKey = 'id_conf_kelas_guru';
    public $timestamps = true;

    function guru() {
        return $this->hasOne(Md_Guru::class, 'id_guru', 'id_guru');
    }

    function kelas() {
        return $this->hasOne(Md_Kelas::class, 'id_kelas', 'id_kelas');
    }
}

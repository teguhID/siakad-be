<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Md_Kelas extends Model
{
    protected $table = 'md_kelas';
    protected $fillable = ['kelas', 'desc', 'created_at','updated_at'];
    protected $primaryKey = 'id_kelas';
    public $timestamps = true;
}

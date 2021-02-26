<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Md_Mata_Pelajaran extends Model
{
    protected $table = 'md_mata_pelajaran';
    protected $fillable = ['mata_pelajaran', 'desc', 'created_at','updated_at'];
    protected $primaryKey = 'id_mata_pelajaran';
    public $timestamps = true;
}

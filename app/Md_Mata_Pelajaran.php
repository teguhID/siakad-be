<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Md_Mata_Pelajaran extends Model
{
    protected $table = 'md_mata_pelajaran';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    public $timestamps = true;
}

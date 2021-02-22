<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Md_Kelas extends Model
{
    protected $table = 'md_kelas';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    public $timestamps = true;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Md_Guru extends Model
{
    protected $table = 'md_guru';
    protected $fillable = ['nama', 'created_at','updated_at'];
    protected $primaryKey = 'id_guru';
    public $timestamps = true;
}

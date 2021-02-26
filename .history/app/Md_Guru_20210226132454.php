<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Md_Murid extends Model
{
    protected $table = 'md_murid';
    protected $fillable = ['nama', 'created_at','updated_at'];
    protected $primaryKey = 'id_murid';
    public $timestamps = true;
}

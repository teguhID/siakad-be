<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Um_Roles extends Model
{
    protected $table = 'um_roles';
    protected $fillable = ['role', 'desc', 'created_at','updated_at'];
    protected $primaryKey = 'id_role';
    public $timestamps = false;
}

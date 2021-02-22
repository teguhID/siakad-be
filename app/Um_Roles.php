<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Um_Roles extends Model
{
    protected $table = 'um_roles';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    public $timestamps = false;
}

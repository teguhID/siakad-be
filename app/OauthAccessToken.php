<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OauthAccessToken extends Model
{
    protected $table = 'oauth_access_tokens';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    public $timestamps = true;
}

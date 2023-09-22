<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    use HasFactory;
    protected $fillable = array('user_name', 'password', 'email');
    public $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function login()
    {
        return $this->hasOne(loginModel::class, 'id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable as Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function setPasswordAttribute($value)
//    {
//      $this->attributes['password'] = bcrypt($value);
//    }
}

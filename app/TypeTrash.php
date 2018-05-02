<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeTrash extends Model
{
    protected $table = 'type_trash';

    protected $fillable = [
          'id_trash', 'type'
    ];

    protected $primaryKey = 'id_trash';

    public $incrementing = false;
}

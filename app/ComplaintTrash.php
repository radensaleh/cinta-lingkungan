<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintTrash extends Model
{
    protected $table = 'complaint_trash';

    protected $primaryKey = 'id_complaint';

    public $incrementing = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{   
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
          'firstname',
          'lastname',
          'middlename',
          'section',
          'specialization',
      ];

}

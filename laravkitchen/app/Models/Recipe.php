<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    protected $primaryKey = 'rid'; // or whatever your real primary key is
    public $incrementing = true;
    protected $keyType = 'int';


    protected $table = 'recipes';

    public $timestamps = false;
}

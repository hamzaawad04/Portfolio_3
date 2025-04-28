<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    protected $primaryKey = 'rid';
    public $incrementing = true;
    protected $keyType = 'int';


    protected $table = 'recipes';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'type',
        'Cookingtime',
        'ingredients',
        'instructions',
        'image',
        'uid',
    ];
}

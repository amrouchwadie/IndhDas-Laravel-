<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filesapppro extends Model
{
    use HasFactory;

    protected $fillable = [
        'announce',
        'formulaire	',
        'firstpick',
        'projectfunds',
        'files_id',
    ];
}

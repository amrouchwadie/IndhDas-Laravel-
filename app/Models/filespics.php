<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filespics extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture',
        'files_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocVers extends Model
{
    use HasFactory;

    protected $fillable = [
        'pdf',
        'version_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPromo extends Model
{
    use HasFactory;

    protected $table = 'videopromos';
    protected $guarded = [];

    protected $primaryKey = 'id';
}

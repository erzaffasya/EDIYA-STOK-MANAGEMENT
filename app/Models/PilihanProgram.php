<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanProgram extends Model
{
    use HasFactory;
    protected $table = 'pilihanprograms';
    protected $guarded = [];

    protected $primaryKey = 'id';
}

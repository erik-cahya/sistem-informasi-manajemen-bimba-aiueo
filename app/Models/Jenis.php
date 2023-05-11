<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    protected $guarded = ['id_jenis'];
    protected $primaryKey = 'id_jenis';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkinResult extends Model
{
    use HasFactory;

    protected $table = 'skin_results';

    protected $fillable = ['skin_type'];
}

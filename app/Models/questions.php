<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $fillable = ['set_name', 'question', 'created_at', 'updated_at'];
    public $timestamps = true;
}

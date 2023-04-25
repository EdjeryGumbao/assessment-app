<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question_sets extends Model
{
    use HasFactory;
    protected $table = 'question_sets';
    protected $fillable = ['set_name','created_at', 'updated_at'];
    public $timestamps = true;
}

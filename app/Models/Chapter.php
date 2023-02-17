<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table = "chapters";

    protected $fillable = ['cource_id','subject_id','chapter_name','groups','status'];
}

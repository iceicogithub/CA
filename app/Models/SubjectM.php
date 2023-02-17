<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectM extends Model
{
    use HasFactory;
    protected $table="subject";
    
    protected $fillable =['subject_name','status','cource_id','groups'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionPaper extends Model
{
    use HasFactory;
    protected $table = "question_paper";
    protected $fillable = [
        'ansfile',
        'quefile',
        'google_link',
        'question_papers_ids',
        'paper_name',
        'status'
        
    ];
}
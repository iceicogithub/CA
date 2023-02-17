<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_question extends Model
{
    use HasFactory;
    public function setNameAttribute($value){   //mutator
        $this->attributes['Option_one'] = ucwords($value);
         }
    // protected $table = "add_question";

    // protected $fillable = ['subject_id','chapter_id','difficulty_level','assign_mark','question_type','questions','option_one','option_two','option_three','option_four','true','false','groups','status'];
    
}

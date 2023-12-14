<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    //  public function student_shift(){
    //      return $this->belongsTo(StudentShift::class,'shift_id','id');
    //  }
     public function school_group(){
         return $this->belongsTo(SchoolGroup::class,'group_id','id');
     }
     public function student_class(){
         return $this->belongsTo(StudentClass::class,'class_id','id');
     }
     public function school_subject(){
         return $this->belongsTo(SchoolSubject::class,'subject_id','id');
     }
}

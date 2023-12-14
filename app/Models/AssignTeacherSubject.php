<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTeacherSubject extends Model
{
    public function assigned_subject(){
        return $this->belongsTo(SchoolSubject::class,'subject_id','id');
    }
    public function school_shift(){
        return $this->belongsTo(StudentShift::class,'shift_id','id');
    }
    public function school_group(){
        return $this->belongsTo(StudentGroup::class,'group_id','id');
    }
    public function school_class(){
        return $this->belongsTo(StudentClass::class,'class_id','id');
    }
    public function teachers(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }
}

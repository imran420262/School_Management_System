<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

class ExamSchedule extends Model
{
    public function exam_type() {
        return $this->belongsTo(ExamType::class,'exam_type_id','id');
    }
    public function student_classes() {
        return $this->belongsTo(StudentClass::class,'class_id','id');
    }
}

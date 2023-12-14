<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolEvent extends Model
{
    public function created_by() {
        return $this->belongsTo(User::class,'created_by_user_id','id');
    }
    public function updated_by() {
        return $this->belongsTo(User::class,'updated_by_user_id','id');
    }
}

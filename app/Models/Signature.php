<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    protected $table = 'signatures';

    protected $fillable = [
        'id',
        'student_name',
        'student_document',
        'student_email',
        'course_id',
        'period',
        'school_id',
        'semester',
        'status',
    ];


    public function school()
    {
        return $this->belongsTo('App\Models\School');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}

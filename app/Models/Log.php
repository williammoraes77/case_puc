<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'id',
        'user_id',
        'signature_id',
        'student_name',
        'student_email',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function signature()
    {
        return $this->belongsTo('App\Models\Signature');
    }


}

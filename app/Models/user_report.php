<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_report extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'report_times',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

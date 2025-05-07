<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Internship extends Model
{
    use HasFactory;
    protected $fillable = [
        "student_id",
        "industry_id",
        "teacher_id",
        "startDate",
        "finishDate"
    ];
}

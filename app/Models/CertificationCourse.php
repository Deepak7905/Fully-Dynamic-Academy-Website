<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationCourse extends Model
{
    use HasFactory;
    protected $fillable = ['heading', 'time', 'status', 'description', 'image', 'apply_url'];

    protected $table = 'certification_courses';
}

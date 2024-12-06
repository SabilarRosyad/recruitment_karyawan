<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs'; // Nama tabel jika berbeda dengan konvensi

    protected $primaryKey = 'id'; // Kolom primary key

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'status',
        'employment_type',
        'experience_level',
        'skills_required',
    ];

    public $timestamps = true; // Menggunakan created_at dan updated_at
}

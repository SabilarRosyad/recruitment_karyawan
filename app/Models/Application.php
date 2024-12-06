<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'job_id',
        'cv',
        'portofolio',
        'status',
    ];

    public $timestamps = true;

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi dengan Interviews
    public function interviews()
    {
        return $this->hasMany(Interviews::class, 'application_id');
    }

    // Relasi dengan Job
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}

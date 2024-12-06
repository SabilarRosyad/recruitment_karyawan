<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviews extends Model
{
    use HasFactory;

    protected $table = 'interviews'; // Nama tabel jika berbeda dengan konvensi

    protected $primaryKey = 'id'; // Kolom primary key

    protected $fillable = [
        'application_id',
        'interview_date',
        'interview_mode',
        'interview_result',
        'interviewer_name',
        'notes',
    ];

    public $timestamps = true; // Menggunakan created_at dan updated_at

    // Definisikan relasi dengan User dan Job
    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }
}

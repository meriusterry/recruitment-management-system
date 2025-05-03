<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences'; 
    protected $fillable = [
        'cv_id',
        'company_name',
        'job_title',
        'start_date',
        'end_date',
        'location',
        'experience_summary',
    ];

    public function cv()
    {
        return $this->belongsTo(CV::class);
    }
}

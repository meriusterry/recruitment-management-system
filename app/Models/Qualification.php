<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Qualification extends Model
{
    use HasFactory;
    protected $table = 'qualifications';
    protected $fillable = [
        'cv_id',
        'qualification',
        'institution',
        'date_completed',
        'qualification_summary',
    ];

    public function cv()
    {
        return $this->belongsTo(CV::class);
    }
    public function qualifications()
{
    return $this->hasMany(Qualification::class, 'cv_id');
}

}

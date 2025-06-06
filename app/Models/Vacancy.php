<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'job_title',
        'location',
        'salary_rate',
        'closing_date',
        'job_description',
        'requirements',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function applicants()
{
    return $this->hasMany(Application::class);
}



}

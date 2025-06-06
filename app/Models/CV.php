<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CV extends Model
{
    use HasFactory;

    protected $table = 'cvs'; // ✅ Correct table name

    protected $fillable = [
        'user_id', 'title', 'summary',
        
       
        'biography', 'full_name', 'date_of_birth', 'gender', 'street_address',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    ////////
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'cv_id');
    }
    

    public function qualifications()
    {
        return $this->hasMany(Qualification::class, 'cv_id');
    }
    
    

}

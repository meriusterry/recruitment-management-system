<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\Vacancy;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Qualification;

class CVController extends Controller
{

    public function store(Request $request)
    {
        // Validate general CV fields
        $validatedCV = $request->validate([
            'title' => 'nullable|string|max:255',
            'summary' => 'nullable|string',
            'biography' => 'nullable|string',
            'full_name' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:50',
            'street_address' => 'nullable|string|max:255',
        ]);
    
        // Create or update the main CV
        $data = CV::updateOrCreate(
            ['user_id' => auth()->id()],
            $validatedCV
        );
    
        // Validate and store experience if present
        if ($request->filled('company_name')) {
            $experienceData = $request->validate([
                'company_name' => 'nullable|string|max:255',
                'job_title' => 'nullable|string|max:255',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date',
                'location' => 'nullable|string|max:255',
                'experience_summary' => 'nullable|string',
            ]);
    
            $experienceData['cv_id'] = $data->id;
            Experience::create($experienceData);
        }
    
        // Validate and store qualification if present
        if ($request->filled('qualification')) {
            $qualificationData = $request->validate([
                'qualification' => 'nullable|string|max:255',
                'institution' => 'nullable|string|max:255',
                'date_completed' => 'nullable|date',
                'qualification_summary' => 'nullable|string',
            ]);
    
            $qualificationData['cv_id'] = $data->id;
            Qualification::create($qualificationData);
        }
    
        return redirect()->back()->with('success', 'CV section saved successfully!');
    }
    

    public function showResume(Request $request)
    {
        $data = CV::where('user_id', auth()->id())->first();
        $vacancy = Vacancy::find($request->query('vacancy_id'));
    
        return view('resume', compact('data', 'vacancy'));
    }
    

public function show()
{
    $data = CV::with(['experiences', 'qualifications'])->where('user_id', auth()->id())->first();

    return view('resume', compact('data'));
}


}

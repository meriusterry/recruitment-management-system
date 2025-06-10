<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
  
    public function store(Request $request)
{
    $user = Auth::user();

    // Ensure the user is authenticated
    if (!$user) {
        abort(403, 'Unauthorized');
    }

    // Ensure the user has a CV
if (!$user->cv) {
    return redirect()->back()->with('error', 'You must complete your CV before submitting an application.');
}


    // Validate input
    $request->validate([
        'vacancy_id' => 'required|exists:vacancies,id',
    ]);

    // Check for existing application
    $alreadyApplied = Application::where('user_id', $user->id)
                        ->where('vacancy_id', $request->vacancy_id)
                        ->exists();

    if ($alreadyApplied) {
        return redirect()->back()->with('error', 'You have already applied for this vacancy!');
    }

    // Create the application
    $application = new Application();
    $application->user_id = $user->id;
    $application->cv_id = $user->cv->id;
    $application->vacancy_id = $request->vacancy_id;
    $application->save();

    return redirect()->back()->with('success', 'Application submitted successfully!');
}

    
       public function showApplicants($vacancyId)
       {
           $vacancy = Vacancy::findOrFail($vacancyId);
       
           $applications = Application::with(['user', 'cv'])
               ->where('vacancy_id', $vacancyId)
               ->get();

            return view('applicants', compact('vacancy', 'applications'));
       }
       public function process(Request $request)
       {
           // Fetch the user ID from the query string
           $userId = $request->query('id');
           
           // Fetch the user and related data
           $user = User::with(['cv', 'applications', 'cv.experiences', 'cv.qualifications'])->findOrFail($userId);
       
           // Return the view with the user data
           return view('process', compact('user'));
       }
       

       
       
       

       
       
       
       
       

}

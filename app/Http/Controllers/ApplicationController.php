<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
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

          //  return redirect()->back()->withErrors(['cv' => 'You must complete your CV before submitting an application.']);
    
    
       // return redirect()->back()->with('success', 'Application submitted successfully!');
    
    

}

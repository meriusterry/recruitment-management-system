<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary_rate' => 'required|numeric',
            'closing_date' => 'required|date',
            'job_description' => 'required|string',
            'requirements' => 'required|string',
        ]);

        Vacancy::create($validated);

        return redirect()->back()->with('success', 'Vacancy created successfully.');
    }

    public function index()
    {
        $data = Vacancy::orderBy('created_at', 'desc')->get();  // Sort by created_at in descending order
        return view('application', compact('data'));
    }
    

   
public function career()
{
     $data = Vacancy::where('closing_date', '>=', Carbon::today())
                   ->orderBy('created_at', 'desc')  // Sort by created_at in descending order
                    ->get();
return view('career', compact('data'));
}
    
public function welcome()
{
    $data = Vacancy::where('closing_date', '>=', Carbon::today())
                   ->orderBy('created_at', 'desc')  // Sort by created_at in descending order
                   ->get();
    return view('welcome', compact('data'));
}

public function destroy($id)
{
    // Find the vacancy by its ID
    $vacancy = Vacancy::findOrFail($id);

    // Delete the vacancy
    $vacancy->delete();

    // Redirect back with a success message
    return redirect()->route('application')->with('success', 'Vacancy deleted successfully.');
}



}

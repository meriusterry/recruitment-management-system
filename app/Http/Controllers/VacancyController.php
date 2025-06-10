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
        $data = Vacancy::orderBy('created_at', 'desc')->get();
        return view('application', compact('data'));
    }

    public function career()
    {
        $data = Vacancy::where('closing_date', '>=', Carbon::today())
            ->orderBy('created_at', 'desc')
            ->get();
        return view('career', compact('data'));
    }
    public function welcome()
    {
        $data = Vacancy::where('closing_date', '>=', Carbon::today())
            ->orderBy('created_at', 'desc')
            ->get();
        return view('welcome', compact('data'));
    }

    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);


        $vacancy->delete();

        return redirect()->route('application')->with('success', 'Vacancy deleted successfully.');
    }
}

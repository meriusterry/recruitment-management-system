<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vacancy;
use App\Models\Application;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

public function totalvacancy()
{
    $totalVacancies = Vacancy::count();
    $totalApplications = Application::count();
    $closedVacancies = Vacancy::whereDate('closing_date', '>', Carbon::today())->count();
    $submittedApplications = Application::where('status', 'submitted')->count();

    $shortlistedApplications = Application::where('status', 'shortlisted')->count();
    $rejectedApplications = Application::where('status', 'rejected')->count();

    return view('dashboard', compact('totalVacancies', 'totalApplications', 'closedVacancies', 'submittedApplications'
    ,'shortlistedApplications', 'rejectedApplications'));
}
}

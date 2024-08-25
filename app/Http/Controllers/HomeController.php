<?php

namespace App\Http\Controllers;

use App\Models\CompanyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function front()
    {
        $optedInPrograms = DB::table('opted_in_programs')
        ->join('company_programs', 'opted_in_programs.program_id', '=', 'company_programs.id')
        ->join('companies', 'company_programs.company_id', '=', 'companies.id') // Join with companies table
        ->select(
            'company_programs.id',
            'company_programs.name',
            'companies.logo', // Select the logo from companies table
            DB::raw('COUNT(opted_in_programs.customer_id) as user_count')
        )
        ->groupBy('company_programs.id', 'company_programs.name', 'companies.logo')
        ->orderBy('user_count', 'desc')
        ->get();
        return view('application', compact('optedInPrograms'));
    }

    public function companyReg(){
        $optedInPrograms = DB::table('opted_in_programs')
        ->join('company_programs', 'opted_in_programs.program_id', '=', 'company_programs.id')
        ->join('companies', 'company_programs.company_id', '=', 'companies.id') // Join with companies table
        ->select(
            'company_programs.id',
            'company_programs.name',
            'companies.logo', // Select the logo from companies table
            DB::raw('COUNT(opted_in_programs.customer_id) as user_count')
        )
        ->groupBy('company_programs.id', 'company_programs.name', 'companies.logo')
        ->orderBy('user_count', 'desc')
        ->get();
        //dd($optedInPrograms);

        return view('companyFront', compact('optedInPrograms'));
    }

    public function companyProgramLink($id)
    {
        $companyProgram = CompanyProgram::findOrFail($id);
        return view('companyProgram', compact('companyProgram'));
    }

    public function submitDetails(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'program_details' => 'required|string',
        ]);

        // Save data to the database (assuming you have a model for storing this data)
        $details = new ProgramTempRegistration(); // Replace with your actual model
        $details->customer_name = $validatedData['customer_name'];
        $details->phone_number = $validatedData['phone_number'];
        $details->program_details = $validatedData['program_details'];
        $details->save();

        // Return the data to the view with a success message
        return redirect()->back()->with([
            'message' => 'Your data has been saved!',
            'details' => $validatedData
        ]);
    }
}

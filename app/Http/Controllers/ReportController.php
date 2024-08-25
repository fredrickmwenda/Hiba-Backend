<?php

namespace App\Http\Controllers;

use App\Helpers\DatesValidator;
use App\Models\CompanyUser;
use App\Models\OptedInPrograms;
use App\Models\Redemption;
use App\Models\Sambaza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReportController extends Controller
{
    //  public function construct of     $user = Auth::user();
    public $user;

    public function __construct()
    {
        $this->user = app('authenticated_user');
       
    }
    public function redemptionReport(Request $request)
    {
        $user = Auth::user();
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $res = DatesValidator::validate($from_date, $to_date);
        if ($res != 'success') {
            return redirect()->back()->with('error', $res);
        }
        // select alll secompany redemptions, when the redemption date is between the from_date and to_date
        //    $redemptions = Redemption::select('*')->when($request->from_date && $request->to_date, function ($query) use ($request) {
        //     return $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        // })->orderBy('created_at', 'desc')->get();
        // $redemptions_count = $redemptions->count();


        // Initialize the query
        $query = Redemption::query();

        // If the user is a CompanyAdmin or Employee, filter redemptions by the company
        if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')) {
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $query->where('company_id', $companyUser->company_id);
        }

        // Add date filters to the query
        $query->when($request->from_date && $request->to_date, function ($query) use ($request) {
            return $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        });

        // Execute the query
        $redemptions = $query->orderBy('created_at', 'desc')->get();
        $redemptions_count = $redemptions->count();


        return view('reports.redemption', compact('redemptions', 'redemptions_count'));
    }
    public function sambazaReport(Request $request)
    {
        $user = Auth::user();
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $res = DatesValidator::validate($from_date, $to_date);
        if ($res != 'success') {
            return redirect()->back()->with('error', $res);
        }


        // Initialize the query
        $query = Sambaza::query();

        // If the user is a CompanyAdmin or Employee, filter redemptions by the company
        if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')) {
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $query->where('company_id', $companyUser->company_id);
        }

        // Add date filters to the query
        $query->when($request->from_date && $request->to_date, function ($query) use ($request) {
            return $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        });

        // Execute the query
        $sambazas = $query->orderBy('created_at', 'desc')->get();
        $sambaza_count = $sambazas->count();

        return view('reports.sambaza', compact('sambazas', 'sambaza_count'));
    }

    public function optInReport(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $res = DatesValidator::validate($from_date, $to_date);
        if ($res != 'success') {
            return redirect()->back()->with('error', $res);
        }

        $query = OptedInPrograms::query();

        // If the user is a CompanyAdmin or Employee, filter redemptions by the company
        if ($user->hasRole('CompanyAdmin') || $user->hasRole('Employee')) {
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $query->where('company_id', $companyUser->company_id);
        }
        // order by created_at desc
        // Add date filters to the query
        $query->when($request->from_date && $request->to_date, function ($query) use ($request) {
            return $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        });

        // Execute the query
        $opt_in_rates = $query->with('customer')->orderBy('created_at', 'desc')->get();
        //dd($opt_in_rates);
        $opt_in_rate_count = $opt_in_rates->count();

        return view('reports.optinrate', compact('opt_in_rates', 'opt_in_rate_count'));
    }

 
}

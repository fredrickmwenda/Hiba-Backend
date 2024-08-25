<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Company;
use App\Models\CompanyUser;
use Illuminate\Http\Request;
use Auth;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $activeAds = Ads::where('status', 'active')->get();

            // Add image URLs to each ad object
            $activeAds->transform(function ($ad) {
                $ad->image_url = asset('assets/images/ads/' . $ad->image);
                return $ad;
            });

            return response()->json($activeAds);
        }

        $user = Auth::user();

        if($user->hasRole('Employee') || $user->hasRole('CompanyAdmin')){
            $companyUser = CompanyUser::where('user_id', $user->id)->first();
            $ads = Ads::where('company_id', $companyUser->company_id)->get();

        }else{
            $Ads = Ads::all();
        }

        
        return view('ads.index', compact('Ads'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        //dd($companies);
        return view('ads.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'adname' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'company' => 'required|string|max:255',
            'duration' => 'required|integer',
            'status' => 'required|in:active,inactive,expired',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/assets/images/ads');
            $image->move($destinationPath, $name);

            $ad = new Ads();
            $ad->adname = $validatedData['adname'];
            $ad->description = $validatedData['description'];
            $ad->image =  $name;
            if ($request->input('company') !== 'Select') {
                $ad->company_id = $request->input('company');
            }
            // $ad->company = $request->input('company');
            $ad->duration = $validatedData['duration'];
            $ad->status = $validatedData['status']; // Set the initial status
            $ad->save();

            return redirect()->route('ad.index')->with('success', 'Ad created successfully.');
        }

        return back()->withErrors(['image' => 'Failed to upload image.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ad = Ads::findorFail($id);
        return view('ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'adname' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,expired',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow nullable image
        ]);

        $ad = Ad::findOrFail($id);

        $ad->adname = $validatedData['adname'];
        $ad->description = $validatedData['description'];
        $ad->status = $validatedData['status'];
        if ($request->input('company') !== 'Select') {
            $ad->company_id = $request->input('company');
        }
        //$ad->company = $request->input('company');


        if ($request->hasFile('image')) {
            // Remove the existing image
            Storage::delete('public/assets/images/ads/' . $ad->image);

            // Upload and save the new image
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/ads');
            $image->move($destinationPath, $name);
            $ad->image = $name;
        }

        $ad->save();

        return redirect()->route('ad.index')->with('success', 'Ad updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ad = Ads::findOrFail($id);
        $ad->delete();

        return redirect()->route('ad.index')->with('success', 'Ad deleted successfully.');
    }

    // public function deactivateExpiredAds()
    // {
    //     $expiredAds = Ads::where('status', 'active')
    //         ->whereRaw('created_at + interval duration day <= now()')
    //         ->get();

    //     foreach ($expiredAds as $ad) {
    //         $ad->update(['status' => 'expired']);
    //     }

    //     return redirect()->route('ads.index')->with('message', 'Expired items deactivated.');
    // }
}

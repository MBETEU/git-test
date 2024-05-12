<?php

namespace App\Http\Controllers\Front;

use App\Models\BloodDonor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BloodDonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front-office.blood-donor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile("donor_image"))
        {
            $file = $request->file("donor_image");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("donor_image/"),$imageName);

            $donor = new BloodDonor([
                'user_id' => Auth::user()->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'birthday' => $request->birthday,
                'gender' => $request->gender,
                'body_weight' => $request->body_weight,
                'email' => $request->email,
                'address' => $request->address,
                'country' => $request->country,
                'city' => $request->city,
                'contact' => $request->contact,
                'voluntary_group' => $request->voluntary_group,
                'new_donor' => $request->new_donor,
                'donor_image' => $imageName
            ]);
            $donor->save();

            return redirect()->route('dashboard');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

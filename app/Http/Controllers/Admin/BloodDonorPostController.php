<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BloodDonor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodDonorPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donates = BloodDonor::where('user_id',Auth::user()->id)->get();

        return view('back-office.donates.index',[
            'donates' => $donates
        ]);
    }
    public function donors()
    {
        $donates = BloodDonor::online()->latest()->get();

        return view('back-office.donates',[
            'donates' => $donates
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $donate = BloodDonor::findOrFail($id);
        $posts = BloodDonor::where('user_id',Auth::user()->id)->where('status',1)->get();
        return view('back-office.donates.show',[
            'donate' => $donate,
            'posts' => $posts
        ]);
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
    public function update(Request $request, $donor)
    {
        $donor = BloodDonor::findOrFail($request->id);
        $donor->fill(['validated' => $request->status]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

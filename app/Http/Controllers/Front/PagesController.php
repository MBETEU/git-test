<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BloodDonor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $donates = BloodDonor::online()->latest()->take(3)->get();
        return view('front-office.index',[
            'donates' => $donates
        ]);
    }
    public function about()
    {
        $donates = BloodDonor::online()->latest()->take(3)->get();
        return view('front-office.about',[
            'donates' => $donates
        ]);
    }
    public function causes()
    {
        return view('front-office.causes');
    }
    public function donate()
    {
        $donates = BloodDonor::online()->latest()->get();
        return view('front-office.donate',[
         'donates' => $donates
        ]);
    }
    public function blog()
    {
        return view('front-office.blog');
    }
    public function gallery()
    {
        return view('front-office.gallery');
    }
    public function event()
    {
        return view('front-office.event');
    }
    public function contact()
    {
        return view('front-office.contact');
    }
}

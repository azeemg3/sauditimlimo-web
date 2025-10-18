<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactEmail;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    
    public function about()
    {
        return view('website.about');
    }
    
    public function services()
    {
        return view('website.services');
    }
    
    public function fleet()
    {
        return view('website.fleet');
    }
    
    public function locations()
    {
        return view('website.locations');
    }
    
    public function contact()
    {
        return view('website.contact');
    }
    
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);
        Mail::to($request->email)->send(new contactEmail($request->all()));
        // Here you can add logic to save to database or send email
        // For now, we'll just redirect back with success message
        
        return back()->with('success', 'Thank you for your message! We\'ll get back to you shortly.');
    }
}

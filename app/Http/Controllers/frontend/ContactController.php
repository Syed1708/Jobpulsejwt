<?php

namespace App\Http\Controllers\frontend;

use App\Models\Company;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index(){
        // normally first user id = 1
        $contact = ContactPage::where('user_id', 1)->first();
        // dd($about);
        $companies = Company::with(['jobs', 'profile'])
        ->withCount('jobs')
        ->orderByDesc('jobs_count')
        ->latest()
        ->take(6)
        ->get();
        // dd(($companies));
        

        return view('pages.contact', compact('contact','companies'));
    }

    public function sendEmail(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'mobile' => 'nullable',
            'message' => 'required|string',
        ]);


        $recipientEmail = 'admin@gmail.com';
        // Send email
        Mail::to($recipientEmail)->send(new ContactFormMail(
            $request->name,
            $request->email,
            $request->subject ?? 'Contact Form Submission',
            $request->mobile,
            $request->message
        ));
        // dd('email send');
        


        return back()->with('success', 'Your message has been sent successfully!');
    }
}

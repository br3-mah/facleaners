<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact-us');
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
        $data = $request->toArray();
        // $to_email = 'nyeleti.bremah@gmail.com';
        $to_email = 'info@facleaners.ca';

        // replace with the content of the email
        $content = [
            'subject' => $data['subject'],
            'names' => $data['names'],
            'email' =>  $data['email'],
            'message' =>  $data['message'],
        ];
        
    try {
        Mail::to($to_email)->send(new ContactEmail($content));
        return redirect()->route('success');
    } catch (\Throwable $th) {
        return redirect()->route('failed');
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

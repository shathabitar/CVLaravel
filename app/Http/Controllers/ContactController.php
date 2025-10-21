<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Tag;

class ContactController extends Controller
{
    public function showCV()
    {
          $tags = Tag::all(); 
          return view('cv', compact('tags'));
    }
    

    public function store(Request $request)
    {
          $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
                'tag_id' => 'nullable|exists:tags,id',
          ]);
    
          $contact = Contact::create($validated);

return redirect()->back()->with('success', 'Message sent successfully!');

    }

    public function index()
    {
        $contacts = Contact::all();
        $tags = Tag::all();
        return view('contacts',['contacts' => $contacts, 'tags' => $tags]);
    }
}




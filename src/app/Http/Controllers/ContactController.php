<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactRequest $request){
        $data = $request->only(['name','email','tel','comment']);
        return view('confirm', compact('data'));
    }

    public function store(Request $request){
        $data = $request->only(['name','email','tel','comment']);
        Contact::create($data);
        return view ('thanks');
    }
}

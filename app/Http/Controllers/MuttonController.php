<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MuttonController extends Controller {
    public function index() {
        return view('home');
    }
    public function menu() {
        return view('menu');
    }
    public function gallery() {
        return view('gallery');
    }
    public function contact() {
        return view('contact');
    }
    public function sendContact(Request $request) {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'message' => 'required',
        ]);
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }
}
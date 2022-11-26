<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{

    public function index()
    {
        return view('Admin.adminLogin');
    }

    public function store(AdminLoginRequest $request)
    {
        $validated = $request->validated();
        //Login credentials: username: huzcafe@gmail.com - password: password
        //$2y$10$2y8StiPh.7cbwGlVTRa28uG1wVXe95CpkK6b9qq1esS2JoxgpP0e.

        if(!auth()->attempt($validated)){
            throw ValidationException::withMessages([
                'email'=>'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back '.$validated['email']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','You have been logged out.');
    }
}

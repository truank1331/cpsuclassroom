<?php

namespace App\Http\Controllers\AuthTeacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher')->except('logout');
    }

    public function showLoginForm(){
        return view('authTeacher.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:2',
            'password' => 'required|min:4'
        ]);
        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];
        // Attempt to log the user in
        //dd(Auth::guard('teacher')->attempt($credential));
        if (Auth::guard('teacher')->attempt($credential, $request->member)){
            // If login succesful, then redirect to their intended location

            return redirect()->intended(route('teacher.home'));
        }
        
        // If Unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}

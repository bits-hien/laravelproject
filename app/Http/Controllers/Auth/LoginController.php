<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:member')->except('logout');
    }

    public function showMemberLoginForm()
    {
        return view('auth.loginmember', ['url' => 'member']);
    }

    public function memberLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('member')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('home');
        }
        return back()->withInput($request->only('member', 'remember'));
    }

    public function memberLogout(Request $request)
    {
        Auth::guard('member')->logout(['username' => $request->username, 'password' => $request->password]);
        return redirect()->route('login_member');
    }
}

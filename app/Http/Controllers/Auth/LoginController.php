<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    public function __construct(){
        
        $this->middleware(['guest']);
        // $this->middleware(['auth']);
    }

    public function index()
    {
        if(auth()->user()){
            return view('admin/master');
        }else {
            return redirect()->route('user-login');
        }
    }

    public function login() {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',


        ]);
        // login the user 
        // back() redirect the user to last page he visited
        // with() flash a message to the session
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status','Invalid login details');
        }
        return redirect()->route('login');
    }
}

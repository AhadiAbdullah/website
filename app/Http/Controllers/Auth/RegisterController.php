<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('auth');
    }


    public function index(){

        $users = User::orderBy('id', 'DESC')->get();
        return view('auth.register', compact('users'));

    }
   
    public function create(){
        
        return view('auth.registerUser');
    }

    public function edit($id)
    {   
        $user =  User::find($id);
        return view('auth.editUser', compact('user'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed',
           
            ]);
       
           User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Toastr::success('User Created successfully :)','Success');
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|max:255',
            
            
        ]);
        $user =  User::find($id);
        
        if($request->password == null){
            $pass = $user->password;
        }else {
            $pass = Hash::make($request->password);
        }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $pass;
            $user->save();
            

            

        Toastr::info('Users Updated successfully :)','Success');
        return redirect()->route('register');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Toastr::error('User Deleted successfully :(','Success');
        return redirect()->route('register');
    }
}

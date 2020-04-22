<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
//        dd($request->all());
        $input = $request->all();
//        dd($input);

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('name' => $input['name'], 'password' => $input['password'])))
        {
//            dd('1447');
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('persons.index');
            }else{
                return redirect()->route('persons.index');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }

    }

    protected function attemptLogin(Request $request)
    {
        dd($request->all());
        $user = User::where('name', $request->name)
            ->where('password', $request->password)
            ->first();

        if(!isset($user)){
            return false;
        }

        Auth::login($user);

        return true;
    }
}

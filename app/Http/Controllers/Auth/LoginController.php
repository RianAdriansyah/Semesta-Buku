<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use RealRashid\SweetAlert\Facades\Alert;

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

    protected function authenticated($user)
    {
        if (auth()->user()->hasRole('admin')) {
            return redirect('/backend/review')->withToastInfo('Selamat Datang ' . auth()->user()->name);
        } else {
            return redirect('/reviewsaya')->withToastInfo('Selamat Datang ' . auth()->user()->name);;
        }

        // return redirect('/home');
    }

    // protected $redirectTo = '/backend/review';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Auth;

class GoogleLoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/allannonces';
  
    /**
     * Call the view
     */
    public function index()
    {
        return view('login');
    }
  
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $googleUser = Socialite::driver($provider)->user();
            $existUser = User::where('email', $googleUser->email)->first();

            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->provider_id = $googleUser->id;
                $user->password = md5(rand(1, 10000));
                $user->email_verified_at = now();
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/dashboard');
        } catch (Exception $e) {
            return 'error';
        }
    }
}

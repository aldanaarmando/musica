<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
        
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        $user = User::where('provider_id', $facebookUser->getId())->first();
  

        if (!$user) {
            // add user to database
            $user = User::create([
                'email' => $facebookUser->getEmail(),
                'name' => $facebookUser->getName(),
                'provider_id' => $facebookUser->getId(),
            ]);
            }

        // login the user
        Auth::login($user, true);

        return redirect($this->redirectTo);
    }




    public function redirectToProviderGoogle()
    {
        
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderGoogleCallback()
    {
      
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('provider_id', $googleUser->getId())->first();

        if (!$user) {
            // add user to database
            $user = User::create([
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName(),
                'provider_id' => $googleUser->getId(),
            ]);
        }

        // login the user
        Auth::login($user, true);

        return redirect($this->redirectTo);
    }

    public function redirectToProviderGithub()
    {
        
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderGithubCallback()
    {
      
        $githubUser = Socialite::driver('github')->user();

        $user = User::where('provider_id', $githubUser->getId())->first();

        if (!$user) {
            // add user to database
            $user = User::create([
                'email' => $githubUser->getEmail(),
                'name' => $githubUser->getName(),
                'provider_id' => $githubUser->getId(),
            ]);
        }

        // login the user
        Auth::login($user, true);

        return redirect($this->redirectTo);
    }

}

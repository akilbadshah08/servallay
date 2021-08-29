<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/subscription';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $create = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if ($create)
        {
            $input = [];
            $input["user_id"] = $create->id;
            UserDetail::create($input);
        }
        $html=' 
        <p>Dear ,'.$data['name']." ".$data['surname'].'</p>
        <p>Welcome to DANSCOOL!  We are thrilled to have you as a DANSCOOL member.  You have made a wise decision to take your physical, mental and spiritual well-being seriously by joining DANSCOOL to work out, dance, sweat and have fun, while learning  the great skill of dance.</p>  
        <p>Please keep your password secure and do not share your login details.</p>
        <p>Again, Welcome to the DANSCOOL family and thank you for choosing DANSCOOL as your place to train, dance, workout and have fun!</p>
        <p><br>Cheers!</p>';
        $headers = "From: " . strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('infodanscool@gmail.com') . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        mail($data['email'],"WELCOME TO DANSCOOL",$html,$headers);
        

        return $create;

    }
}

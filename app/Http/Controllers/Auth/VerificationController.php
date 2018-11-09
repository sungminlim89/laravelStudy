<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
=======
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
>>>>>>> 8b3727eda15e928db26e8643040ff2123745161f
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
<<<<<<< HEAD
    | be re-sent if the user didn't receive the original email message.
=======
    | be resent if the user did not receive the original email message.
>>>>>>> 8b3727eda15e928db26e8643040ff2123745161f
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}

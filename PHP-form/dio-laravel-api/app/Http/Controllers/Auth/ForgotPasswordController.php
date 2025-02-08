<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    
    use SendsPasswordResetEmails;
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('throttle:6,1');
        $this->middleware('throttle:6,1')->only('sendResetLinkEmail');
        $this->middleware('/')->only('');
    }

    public function showLinkRequestForm()
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('throttle:6,1');
        $this->middleware('throttle:6,1')->only('sendResetLinkEmail');
        $this->middleware('/')->only('');
    }
}

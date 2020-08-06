<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'admin']);
        
    }


    use SendsPasswordResetEmails;
}

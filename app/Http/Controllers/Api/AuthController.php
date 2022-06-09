<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class AuthController extends Controller
{
    use ResetsPasswords;
    use SendsPasswordResetEmails;

    public function sendPasswordResetLink(Request $request)
    {
        return $this->sendResetLinkEmail($request);
    }

    public function callResetPassword(Request $request)
    {
        return $this->reset($request);
    }

    public function getUsers()
    {
        $users = User::all();
        return response()->json($users);
    }
}

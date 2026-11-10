<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    //login
    public function showLoginForm()
    if (Auth:: check()){
        return redirect()->route('Dashboard');
    }
}
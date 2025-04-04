<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Import Auth

class HomeController extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype; // Fetch user type
        if ($usertype == '1') {
            return view ('admin.home'); // Redirect admin
        } else {
            return view('home.userpage'); // Redirect normal user
        }
        
    }
}

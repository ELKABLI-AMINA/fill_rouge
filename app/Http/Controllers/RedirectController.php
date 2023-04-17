<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function redirect()
    {
        
        if (Auth::user()->role == 0) {
            return redirect()->route('dashboard');
        } elseif (Auth::user()->role == 1) {
            return redirect()->route('owner');
        } else {
            return redirect()->route('/');
        }
    }

}

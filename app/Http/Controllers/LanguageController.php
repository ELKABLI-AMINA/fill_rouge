<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
{
    App::setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
}
}

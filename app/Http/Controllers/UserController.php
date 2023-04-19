<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agence;
use App\Models\Voyage;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function Register(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number
        ]);
        return redirect()->route('/');
    }


    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    $remember = $request->has('remember');

    if (Auth::attempt($credentials, $remember)) {
        $user = Auth::user();

        if ($user && $user->role == 0) {
            return redirect()->route('dashboard');
        }else if($user && $user->role == 1){
            return redirect()->route('owner');
        }
         else {
            
            return redirect()->route('/');
        }
    }
    return back()->withErrors([
        'email' => 'Les informations de connexion sont invalides.',
    ]);
}

    public function show()
    {
        return view('Auth.login');
    }


    public function edit()
    {
        return view('Auth.EditProfil');
    }

    public function update( Request $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);
        return redirect()->route('login');

    }





    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }


    public function viewDashboard()
    {
        

        $totalAgences = Agence::count();
        $totalVoyages = Voyage::count();
        $totalReservation = Reservation::count();

        return view('dashboard')->with([
            'totalAgences'=>$totalAgences,
            'totalVoyages'=>$totalVoyages,
            'totalReservation'=>$totalReservation
           
        ]);
    }

    
    
    public function viewODashboard()
    {
        $agence= Agence::where('owner_id', auth()->user()->id)->first();
        $totalVoyages = Voyage::where('agence_id', $agence->id)->count();
        // $totlaReservation = Reservation::where('voyage_id',$voyage->id)->count();
        return view('o-dashboard')->with([
            'totalVoyages' => $totalVoyages,
            // 'totlaReservation'=>  $totlaReservation
        ]);
    }




    public function action($id, $act)
    {
        if($act ==1){
            $agence = Agence::find($id);
            if($agence){
                $agence->status =1;
                $agence->save();

                $user= User::find($agence->owner_id);
                $user->role=1;
                $user->save();
                return redirect()->back()->with('success','the Agence has been accepted with success');
            }else{
                abort(404);
            }
        }elseif($act ==2){
            $agence = Agence::find($id);
            if($agence){
                $agence->status =2;
                $agence->save();
                return redirect()->back()->with('success','the Agence has been declined with success'); 
            }else{
                abort(404);
            }
        }
        
    }
    
}

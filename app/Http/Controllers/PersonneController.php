<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Http\Request\PersonneRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function register(PersonneRequest $request)
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
        ]);

        return response()->json(['message' => 'Utilisateur créé avec succès'], 201);
    }

    
    public function login( PersonneRequest $request)
    {
       
        $user= User::whereEmail($request->email)->first();
        if (isset($user->id)){
            if(Hash::check($request->password, $user->password)){
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'message'=>'Connected Successfully',
                    'token'  =>$token
                ]);

            }else{
                return response()->json([
                    'message'=>'Invalid Credentials',
                   
                ]);  
            }

        }else{
            return response()->json([
                'message'=>'Invalid Credentials',
                
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function updateInfo(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
   
}

<?php

namespace App\Http\Controllers;

use App\Models\agence;
use Illuminate\Http\Request;
use App\Http\Requests\AgenceRequest;

class AgenceController extends Controller
{
    
    public function store(AgenceRequest $request)
    {
        $agence = agence::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $request->logo ,
            'location' => $request->location,
            'ouner_id' => $request->ouner_id,
        ]);

        return response()->json([
            'message' => 'Agence ajoutée avec succès',
            'data' => $agence
        ], 201);
    }

    
    public function show(agence $agence)
    {
        
    }

    
    public function update(Request $request, agence $agence)
    {
        
    }

   
    public function destroy(agence $agence)
    {
        
    }
}

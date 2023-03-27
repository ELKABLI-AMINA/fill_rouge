<?php

namespace App\Http\Controllers;

use App\Models\agence;
use Illuminate\Http\Request;
use App\Http\Requests\AgenceRequest;
use Illuminate\Support\Facades\Auth;

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

    
    public function show($id)
    {
        $agence = Agence::find($id);

        if (!$agence) {
            return response()->json([
                'message' => 'Agence non trouvée'
            ], 404);
        }
    
        return response()->json([
            'data' => $agence
        ], 200);
    }

    
    public function update(AgenceRequest $request, agence $agence)
    {
        $user = Auth::user()->id;
        $user_id = $agence->user_id;
        if ($user == $user_id) {
            $agence->update([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $request->logo ,
            'location' => $request->location,
            'ouner_id' => $request->ouner_id,

            ]);
            return response()->json([
                'message' => 'Agence ajoutée avec succès',
                'data' => $agence
            ]);
        }else{
            return response(['status' => 'you are not create this Agence']); 
        }
    }

   
    public function destroy(agence $agence)
    {
        $user = Auth::user()->id;
        $user_id = $agence->user_id;
        if ($user == $user_id) {
            $agence->delete();
            return response()->json([
                'messsage' => 'agence deleted'
            ]);
        } else {
            return response(['status' => 'you are not create this agence']);
        }
    }
}

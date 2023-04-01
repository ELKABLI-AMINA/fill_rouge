<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;
use App\Http\Requests\AgenceRequest;
use Illuminate\Support\Facades\Auth;


class AgenceController extends Controller
{
    public function index()
    {
        return view('Agence.formAgence');
    }
    public function getAllDemande()

    {
        $demande = Agence::All();
        return view('demandes')->with(['demandes' => $demande]);
    }
    public function store(AgenceRequest $request)
    {
        $agence = Agence::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $request->logo,
            'address' => $request->address,
            'owner_id' => auth()->user()->id,

        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $agence=Agence::find($id);
        return view ('edit')->with([]);
    }


    
    public function update(AgenceRequest $request, Agence $agence)
{
    $agence->update([
        'name' => $request->name,
        'description' => $request->description,
        'logo' => $request->logo,
        'address' => $request->address,
    ]);

    return redirect()->back();
}






}

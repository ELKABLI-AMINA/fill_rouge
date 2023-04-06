<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AgenceRequest;
use Illuminate\Support\Facades\Auth;


class AgenceController extends Controller
{
    public function index()
    {
        return view('Agence.formAgence');
    }

    public function Show()
    {
        $agences = Agence::paginate(6);
        return view('Agence.AllAgencies')->with([
            'agences' => $agences
        ]);
    }

    public function ShowAgence($slug)
    {
        $agence = Agence::where('slug', $slug)->first();

        return view('Agence.show')->with([
            'agence' => $agence
        ]);
    }



    public function getAllDemande()
    {
        $demande = Agence::All();
        return view('demandes')->with(['demandes' => $demande]);
    }

    
    public function store(AgenceRequest $request)
    {
        if ($request->has('logo')) {
            $file = $request->logo;
            $logo_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $logo_name);
        }
        Agence::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $logo_name,
            'slug' => Str::slug($request->name),
            'address' => $request->address,
            'owner_id' => auth()->user()->id,

        ]);
         return redirect()->back()->with([
             'success' => 'Agence créée avec succès'
         ]);
    
    }

    public function edit($slug)
    {
        $agence = Agence::where('slug', $slug)->first();
        return view('Agence.EditAgence')->with([
            'agence' => $agence
        ]);
    }



    public function update(AgenceRequest $request, $slug)
    {
        $agence = Agence::where('slug', $slug)->first();
        $agence->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name),
            'logo' => $request->logo,
            'address' => $request->address,
        ]);

        return redirect()->back()->with([
            'success' => 'Agence modifiée avec succès'
        ]);
    }

    public function delete($slug)
    {
        $agence = Agence::where('slug', $slug)->first();
        $agence->delete();
        $agences = Agence::paginate(6);
        return view('Agence.AllAgencies')->with([
            'agences' => $agences
        ]);
    }
}

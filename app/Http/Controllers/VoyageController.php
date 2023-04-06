<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VoyageRequest;
use App\Models\Agence;

class VoyageController extends Controller
{
    public function index()
    {
        return view('Voyage.formVoyage');
    }

    public function store(VoyageRequest $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
        }

        $user_id = auth()->user()->id;
        $Agence = Agence::get()->where('owner_id',$user_id)->first();
        $Agence_id = $Agence->id;


         Voyage::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image_name,
            'slug' => Str::slug($request->name),
            'date_depart' => $request->date_depart,
            'date_arrive' => $request->date_arrive,
            'nb_jours' => $request->nb_jours,
            'nb_personne' => $request->nb_personne,
            'prix' => $request->prix,
            'agence_id' => $Agence_id,

        ]);
        return redirect()->back()->with([
            'success' => 'Voyage créée avec succès'
        ]);
    }


    
    public function Show()
    {
        $voyages = Voyage::paginate(6);
        // dd($voyages);
        return view('welcome')->with([
            'voyages' => $voyages
        ]);
        
    }


    
    public function ManageVoyage()
    {
        $voyage = Voyage::All();
        return view('Voyage.Manage-voyage')->with(['voyages' => $voyage]);
    }

    public function edit($slug)
    {
        $voyage = Voyage::where('slug', $slug)->first();
        return view('voyage.EditVoyage')->with([
            'voyage' => $voyage
        ]);
    }

     
    public function update(VoyageRequest $request, $slug)
    {
        $voyage = Voyage::where('slug', $slug)->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            unlink(public_path('uploads') .'/' . $voyage->image);
            $voyage->image = $image_name;
        }

      
        $voyage->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $voyage->image,
            'slug' => Str::slug($request->name),
            'date_depart' => $request->date_depart,
            'date_arrive' => $request->date_arrive,
            'nb_jours' => $request->nb_jours,
            'nb_personne' => $request->nb_personne,
            'prix' => $request->prix,
            

        ]);

        return redirect()->back()->with([
            'success' => 'Agence modifiée avec succès'
        ]);
    }


    public function delete($slug)
    {
    $voyage = Voyage::where('slug',$slug)->first();
    unlink(public_path('uploads') .'/' . $voyage->image);
    $voyage->delete();
    return view('/');
    }
}

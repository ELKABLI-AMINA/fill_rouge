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
        $Agence = Agence::find($user_id);
        $Agence_id = $Agence->id;

     $voyage = Voyage::create([
         'name' => $request->name,
         'description' => $request->description,
         'image' => $image_name,
         'slug' => Str::slug($request->name),
         'date_depart' => $request->date_depart,
         'date_arrive' => $request->date_arrive,
         'nb_jours' => $request->nb_jours,
         'nb_personne' => $request->nb_personne,
         'agence_id' => $Agence_id,

     ]);
     return redirect()->back()->with([
         'success' => 'Voyage créée avec succès'
     ]);
 }
}

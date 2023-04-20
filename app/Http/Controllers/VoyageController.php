<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Voyage;
use App\Models\Reservation;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\VoyageRequest;
use Illuminate\Support\Facades\Auth;

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
        $Agence = Agence::get()->where('owner_id', $user_id)->first();
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
            'date_fin_reservation' => $request->date_fin_reservation,
            'nb_limite_reservation' => $request->nb_limite_reservation,
            'agence_id' => $Agence_id,

        ]);
        return redirect()->back()->with([
            'success' => 'Voyage créée avec succès'
        ]);
    }



    public function Show()
    {
        $voyages = Voyage::paginate(6);
        $ratings = DB::table('ratings')
            ->join('voyages', 'ratings.rateable_id', '=', 'voyages.id')
            ->join('users', 'ratings.user_id', '=', 'users.id')
            ->select('ratings.*', 'voyages.name as voyage_name', 'users.name as user_name')
            ->get();

        return view('welcome')->with([
            'voyages' => $voyages,
            'ratings' => $ratings

        ]);
    }



    public function AllVoyage()
    {
        $user_id = Auth::user()->id;
        $agence = Agence::where('owner_id', $user_id)->first();
        $voyage = Voyage::where('agence_id', $agence->id)->get();


        return view('Voyage.AllVoyage')->with(['voyages' => $voyage]);
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
            'date_fin_reservation' => $request->date_fin_reservation,
            'nb_limite_reservation' => $request->nb_limite_reservation,
            'prix' => $request->prix,


        ]);

        return redirect()->back()->with([
            'success' => 'Agence modifiée avec succès'
        ]);
    }


    public function delete($slug)
    {
        $voyage = Voyage::where('slug', $slug)->first();
        $voyage->delete();
        return redirect()->route('AllVoyage');
    }


    public function ShowVoyage($id_voyage)
    {

        $voyage = Voyage::where('slug', $id_voyage)->first();
        $id = $voyage->id;
        $reservation = Reservation::where('voyage_id', $id)->where('status', 'done')->get();
        $place_recerved = $reservation->sum('participants');
        $placesRestantes = $voyage->nb_limite_reservation - $place_recerved;
        session()->put('placesRestantes', $placesRestantes);
        return view('readmore')->with([
            'voyage' => $voyage,
            'place_recerved' => $place_recerved,
            'placesRestantes' => $placesRestantes
        ]);
    }


   
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoteController extends Controller
{

   
    public function index($id)
    {
        
        $voyage = Voyage::findOrFail($id);
        return view('formVote', compact('voyage'));
    }

    public function noterVoyage(Request $request, $id_voyage)
    {
        $voyage = Voyage::find($id_voyage);
        $note = $request->input('rating');
        $comment = $request->input('comment');
        $voyage->rate($note, $comment);
        return redirect()->back()->with('success', 'Merci pour votre notation!');
    }
}

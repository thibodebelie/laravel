<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; 
use App\Models\Activiteit;
use Illuminate\Http\Request;

class ActiviteitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createActiviteit(Request $request){
        $incomingFields = $request->validate([
            'datum' => 'required',
            'begin' => 'required',
            'einde' => 'required',
            'activiteit' => 'required',
            'locatie' => 'required',
            'groep' => 'required',
        ]);
        
        $incomingFields['datum'] = $incomingFields['datum'];
        $incomingFields['begin'] = strval($incomingFields['begin']);
        $incomingFields['einde'] = strval($incomingFields['einde']);
        $incomingFields['activiteit'] = strip_tags($incomingFields['activiteit']);
        $incomingFields['locatie'] = strip_tags($incomingFields['locatie']);
        $incomingFields['groep'] = $incomingFields['groep'];
        
        Log::info("Incoming fields: ", $incomingFields);
        Activiteit::create($incomingFields);
        

        return redirect('/');
    }

    public function deleteActiviteit(Request $request){
        $id =$request->input('id');
        $activiteits = Activiteit::find($id);

        if($activiteits)
        {
            $activiteits->delete();
            return redirect('/')->with('success','Succesvol verwijderd'); 
        } else
        {
            return redirect('/')->with('error','Probleem met het verwijderen, probeer opnieuw');
        }
    }
    public function updateActiviteit(Request $request){
        $id =$request->input('id');
        $activiteits = Activiteit::find($id);
        if($activiteits){
            $activiteits->update($request->all());
            return redirect('/')->with('success','Succesvol bijgewerkt');
        }else
        {
            return redirect('/edit')->with('error','Probleem met het bijwerken van de activiteit, probeer opnieuw');
        }

    }

    public function showActiviteiten()
    {
        $activiteits = Activiteit::all();
        $groupedActiviteits = $activiteits->groupBy('groep');

        return view('activiteiten', ['groupedActiviteits' => $groupedActiviteits]);
    }

    public function showMiniMin()
    {
        $activiteits = Activiteit::where('groep', 'Mini-Min')->get();
        return view('miniMin', ['activiteits' => $activiteits]);
    }

    public function showMaxiMin()
    {
        $activiteits = Activiteit::where('groep', 'Maxi-Min')->get();
        return view('maxiMin', ['activiteits' => $activiteits]);
    }

    public function showTussers()
    {
        $activiteits = Activiteit::where('groep', 'Tussers')->get();
        return view('tussers', ['activiteits' => $activiteits]);
    }

    public function showHoofdleiding()
    {
        $activiteits = Activiteit::where('groep', 'Hoofdleiding')->get();
        return view('hoofdleiding', ['activiteits' => $activiteits]);
    }
}

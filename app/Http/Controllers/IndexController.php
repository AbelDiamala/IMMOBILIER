<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        // Récupérer tous les biens avec leurs relations
        $biens = Bien::select('biens.*', DB::raw('COUNT(visite_details.ID_VISITE_DETAIL) as visites_count'))
        ->join('visite_details', 'biens.ID_BIEN', '=', 'visite_details.ID_BIEN')
        ->groupBy('biens.ID_BIEN')
        ->orderByDesc('visites_count')
        ->with(['type','standing','statut','localisation','utilisateur','photos'])
        ->limit(6)
        ->get();


        // Passer les biens à la vue
        return view('site.index', compact('biens'));
    }
}

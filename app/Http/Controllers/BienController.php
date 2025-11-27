<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function show($id)
    {
        try {
            // Décrypter l'ID
            $bienId = Crypt::decrypt($id);

            // Récupérer le bien avec ses relations
            $bien = Bien::with(['type', 'standing', 'statut', 'localisation', 'utilisateur', 'photos', 'videos'])
                        ->findOrFail($bienId);

            return view('site.biens', compact('bien'));
        } catch (\Exception $e) {
            // Si l'ID est invalide ou corrompu
            abort(404);
        }
    }
}
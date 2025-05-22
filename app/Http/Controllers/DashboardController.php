<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Etage;


class DashboardController extends Controller
{
     public function index()
    {
        $totalChambres = Chambre::count();
        $disponibles = Chambre::where('disponible', true)->count();
        $occupees = $totalChambres - $disponibles;
        $totalEtages = Etage::count();

        $dernieresChambres = Chambre::with('etage')->orderBy('created_at', 'desc')->take(5)->get();

        $etages = Etage::withCount('chambres')->get();

        foreach ($etages as $etage) {
            $etage->disponibles = $etage->chambres()->where('disponible', true)->count();
        }

        return view('dashboard', compact(
            'totalChambres', 'disponibles', 'occupees', 'totalEtages',
            'dernieresChambres', 'etages'
        ));
    }
}

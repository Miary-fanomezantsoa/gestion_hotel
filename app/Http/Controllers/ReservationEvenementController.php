<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationEvenementController extends Controller
{
    public function index()
    {
        $reservations = ReservationEvenement::with('salle')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $salles = Salle::all();
        return view('reservations.create', compact('salles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_client' => 'required',
            'email_client' => 'required|email',
            'telephone_client' => 'required',
            'type_evenement' => 'required',
            'date_evenement' => 'required|date',
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'salle_id' => 'required|exists:salles,id',
        ]);

        ReservationEvenement::create($request->all());
        return redirect()->route('reservations.index')->with('success', 'Réservation ajoutée.');
    }

    public function show(ReservationEvenement $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit($id)
    {
        
        $reservation = ReservationEvenement::findOrFail($id);
        $salles = Salle::all();
        return view('reservations.edit', compact('reservation', 'salles'));
    }

    public function update(Request $request, ReservationEvenement $reservation)
    {
        $reservation->update($request->all());
        return redirect()->route('reservations.index')->with('success', 'Réservation mise à jour.');
    }

    public function destroy(ReservationEvenement $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'Réservation supprimée.');
    }
}

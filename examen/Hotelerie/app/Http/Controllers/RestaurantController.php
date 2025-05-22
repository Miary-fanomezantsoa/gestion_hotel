<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create(){
        return view('restaurants.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nom' => 'required|string|max:100',
            'type_cuisine' => 'required|string|max:100',
            'capacite' => 'required|integer',
            'horaires_ouverture' => 'required|string|max:100'
        ]);
        Restaurant::create($validatedData);
        return redirect()->route('restaurants.index')->with('success', 'Restaurant created successfully');
    }
    public function edit($id_restaurant){
        $restaurant = Restaurant::findOrFail($id_restaurant);
        return view('restaurants.edit', compact('restaurant'));
    }
    public function update(Request $request, $id_restaurant){
        $restaurant = Restaurant::findOrFail($id_restaurant);
        $validatedData = $request->validate([
            'nom' =>'required|string|max:100',
            'type_cuisine' =>'required|string|max:100',
            'capacite' =>'required|integer',
            'horaires_ouverture' =>'required|string|max:100'
        ]);
        $restaurant->update($validatedData);
        return redirect()->route('restaurants.index')->with('success', 'Restaurant updated successfully');
    }
    public function destroy($id_restaurant){
        $restaurant = Restaurant::findOrFail($id_restaurant);
        $restaurant->delete();
        return redirect()->route('restaurants.index')->with('success', 'Restaurant deleted successfully');
    }
}

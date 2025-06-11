<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function index()
    {
        $menus = Menu::with('restaurant')->get();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        return view('menus.create', compact('restaurants'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'categorie' => 'required|string|max:50',
            'disponible' => 'boolean',
            'id_restaurant' => 'required|exists:restaurants,id_restaurant'
        ]);

        Menu::create($validated);
        return redirect()->route('menus.index')->with('success', 'Menu créé avec succès');
    }


    public function edit(Menu $menu)
    {
        $restaurants = Restaurant::all();
        return view('menus.edit', compact('menu', 'restaurants'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:100',
            'description' => 'nullable|string',
            'prix' => 'required|numeric',
            'categorie' => 'required|string|max:50',
            'disponible' => 'boolean',
            'id_restaurant' => 'required|exists:restaurants,id_restaurant'
        ]);

        $menu->update($validated);
        return redirect()->route('menus.index')->with('success', 'Menu mis à jour');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu supprimé');
    }
}

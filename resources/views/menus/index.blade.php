@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 to-pink-100 py-12">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">Liste des Menus</h1>
                <a href="{{ route('menus.create') }}"
                   class="bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-black px-6 py-3 rounded-lg font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                    ➕ Ajouter un Menu
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Nom</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Description</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Prix</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Catégorie</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Disponible</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Restaurant</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($menus as $menu)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="py-4 px-6 text-sm font-medium text-gray-900">{{ $menu->nom }}</td>
                            <td class="py-4 px-6 text-sm text-gray-600">{{ Str::limit($menu->description, 50) }}</td>
                            <td class="py-4 px-6 text-sm text-gray-600">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                    {{ $menu->prix }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    {{ $menu->categorie }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600">
                                @if($menu->disponible)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Disponible
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Indisponible
                                    </span>
                                @endif
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-600">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                     {{ $menu->restaurant->nom }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium space-x-3">
                                <a href="{{ route('menus.edit', $menu->id_menu) }}"
                                   class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                                    Modifier
                                </a>
                                <form action="{{ route('menus.destroy', $menu->id_menu) }}" method="POST" class="inline"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce menu ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                                         Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

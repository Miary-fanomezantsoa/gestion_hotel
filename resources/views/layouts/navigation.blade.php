<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-xl font-semibold text-gray-900">
                    Gestion Hôtel
                </a>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <a href="{{ route('clients.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Clients
                </a>
                <a href="{{ route('personnels.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Personnel
                </a>
                
                <a href="{{ route('etages.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Etages
                </a>
                <a href="{{ route('chambres.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Chambres
                </a>
<<<<<<< HEAD
                <a href="{{ route('reservations.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Reservation de salle 
                </a>
                <a href="{{ route('salles.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Salle 
                </a>
=======
                <div class="relative group">
                    <button class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Restaurant
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="absolute hidden group-hover:block bg-white shadow-md rounded-md mt-1 py-1 w-48 z-10">
                        <a href="{{ route('restaurants.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Liste Restaurants</a>
                        <a href="{{ route('menus.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Liste Menus</a>
                    </div>
                </div>
                <a href="{{ route('sallesSport.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Salles de Sport
                </a>
                <div class="relative group">
                    <button class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Evênements
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="absolute hidden group-hover:block bg-white shadow-md rounded-md mt-1 py-1 w-48 z-10">
                        <a href="{{ route('reservations.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Réservations</a>
                        <a href="{{ route('salles.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Salles</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Casino
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="absolute hidden group-hover:block bg-white shadow-md rounded-md mt-1 py-1 w-48 z-10">
                        <a href="{{ route('VIP.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">VIP</a>
                        <a href="{{ route('jeux.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jeux</a>
                    </div>
                </div>
>>>>>>> e925d63 (Sauvegarde avant pull)
            </div>
        </div>
    </div>
</nav>

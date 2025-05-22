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
                <a href="{{ route('restaurants.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Restaurant
                </a>
                <a href="{{ route('etages.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Etages
                </a>
                <a href="{{ route('chambres.index') }}" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                    Chambres
                </a>
            </div>
        </div>
    </div>
</nav>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-2xl font-bold text-center">Welcome to Chirper, {{ $user->name }}!</h3>

                <div class="p-6 text-gray-900 text-center">
                    {{ __("You're logged in!") }}
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    <div class="bg-red-100 p-4 rounded-lg shadow-md text-center">
                        <h4 class="text-xl font-semibold">Total of Users</h4>
                        <p class="text-2xl font-bold">{{ $totalUsers }}</p>
                    </div>

                    <div class="bg-red-100 p-4 rounded-lg shadow-md text-center">
                        <h4 class="text-xl font-semibold">Total of Chirps</h4>
                        <p class="text-2xl font-bold">{{ $totalChirps }}</p>
                    </div>
                    
                    <div class="bg-red-100 p-4 rounded-lg shadow-md text-center">
                        @if ($latestChirp)
                            <h4 class="text-xl font-semibold">Date of Your Latest Chirp</h4>
                            <p class="text-2xl font-bold">{{ $latestChirp->created_at->diffForHumans() }}</p>
                        @else
                            <h4 class="text-xl font-semibold">Date of Your Latest Chirp</h4>
                            <p class="text-xl font-bold">No chirps yet. Let's post!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
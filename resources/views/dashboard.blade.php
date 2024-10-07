<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-4 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 bg-white">
                    <p>Clientes cadastrados: {{ count($clientes)}}</p>
                    <p class="mt-4"><a href="{{ route('meus.clientes', Auth::user()->id) }}" class="p-2 text-white bg-blue-500 rounded">Ver Cliente</a></p>
                </div>

                <div class="p-6 text-gray-900 bg-white">
                    <p>Usuários cadastrados: {{ count($users)}}</p>
                    <p class="mt-4"><a href="{{ route('user.index') }}" class="p-2 text-white bg-blue-500 rounded">Ver Cliente</a></p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

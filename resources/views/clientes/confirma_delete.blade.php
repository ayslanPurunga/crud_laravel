<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Deletar cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                    <p class="mb-4">
                        Gostaria mesmo de excluir o cliente {{ $id->nome }}?<br>
                        Não será possível desfazer esta ação.
                    </p>

                    <p>
                        <form action="{{ route('cliente.destroy', $id->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="text-red-500">Sim</button>
                            <a href="{{ route('cliente.show', $id->id) }}">Não</a>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

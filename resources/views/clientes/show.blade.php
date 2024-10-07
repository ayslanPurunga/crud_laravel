<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Detalhes do cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                    <p class="mb-4">
                        Exibindo detalhes do cliente {{ $cliente->nome}}
                    </p>
                    <p>
                        <a href="{{ route('meus.clientes', Auth::user()->id) }}" class="p-2 text-white bg-blue-500 rounded">Meus clientes</a>
                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="p-2 bg-green-500 rounded">Editar</a>
                        <a href="{{ route('confirma.delete', $cliente->id) }}" class="p-2 text-white bg-red-500 rounded">Deletar</a>
                    </p>
                </div>

                <div class="p-6 text-gray-900">
                    <p><strong>Nome: </strong>{{ $cliente->nome}}</p>
                    <p><strong>Email: </strong>{{ $cliente->email}} | <strong>Tel: </strong>{{ $cliente->telefone }}</p>
                    <p><strong>Empresa: </strong>{{ $cliente->empresa }}</p>
                    <p><strong>Tel. Comercial: </strong>{{ $cliente->tel_comercial }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

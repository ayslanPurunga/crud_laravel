<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>


                    @can('level')
                        <p class="p-6 mb-4">
                            <a href="{{ route('cliente.index') }}" class="p-2 text-white bg-blue-500 rounded">Lista de Clientes</a>
                        </p>
                    @endcan

                    <p class="p-6 mb-4">
                        <a href="{{ route('meus.clientes', Auth::user()->id) }}" class="p-2 text-white bg-blue-500 rounded">Lista de Clientes</a>
                    </p>

                    @if(session('msg'))
                        <p class="p-2 mb-4 text-center text-white bg-blue-500 rounded">{{ session('msg')}}</p>
                    @endif

                    <form action="{{ route('cliente.store') }}" method="post">
                        @csrf

                        <fieldset class="p-6 border-2 rounded">
                            <legend>Preencha todos os campos</legend>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class='p-4 mb-4 overflow-hidden bg-gray-100 rounded'>
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class='w-full rounded' required autofocus>
                            </div>

                            <div class='p-4 mb-4 overflow-hidden bg-gray-100 rounded'>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class='w-full rounded' required>
                            </div>

                            <div class='p-4 mb-4 overflow-hidden bg-gray-100 rounded' >
                                <label for="telefone">Telefone</label>
                                <input type="tel" name="telefone" id="telefone" class='w-full rounded' required>
                            </div>

                            <div class='p-4 mb-4 overflow-hidden bg-gray-100 rounded'>
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa" id="empresa" class='w-full rounded' required>
                            </div>

                            <div class='p-4 mb-4 overflow-hidden bg-gray-100 rounded'>
                                <label for="tel_comercial">Tel. Comercial</label>
                                <input type="tel" name="tel_comercial" id="tel_comercial" class='w-full rounded' required>
                            </div>

                            <div class='p-4 mb-4 overflow-hidden bg-gray-100 rounded'>
                                <input type="submit" value="Cadastrar" class="p-2 text-white bg-blue-500 rounded">
                                <input type="reset" value="Limpar" class="p-2 text-white bg-red-500 rounded">
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

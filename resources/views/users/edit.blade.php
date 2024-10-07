<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edição de Usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Editando nível de acesso do usuário <strong>{{$user->name}}</strong></p>
                    <p>Nível de acesso atual: <strong>{{ $user->level }}</strong></p>
                </div>

                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="level">Selecione o nível</label>
                        <select name="level" required class="px-8 py-1 rounded">
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="user">Usuário Comum</option>
                            <option value="admin">Administrador</option>
                        </select>
                        <button type='submit' class="px-4 py-2 text-white bg-blue-500 rounded">
                            <i class="mr-2 fa-solid fa-floppy-disk"></i>
                            Salvar alterações
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

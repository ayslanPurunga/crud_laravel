<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                </div>

                <div class="p-6 text-gray-900">

                    <div class="p-3 mb-4 bg-gray-100 rounded-lg">
                        {{ $users->links() }}
                    </div>

                    <table class="w-full table-auto">
                        <thead class="text-left bg-gray-100">
                            <tr>
                                <th class="text-center">Nível</th>
                                <th class="p-4">Nome</th>
                                <th>Email</th>
                                <th>Data de cadastro</th>

                                @can('level')
                                    <th class="text-center">Ações</th>
                                @endcan
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-100">
                                    <td class="text-center">
                                        @if ($user->level == 'admin')
                                        <i class="fa-solid fa-user-tie"></i>
                                        @endif
                                    </td>
                                    <td class="p-2">{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>

                                    @can('level')
                                        <td class="text-center">
                                            <a href="{{ route('user.edit', $user->id)}}">Editar</a>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

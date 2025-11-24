@extends('layouts.site')

@section('content')

    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Mensagens enviadas (Formulário)
    </h2>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if($contacts->count() == 0)
                    <p class="text-gray-700">Nenhuma mensagem enviada ainda.</p>
                @else
                    <table class="table table-bordered w-full text-left mt-4">
                        <thead>
                            <tr>
                                <th class="px-2 py-1">ID</th>
                                <th class="px-2 py-1">Nome</th>
                                <th class="px-2 py-1">Email</th>
                                <th class="px-2 py-1">Categoria</th>
                                <th class="px-2 py-1">Mensagem</th>
                                <th class="px-2 py-1">Data</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td class="px-2 py-1">{{ $contact->id }}</td>
                                    <td class="px-2 py-1">{{ $contact->name }}</td>
                                    <td class="px-2 py-1">{{ $contact->email }}</td>
                                    <td class="px-2 py-1">{{ $contact->category }}</td>
                                    <td class="px-2 py-1">{{ $contact->message }}</td>
                                    <td class="px-2 py-1">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>

@endsection

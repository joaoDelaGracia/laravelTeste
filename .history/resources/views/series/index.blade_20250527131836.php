<x-layout title="Séries">

    <a class="btn btn-dark mb-3" href="{{ route('series.create') }}">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}

            <button class="btn btn-danger btn-sm">X</button>
        </li>
        @endforeach
    </ul>
</x-layout>
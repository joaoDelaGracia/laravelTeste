<x-layout title="Séries">

    <a class="btn btn-dark mb-3" href="{{ route('series.create'); }}">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}</li>

        @endforeach
>>>>>>> ca29d7cbf21624a7bf8fc43471d86a007f2726c1
    </ul>
</x-layout>
<x-layout title="Séries">

    <a class="btn btn-dark mb-3" href="{{ route('series.create') }}">Adicionar</a>

    <div class="alert alert-sucess">
        {{ $menssagemSucesso }}
    </div>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->nome }}
            <form action="{{ route("series.destroy", $serie->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger btn-sm">X</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>
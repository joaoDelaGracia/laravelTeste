<x-layout title="Séries">

    <a class="btn btn-dark mb-3" href="{{ route('series.create') }}">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->nome }}
            <span class="d-flex">
                a.btn.btn-primary

                <form action="{{ route("series.destroy", $serie->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>

    <ul class="list-">
        @foreach ($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
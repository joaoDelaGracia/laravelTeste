<x-layout title="Novas Série">
    <form class="mb-3" action="/series/salvar" method="post">
        @csrf
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" id="nome" name="nome">
    </form>
    <button class="btn btn-primary">Adicionar</button>
</x-layout>
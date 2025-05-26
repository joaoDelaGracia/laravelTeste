<x-layout title="Novas Série">
    <form action="/series/salvar" method="post">
        @csrf
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" id="nome" name="nome">
    </form>
</x-layout>
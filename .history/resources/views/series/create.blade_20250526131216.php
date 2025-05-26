<x-layout title="Novas Série">
    @csrf
    <form action="/series/salvar" method="post">
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" id="nome" name="nome">
    </form>
</x-layout>
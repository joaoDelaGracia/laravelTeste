<x-layout title="Novas Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
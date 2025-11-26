<x-layout titulo="Editar">
    <form class="form-control" action="../atualizar/{{$dado->id}}" method="GET">
        <label>Id:</label>
        <input type="number" id="id" name="id" value="{{$dado->id}}" disabled required>

        <label>Nome:</label>
        <input type="text" id="nome" name="nome" value="{{$dado->nome}}">

        <label>Data de Lançamento:</label>
        <input type="data" id="dataLancamento" name="dataLancamento" value="{{$dado->dataLancamento}}">
        
        <label>Gênero:</label>
        <input type="text" id="genero" name="genero" value="{{$dado->genero}}">
        
        <label>Avaliação Pessoal:</label>
        <input type="number" id="avaliacaoPessoal" name="avaliacaoPessoal" value="{{$dado->avaliacaoPessoal}}">

        <label>Comentário:</label>
        <input type="text" id="comnentario" name="comentario" value="{{$dado->comentario}}">
        <button class="btn btn-primary" type="submit">Atualizar</button>
        <a class="btn btn-primary" href="../consultar">Voltar</a>
        
        <!--BOTAO MODAL-->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button>
        <!--MODAL-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem deseja que deseja excluir o filme: {{$dado->id}}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismis="modal">Não</button>
                        <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout>
<x-layout titulo="Cadastrar">
    <body>
        <form class="container" action="cadastrar/salvar" method="GET">
            @csrf
            <div class="mb3">
                <label class="form-label">nome</label>
                <textarea name="nome" class="form-control" id="nome"></textarea>
            </div>
            <br>
            <div class="mb3">
                <label class="form-label">Data de Lançamento</label>
                <input type="date" name="dataLancamento" class="form-control" id="dataLancamento"></input>
            </div>
            <br>
            <div class="mb3">
                <select class="form-select" name="genero" id="genero" aria-label="Floating label select example">
                    <option value="Ação"><li><a class="dropdown-item" href="#">Ação</a></li></option>
                    <option value="Drama"><li><a class="dropdown-item" href="#">Drama</a></li></option>
                    <option value="Ficção"><li><a class="dropdown-item" href="#">Ficção</a></li></option>
                    <option value="Comédia"><li><a class="dropdown-item" href="#">Comédia</a></li></option>
                    <option value="Anime"><li><a class="dropdown-item" href="#">Anime</a></li></option>
                </select>
            </div>
            <br>
            <div class="mb3">
                <label class="form-label">Avaliação Pessoal</label>
                <p>Avalie este filme em uma escala de 0 a 5!</p>
                <input class="inputAvalaicao" type="number" min="0" max="5" name="avaliacaoPessoal" class="form-range" id="avaliacaoPessoal"></input>
                
                <!--ESTRELA
                <div class="estrelas">
                    <input type="radio" name="estrela" id="vazio" value="0" checked>

                    Opção para selecionar 1 estrela
                    <label for="estrela_um"><svg class="opcao fa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg></label>
                    <input type="radio" name="estrela" id="estrela_um" id="vazio" value="1">

                    Opção para selecionar 2 estrela
                    <label for="estrela_dois"><svg class="opcao fa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg></label>
                    <input type="radio" name="estrela" id="estrela_dois" id="vazio" value="2">

                    Opção para selecionar 3 estrela 
                    <label for="estrela_tres"><svg class="opcao fa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg></label>
                    <input type="radio" name="estrela" id="estrela_tres" id="vazio" value="3">

                    Opção para selecionar 4 estrela 
                    <label for="estrela_quatro"><svg class="opcao fa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg></label>
                    <input type="radio" name="estrela" id="estrela_quatro" id="vazio" value="4">

                    Opção para selecionar 5 estrela 
                    <label for="estrela_cinco"><svg class="opcao fa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg></label>
                    <input type="radio" name="estrela" id="estrela_cinco" id="vazio" value="5">
                </div>-->
            </div>
            <br>
            <div class="mb3">
                <label class="form-label">Comentário</label>
                <textarea name="comentario" class="form-control" id="comentario"></textarea>
            </div>
            <br><br>
            <button type="submit" class="btn btn-success" href="consultar">Salvar</button>
            <a class="btn btn-success" href="/">Voltar</a>
        </form>
    </body>
</x-layout>
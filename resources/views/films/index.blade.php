<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Test Api Star Wars</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Api</title>.
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.css">

        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <main>
            <div class="container">
                <h1>FILMS START WARS</h1>

                <div class="row spaceNavBar">
                    <div class="col-md-12">
                        <a class="btn btn-secondary btnBack" href="#">Voltar</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <form class="form-inline" method="GET" action="/filmes/buscar/">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" id="searchFilm" value=""  placeholder="Digite Nome do Filme" required>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 btnSearch">Buscar</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (!$peopleArray['results'])
                            <p>Nenhum Filme encontrado.</p>
                        @else
                            @foreach ($peopleArray['results'] as $peopleValue )
                                <div class="card" style="width: 18rem;">
                                    <img src="https://www.blog.xmundo.net/wp-content/uploads/2012/05/Star_Wars_Logo.svg_-200x200.png" class="card-img-top" alt="Star Wars">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $peopleValue['title'] }}</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <p><strong>Diretor</strong></p>
                                            {{ $peopleValue['director'] }}
                                        </li>
                                        <li class="list-group-item">
                                            <p><strong>Produtor</strong></p>
                                            {{ $peopleValue['producer'] }}
                                        </li>
                                        <li class="list-group-item">
                                            <p><strong>Lançado</strong></p>
                                            {{ $peopleValue['release_date'] }}
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <a class="btn btn-info" href="/filmes/{{ preg_replace('/[^0-9]/', '', $peopleValue['url']) }}" role="button">Mais Informações</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            <!-- Modal -->
            <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Alerta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="/js/default.js"></script>
        <main>
    </body>
</html>

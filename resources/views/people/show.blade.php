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
                <div class="card" style="width: 18rem;">
                    <img src="https://www.blog.xmundo.net/wp-content/uploads/2012/05/Star_Wars_Logo.svg_-200x200.png" class="card-img-top" alt="Star Wars">
                    <div class="card-body">
                        <h5 class="card-title">{{ $peopleArray['title'] }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p><strong>Diretor</strong></p>
                            {{ $peopleArray['director'] }}
                        </li>
                        <li class="list-group-item">
                            <p><strong>Produtor</strong></p>
                            {{ $peopleArray['producer'] }}
                        </li>
                        <li class="list-group-item">
                            <p><strong>Lançado</strong></p>
                            {{ $peopleArray['release_date'] }}
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="/filmes/{{ $peopleArray['episode_id'] }}/personagens" id="people">Personagens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#planetas" id="planets">Planetas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#especies">Espécies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#naves">Naves</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#veiculos">Veículos</a>
                            </li>
                        </ul>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Altura</th>
                                <th scope="col">Peso</th>
                                <th scope="col">Cabelo</th>
                                <th scope="col">Pele</th>
                                <th scope="col">Olhos</th>
                                <th scope="col">Gênero</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
               
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="/js/default.js"></script>
        <main>
    </body>
</html>

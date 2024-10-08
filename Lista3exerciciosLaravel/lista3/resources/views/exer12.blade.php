<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercício 12</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <main class="container">
            <form action="/respostaExer12" method="POST">
                @CSRF
                <div class="row">
                    <div class="col">
                        <label class="form-label">Informe a base da exponenciação: </label>
                        <input type="number" name="base" class="form-control"/>
                    </div>
                    <div class="col">
                        <label class="form-label">Informe o expoente da exponenciação: </label>
                        <input type="number" name="expoente" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary mt-3">Calcular</button>
                    </div>
                </div>
            </form>
        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>

</html>
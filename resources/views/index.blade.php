<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Contato</title>
    <style>
        .navbar {
            background-color: rgba(255, 7, 7, 0.63);
        }

        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .footer-container {
            background-color: #333;
            padding: 20px;
            text-align: center;
            color: white;
        }

        body {
            background-color: rgb(255, 255, 255);
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: rgb(255, 7, 7);
            position: relative;
        }

        .line::before {
            content: '';
            position: absolute;
            width: 50%;
            height: 10px;
            background-color: rgb(255, 7, 7);
            border-radius: 5px;
            left: 0;
            top: -4px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="row text-center">
            <div class="col">
                <h3>Contato</h3>
                <div class="line"></div>
                <br>
            </div>
        </div>
        &nbsp;
        <div class="d-flex justify-content-center align-items-center">
            <form action={{ route('home') }} method="get" class="w-50">
                <div class="mb-3">
                    <input name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu nome aqui">
                </div>
                <div class="mb-3">
                    <input name="telefone" type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu telefone aqui">
                </div>
                <div class="mb-3">
                    <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu email aqui">
                </div>
                <div class="mb-3">
                    <input name="instituição" type="text" class="form-control" id="formGroupExampleInput" placeholder="Sua instituição aqui">
                </div>
                <div class="mb-3">
                    <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Sua mensagem aqui"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </div>
            </form>
        </div>
    </main>

    &nbsp;

    <footer class="footer-container">
        <div class="footer-content">
            &copy; 2025 - Todos os direitos reservados
        </div>
    </footer>
</body>

</html>
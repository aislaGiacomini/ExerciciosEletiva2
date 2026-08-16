<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', '')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .navbar-roxa {
        background: linear-gradient(90deg, #3c0561, #3c0561);
        padding: 12px 20px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-roxa .navbar-brand {
        color: white;
        font-size: 1.2rem;
    }

    .navbar-roxa .nav-link {
        color: rgba(255, 255, 255, 0.9);
        margin-left: 8px;
        border-radius: 8px;
        padding: 8px 14px;
        transition: 0.3s;
    }

    .navbar-roxa .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.15);
        color: white;
    }

    .dropdown-menu {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        padding: 8px;
    }

    .dropdown-item {
        border-radius: 6px;
        padding: 8px 12px;
        transition: 0.2s;
    }

    .dropdown-item:hover {
        background-color: #eee0fa;
        color: #3c0561;
    }

    .dropdown-header {
        color: #3c0561;
        font-weight: bold;
    }
    .lista-exercicios {
    width: 450px;
    padding: 15px;
}

.lista-exercicios .row {
    margin: 0;
}

.lista-exercicios .col-6 {
    padding: 0 5px;
}

.lista-exercicios .dropdown-item {
    padding: 9px 12px;
    border-radius: 6px;
}

.lista-exercicios .dropdown-item:hover {
    background-color: #eee0fa;
    color: #4b1c71;
}
</style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-roxa">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="/">
            Exercícios Laravel
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <!-- EXERCÍCIOS -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        Exercícios

                    </a>

                    <!-- MENU -->
                    <ul class="dropdown-menu dropdown-menu-end lista-exercicios">

                        <li>
                            <h6 class="dropdown-header">
                                Lista de exercícios
                            </h6>
                        </li>

                        <div class="row">

                            <!-- COLUNA 1 -->
                            <div class="col-6">

                                <li>
                                    <a class="dropdown-item" href="/exercicio1">
                                        Exercício 1
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio2">
                                        Exercício 2
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio3">
                                        Exercício 3
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio4">
                                        Exercício 4
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio5">
                                        Exercício 5
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio6">
                                        Exercício 6
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio7">
                                        Exercício 7
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio8">
                                        Exercício 8
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio9">
                                        Exercício 9
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio10">
                                        Exercício 10
                                    </a>
                                </li>

                            </div>

                            <!-- COLUNA 2 -->
                            <div class="col-6">

                                <li>
                                    <a class="dropdown-item" href="/exercicio11">
                                        Exercício 11
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio12">
                                        Exercício 12
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio13">
                                        Exercício 13
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio14">
                                        Exercício 14
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio15">
                                        Exercício 15
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio16">
                                        Exercício 16
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio17">
                                        Exercício 17
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio18">
                                        Exercício 18
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio19">
                                        Exercício 19
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/exercicio20">
                                        Exercício 20
                                    </a>
                                </li>

                            </div>

                        </div>

                    </ul>

                </li>

            </ul>

        </div>

    </div>
</nav>

    <!-- Conteúdo de cada exercício -->
    <div class="container py-3">
        @yield('conteudo')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous">
    </script>

</body>
</html>
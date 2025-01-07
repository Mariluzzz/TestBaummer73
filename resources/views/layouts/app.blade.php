<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="{{ route('home')}}" class="brand-logo">G.T</a>
            <ul id="nav-mobile" class="right">
                @guest
                    <li><a href="{{ route('user.login') }}">Login</a></li>
                @endguest
                @auth
                    <li><a href="{{ route('collaborators.index') }}">Colaboradores</a></li>
                    <li><a href="{{ route('tasks.index') }}">Tarefas</a></li>
                    <li>
                        <form action="{{ route('user.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="waves-effect waves-light btn red">Sair</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.FormSelect.init(document.querySelectorAll('select'));
        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</body>
</html>

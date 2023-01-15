<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <div class="nav-link">
                            <button type="button" class="btn-sm btn btn-primary position-relative">
                                Total
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                  <livewire:student.counter/>
                                </span>
                              </button>
                        </div>
                    </ul>


                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
        </main>
    </div>
    @livewireScripts

  <script src="{{ asset('jquery/js/jquery-3.5.1.js') }}"></script>
  <script>

        window.addEventListener('close_modal',event => {
            $('#addModel').modal('hide');
            $('#editModel').modal('hide');

        })
        window.addEventListener('edit_modal', event => {
            $('#editModel').modal('show');
        })
    // })
</script>
</body>
</html>

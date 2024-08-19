<!DOCTYPE html>
<html class="antialiased" lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }}</title>
    <link href="/favicon" />
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
    <div class="wrapper flex flex-1 flex-col bg-gray-100">
        <header class="container mx-auto bg-white overflow-hidden px-4 sm:px-6">
            <div class="border-b">
                <div
                    class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
                    <div class="flex justify-center">
                        <a href="/" class="inline-block sm:inline hover:opacity-75">
                            {{-- <img src="/assets/images/logo.png" width="222" height="30" alt="" /> --}}
                        </a>
                    </div>
                    <div class="flex justify-center">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="/">Laravel</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('transactions.index') }}">Сделки</a>
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('contacts.index') }}">Контакты</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-4 sm:px-6">
                <section class="py-2">
                    @yield('breadcrumbs')
                </section>
            </div>
        </header>
        @yield('content')
    </div>
    </main>
    <footer class="border-t bg-white">
        <div class="container mx-auto overflow-hidden px-4 sm:px-6">
            <div class="space-y-4 sm:space-y-0 sm:flex sm:justify-between items-center py-6 px-2 sm:px-0">
                <div class="copy pr-8">
                    © 2024 База знаний Laravel
                </div>
                <div class="text-right">
                    <a href="/" target="_blank" class="inline-block">Сделано в свободном мире
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>

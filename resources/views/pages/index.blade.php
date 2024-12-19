<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Michael Dachs-Wiesinger</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/sass/app.scss'])
        @vite(['resources/js/app.js'])

    </head>
    <body class="">
        <header class="main-nav">
            <p>
                header
            </p>
        </header>

        <main class="">
            <section class="section-standard">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>
                                Michael DW
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="">
            <p>
                footer
            </p>
        </footer>
    </body>
</html>

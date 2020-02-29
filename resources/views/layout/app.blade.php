<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro de Produtos</title>
        <style>
            body{
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            @component('component_navbar', [ "current" => $current ])
            @endcomponent
            <main role='main'>
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>
        
        <script src="{{ asset('js/app.js') }}" type="text/javascript">
        </script>
    </body>
</html>

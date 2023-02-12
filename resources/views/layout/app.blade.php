<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

        @vite('resources/css/app.css')
      
    </head>
    <body class="antialiased">
        {{ $slot }}

        <div id="app"></div>

        @vite('resources/js/app.js')
    </body>
</html>


<!--     @production
        @php
            $manifest = json_decode(file_get_contents(
                public_path('build/manifest.json')
            ));
        @endphp
        <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
        <link rel="stylesheet" href="/build/{$manifest['resources/js/app.js']['css'][0]}" />
    @else
        <script type="module" src="http://localhost:3000/@vite/client"></script>
        <script type="module" src="http://localhost:3000/resources/js/app.js"></script>
    @endproduction -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @livewireStyles
    </head>
    <body>
        @livewire('count-down')

        <p>Laravel v{{ app()->version() }}</p>

        @livewireScripts
    </body>
</html>

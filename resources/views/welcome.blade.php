<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        <style>
        <body>
        body{
        background-color: white;
        font-family: "Roboto";
        }
        </style>
        </head>

        <header>
        @include('homepagina.navbar')

        <div class="whitespace1"></div>

        
        @include('homepagina.slider')


        @include('homepagina.tussen')


        <div class="whitespace1"></div>

        @include('homepagina.onderste') 


        @include('homepagina.footer')

        </body>
        </html>


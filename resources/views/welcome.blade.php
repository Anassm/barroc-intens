<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
        <style>
        body{
        background-color: #212121;
        font-family: "Roboto";
        }

        .cards{
        margin-left: 2.5%;
        box-shadow: #212121 0px 19px 38px, #212121 0px 15px 12px;
        border-radius: 20px;
        max-width: 95%;
        padding-top: 40px;
        padding-bottom: 40px;
        margin-bottom: -290px;
        position: relative;
        background-color:#fff;
        }
        .cards2{
        margin-left: 2.5%;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        border-radius: 20px;
        max-width: 95%;
        padding-top: 40px;
        padding-bottom: 40px;
        margin-top: -190px;
        background-color: #fff;
        }
        .cards3{
        margin-left: 2.5%;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        border-radius: 20px;
        max-width: 95%;
        padding-top: 40px;
        padding-bottom: 40px;
        margin-bottom: -190px;
        background-color: #fff;
        position: relative;
        }

        .fixed-bg {
        background-image: url("/images/koffie.jpg");
        min-height: 600px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .fixed-bg2 {
        background-image: url("/images/koffie.jpg");
        min-height: 250px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .whitespace1{
        height: 50px;
        }
        </style>
        </head>

        <header>
        <div class="navbar">
        @include('homepagina.navbar')
        </div>
        </header>
        <main>

        <div class="whitespace1"></div>

        <div class="cards">
        @include('homepagina.slider')
        </div>

        <div class="fixed-bg"></div>

        <div class="cards2">
        @include('homepagina.tussen')
        </div>

        <div class="whitespace1"></div>

    <div class="cards3">
        @include('homepagina.onderste')
    </div>


        <div class="fixed-bg2"></div>

        </main>
        <footer>
        @include('homepagina.footer')
        </footer>

        </body>
        </html>


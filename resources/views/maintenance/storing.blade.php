<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        @include("homepagina.navbar")
    </header>

    <h1 class="text-4xl pl-48 pt-16 font-semibold">Overzicht storingen</h1>
    <table>
        <tr class="">
            <th class="text-left pt-6 pl-6">Status</th>
            <th class="text-left pt-6 pl-6">Naam</th>
        </tr>
        <tr>
            <td class="text-left pt-6 pl-6">Submitted</td>
            <td><a href="#" class="text-left pt-6 pl-6" mb-5    >Een link van een storing</a></td>
        </tr>
    </table>

    <footer>
        @include("homepagina.footer")
    </footer>
</body>
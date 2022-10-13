<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorie overzicht
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class = "tabel">
                <tr>
                    <th>Categorie naam:</th>
                    <th>Employee only or not:</th>
                </tr>
                @foreach($categories as $categorie)
                <tr>
                    <td><a href="/inkoop/productlist/{{$categorie->id}}">{{$categorie->name}}</a></td>
                    <td>@if($categorie->is_employee_only == 0)
                        Not employee only
                    @else
                            Employee only
                    @endif</td>
                    <td><a href="/categorie/edit/{{$categorie->id}}">Wijzig</a></td>
                    <td> <a href="/categorie/delete/{{$categorie->id}}">Verwijderen</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
</body>
</html>
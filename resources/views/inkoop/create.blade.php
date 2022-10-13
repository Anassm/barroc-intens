<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten toevoegen</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categorie toevoegen van product 
        </h2>
    </x-slot>
    <! --- een categorie toevoegen --->
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('inkoop.create.inkoop') }}" method="post">
                {{ csrf_field() }}
                <table>
                <tr>
                <td><label for="txtname"class="text-black">Categorie naam: </label>
                <input type="text" name="name" id="txtname"></td>
                </tr>
                <tr>
                <td><label for="txtname"class="text-black">Employee only or not: </label></td>
                </tr>
                <tr>
                <td><input type="checkbox" id="employee" name="is_employee_only" value="1">
                <label for="employee">employee only</label><br>
                <input type="checkbox" id="employee" name="is_employee_only" value="0">
                <label for="employee">not employee only</label><br></td>
                </tr>
                </table>
                @error('name')
                <p>{{$message}}</p>
                @enderror
                <input style="background-color: aqua; padding: 0.5em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>
</body>
</html>
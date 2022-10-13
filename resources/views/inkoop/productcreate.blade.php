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
           Producten toevoegen
        </h2>
    </x-slot>
    <! --- dit is een bucketlistitems toevoegen  --->
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('inkoop.productcreate.inkoop') }}" method="post">
                {{ csrf_field() }}
                <table>
                <select name="categorie" id="categorie">
                @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
                </select>
                <tr>
                <td><label for="txtname"class="text-black">Titel: </label>
                <input type="text" name="name" id="txtname"></td>
                </tr>
                <tr>@error('name')
                <td>{{$message}}</td>
                @enderror</tr>
                <tr>
                <td><label for="txtdescription"class="text-black">Description: </label>
                <input type="text" name="description" id="txtdescription"></td>
                </tr>
                <tr>@error('description')
                <td>{{$message}}</td>
                @enderror</tr>
                <tr>
                <td><label for="txtpriority"class="text-black">image: </label>
                <input type="text" name="image_path" id="txtpriority"></td>
                </tr>
                <tr>@error('image_path')
                <td>{{$message}}</td>
                @enderror</tr>
                <tr>
                <td><label for="txtprice"class="text-black">Price: </label>
                <input type="text" name="price" id="txtprice"></td>
                </tr>
                <tr>@error('price')
                <td>{{$message}}</td>
                @enderror</tr>
                </table>
                <input style="background-color: aqua; padding: 0.5em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>
        </div>
    </div>
</x-app-layout>
</body>
</html>
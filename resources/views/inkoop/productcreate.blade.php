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
        <h2 class="font-semibold text-xl text-amber-300 leading-tight">
           Producten toevoegen
        </h2>
    </x-slot>
    <! --- dit is een bucketlistitems toevoegen  --->
    <div>
        <div class="">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('inkoop.productcreate.inkoop') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Categorien naam:</label>
                <select name="product_category_id" id="categorie" class="dark:bg-gray-800 text-amber-300">
                @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
                </select>
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Naam:</label>
                    <input type="text" id="name" name="name" class=" w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300 "  placeholder="" required>
                    </div>
                    @error('name')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Beschrijving:</label>
                    <input type="text" id="description"  name="description" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('description')
                    {{$message}}
                    @enderror
                    <label for="txtselect"class="text-black">Selecteer een file: </label><label class="dark:bg-gray-800 text-amber-300 w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class="mt-2 text-base leading-normal">
                            Select a file
                        </span>
                        <input 
                            type="file"
                            name="image_path"
                            class="hidden">
                        </label>
                        @error('image_path')
                        {{$message}}
                        @enderror
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Prijs:</label>
                            <input type="text" id="price" name="price" class="w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500 text-amber-300 " required>
                        </div>
                        @error('price')
                        {{$message}}
                        @enderror
                    <button type="submit" class="text-gray-800 bg-amber-300 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-300 dark:hover:bg-amber-100 dark:focus:ring-gray-800">Submit</button>
                </form>
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>
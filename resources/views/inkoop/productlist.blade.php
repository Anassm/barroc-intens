<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-amber-300 leading-tight">
               Product overzicht
            </h2>
        </x-slot><br/>
        
        <div class=" flex justify-center">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg lg:w-3/4">
                <table class="w-full text-sm text-left text-amber-300 dark:text-amber-4300 ">
                    <thead class="text-xs text-gray-800 uppercase bg-gray-50 dark:bg-gray-700 dark:text-amber-300">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                {{ $categories->name }}
                            </th>
                            <th scope="col" class="py-3 px-6">
                              Productnaam:
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Beschrijving:
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Afbeelding:
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Prijs:
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories->products as $product)
                        
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-amber-300">
                            </th>
                            <td class="py-4 px-6">
                                {{ $product->name}}
                            </td>
                            <td class="py-4 px-6">
                                {{ $product->description }}
                            </td>
                            <td class="py-4 px-6">
                                <img src="{{ asset('images/' . $product->image_path) }}" alt="" style="height: 200px">
                            </td>
                            <td class="py-4 px-6">
                                {{ $product->price }}
                            </td>
                            <td class="py-4 px-6 text-right">
                                <a href="/product/edit/{{$product->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <a href="/product/delete/{{$product->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </x-app-layout>
</body>
</html>
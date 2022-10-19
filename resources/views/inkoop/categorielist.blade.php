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
            Categorie overzicht
        </h2>
    </x-slot><br/>
    <div class=" flex justify-center">
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg lg:w-3/4">
        <table class="w-full text-sm text-left text-yellow-500 dark:text-yellow-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-yellow-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Categorie naam:
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Employee only or not:
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
                @foreach($categories as $categorie)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="/inkoop/productlist/{{$categorie->id}}">{{$categorie->name}}</a>
                    </th>
                    <td class="py-4 px-6">
                        @if($categorie->is_employee_only == 0)
                        Not employee only
                    @else
                            Employee only
                    @endif
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="/categorie/edit/{{$categorie->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="/categorie/delete/{{$categorie->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
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
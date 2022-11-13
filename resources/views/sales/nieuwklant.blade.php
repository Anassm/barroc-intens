<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-300 leading-tight">
           Klant toevoegen
        </h2>
    </x-slot>
    <! --- dit is een Klant toevoegen  --->
    <div>
        <div class="">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="{{ route('sales.nieuwklant.sales') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Naam:</label>
                    <input type="text" id="name" name="name" class=" w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300 "  placeholder="" required>
                    </div>
                    @error('name')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Phonenumber:</label>
                    <input type="text" id="phone"  name="phone" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('number')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Streetname:</label>
                    <input type="text" id="street"  name="street" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('street')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Housenumber:</label>
                    <input type="text" id="house_number"  name="house_number" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('house_number')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">City:</label>
                    <input type="text" id="city"  name="city" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('city')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Country Code:</label>
                    <input type="text" id="country_code"  name="country_code" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('country_code')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Contact ID:</label>
                    <input type="text" id="contact_id"  name="contact_id" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('contact_id')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Created at:</label>
                    <input type="datetime-local" id="created_at"  name="created_at" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('created_at')
                    {{$message}}
                    @enderror
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Updated at:</label>
                    <input type="datetime-local" id="updated_at"  name="updated_at" class= "w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300" required>
                    </div>
                    @error('updated_at')
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
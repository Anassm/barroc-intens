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



<div class="px-6 w-80">
    <form action="{{ route('sales.notes.sales') }}" method="post">
        {{ csrf_field() }}
        <label for="dropdown" class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-800">Kies een klant:</label>
    <select name="company_id" id="company" class="dark:bg-gray-800 text-amber-300">
        @foreach($klanten as $klant)
                <option value="{{ $klant->id }}">{{ $klant->name }}</option>
        @endforeach
        </select>
        
        <label for="Opmerkingen" class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-800">Opmerkingen:</label>
        <textarea name="note" id="opmerkingen" class="bg-gray-50 border border-gray-300  text-smrounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-200 dark:text-amber-300  text-amber-300" placeholder="opmerkingen" required></textarea><br/>

        <button type="submit" class="w-full text-white bg-amber-300 hover:bg-amber-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-300 dark:hover:bg-amber-200 dark:focus:ring-blue-800">Sla afspraak op</button>
        </form>
    </div>
    
</x-app-layout>
</body>
</html>
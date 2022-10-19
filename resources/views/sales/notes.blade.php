<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('sales.notes.sales') }}" method="post">
        {{ csrf_field() }}
    <select name="company_id" id="company">
        @foreach($klanten as $klant)
                <option value="{{ $klant->id }}">{{ $klant->name }}</option>
        @endforeach
        </select>
        
                            <label for="Opmerkingen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Opmerkingen:</label>
                            <textarea name="note" id="opmerkingen" class="bg-gray-50 border border-gray-300 text-gray-900 text-smrounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="opmerkingen" required></textarea>

                            <label for="Datum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Datum:</label>
                            <input type="date" name="datum" id="datum" placeholder="datum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sla afspraak op</button>
                    </form>
</body>
</html>
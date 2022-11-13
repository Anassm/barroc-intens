<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-amber-300 leading-tight">
               Product overzicht
            </h2>
        </x-slot><br/>
        <label for="default-search" class="mb-2 text-sm font-medium text-amber-300 sr-only dark:text-amber-300 ">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none ">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-800 dark:text-gray-800 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search"id="myInput" onkeyup="myFunction()" class="block p-4 pl-10 text-sm text-gray-800 bg-gray-800 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-amber-300 dark:border-gray-800 dark:placeholder-gray-800 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-80  " placeholder="Search" required="">
        </div>
        <div class=" flex justify-center">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg lg:w-3/4">
                <table  id="myTable" class="w-full text-sm text-left text-amber-300 dark:text-amber-4300 ">
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
                                Hoeveelheid:
                            </th>
                            <th scope="col" class="py-3 px-6">
                                voorraad:
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
                            <td class="py-4 px-6">
                                {{ $product->amount }}
                            </td>
                            <td class="py-4 px-6">
                               @if($product->amount >= 150)
                                    op voorraad
                                @else
                                    Niet op voorraad 
                                @endif
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
<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    
    </script>
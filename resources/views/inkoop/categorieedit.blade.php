<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-300 leading-tight">
            categorie wijzigen
        </h2>
    </x-slot>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/categorie/edit/{{ $categorie->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">Naam:</label>
                    <input type="name" id="name" name="name" class=" w-96 bg-amber-300 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-amber-300 dark:text-amber-300 dark:focus:ring-blue-500 dark:focus:border-blue-500  text-amber-300 "  placeholder="" value="{{$categorie->name}}" required>
                    </div>
                    @error('name')
                    {{$message}}
                    @enderror
                    <div class="mb-6 text-gray-800">
                        <input type="checkbox" id="employee" name="is_employee_only" value="1">
                        <label for="employee">employee only</label><br>
                        <input type="checkbox" id="employee" name="is_employee_only" value="0">
                        <label for="employee">not employee only</label><br></td>
                    </div>
                    @error('is_employee_only')
                    {{$message}}
                    @enderror
                    <button type="submit"  class="text-gray-800 bg-amber-300 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-300 dark:hover:bg-amber-100 dark:focus:ring-gray-800">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
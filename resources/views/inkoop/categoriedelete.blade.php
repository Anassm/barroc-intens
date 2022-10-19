<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-300 leading-tight">
            Producten verwijderen
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <form action="{{ route('inkoop.categoriedelete.delete', ['categories'=>$categories->id]) }}" method="post">
                    {{ csrf_field() }}
                    @method('delete')
                    <p>Titel: {{ $categories->name }}</p>
                    @if($categories->is_employee_only == 0)
                        <p>Not employee only</p>
                    @else
                    <p>Employee only</p>
                    @endif
                    <input style=" background-color: blue; padding: 2em; border-radius: 20px;" type="submit" value="Verwijderen">
                </form>
        </div>
    </div>
</x-app-layout>
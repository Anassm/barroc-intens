<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-amber-300 leading-tight">
            Storingen meldingen
        </h2>
    </x-slot>
    <h1 class="text-4xl pl-48 pt-16 font-semibold">Overzicht storingen</h1>

    <h2 class="text-2xl pl-48 pt-8 font-semibold">Alle storingen</h2>
    <!-- overall -->
    <table class="w-9/12 ml-48 mt-6 border-2 border-black">
        @foreach($storing as $storing)
        <tr>
            <th class="text-left p-4">Status</th>
            <th class="text-left p-4">Naam</th>
            <th class="text-left p-4">Tijd</th>
        </tr>
        <tr>
            <td class="p-4">{{$storingen->status}}</td>
            <td class="p-4">{{$storingen->link}}</td>
            <td class="p-4">{{$storingen->created_at}}</td>
        </tr>
        <tr>
            <td class="p-4">Failed</td>
            <td class="p-4"><a href="#">Link</a></td>
            <td class="p-4">04/11/2022 - 14:37:13</td>
        </tr>
        <tr>
            <td class="p-4">Unknown</td>
            <td class="p-4"><a href="#">Link</a></td>
            <td class="p-4">30/10/2022 - 13:26:24</td>
        </tr>
        @endforeach
    </table>

    <h2 class="text-2xl pl-48 pt-16 font-semibold">Storingen van vandaag</h2>
    <!-- Dagelijks -->
    <table class="w-9/12 ml-48 mt-6 border-2 border-black">
        <tr>
            <th class="text-left p-4">Status</th>
            <th class="text-left p-4">Naam</th>
            <th class="text-left p-4">Tijd</th>
        </tr>
        <tr>
            <td class="p-4">Geen storingen</td>
            <td class="p-4"><a href="#">Geen storingen</a></td>
            <td class="p-4">Geen storingen</td>
        </tr>
    </table>
</x-app-layout>
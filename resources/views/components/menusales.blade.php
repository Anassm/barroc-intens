
<x-jet-nav-link class="text-amber-300  hover:text-amber-200  hover:border-amber-300" href="{{ route('sales.notes.sales') }}"
:active="request()->routeIs('sales.notes.sales')">
Notes
</x-jet-nav-link>

<x-jet-nav-link class="text-amber-300  hover:text-amber-200  hover:border-amber-300" href="{{ route('sales.nieuwklant.sales') }}"
:active="request()->routeIs('sales.nieuwklant.sales')">
Klanten toevoegen
</x-jet-nav-link>

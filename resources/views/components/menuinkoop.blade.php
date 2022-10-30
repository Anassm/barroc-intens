
<x-jet-nav-link class="text-amber-300  hover:text-amber-200  hover:border-amber-300" href="{{ route('inkoop.create.inkoop') }}"
:active="request()->routeIs('inkoop.create.inkoop')">
Categorie toevoegen
</x-jet-nav-link>
<x-jet-nav-link class="text-amber-300  hover:text-amber-200  hover:border-amber-300" href="{{ route('inkoop.categorielist') }}"
:active="request()->routeIs('inkoop.categorielist')">
Categories tonen
</x-jet-nav-link>
<x-jet-nav-link class="text-amber-300  hover:text-amber-200  hover:border-amber-300" href="{{ route('inkoop.productcreate.inkoop') }}"
:active="request()->routeIs('inkoop.productcreate.inkoop')">
Product toevoegen
</x-jet-nav-link>
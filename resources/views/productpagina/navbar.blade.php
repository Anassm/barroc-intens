<nav class=" px-2 bg-white border-gray-200 dark:bg-amber-300 dark:border-amber-300">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="#" class="flex items-center">
          <img src="/images/Barroc-intens.png" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-gray-800">Barroc-intens</span>
      </a>
      <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col p-4 mt-4 bg-gray-800 rounded-lg border border-gray-800 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-gray-800 dark:bg-amber-300 md:dark:bg-amber-300 dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 pr-4 pl-3 text-gray-800 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-gray-800 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-800 md:hover:bg-transparent md:border-0 md:hover:text-gray-800 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Categorieën <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                {{-- @foreach($categories as $categorie) --}}
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      {{-- <a href="/productpagina/{{$categorie->id}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$categorie->name}}</a> --}}
                    </li>
                    <li>
                      <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                  </ul>
                  {{-- @endforeach --}}
                  <div class="py-1">
                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                  </div>
              </div>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-800 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-800 md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
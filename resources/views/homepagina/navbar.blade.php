
<nav class="px-2 bg-white border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="/images/Barroc-intens.png" class="mr-3 h-6 sm:h-10" alt="Flowbite Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-amber-300">Barroc-intens</span>
    </a>
    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500" aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul class="flex flex-col p-4 mt-4 bg-amber-300 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-amber-300 dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 pr-4 pl-3 text-amber-300 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-amber-200 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10.4px, 0px);">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-amber-300 rounded hover:bg-amber-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-amber-200 md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-amber-300 md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-amber-300 rounded hover:bg-amber-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-amber-200 md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-amber-300 md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-amber-300 rounded hover:bg-amber-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-amber-200 md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-amber-300 md:dark:hover:bg-transparent">Contact</a>
        </li>
        <li>
          @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/dashboard') }}" class="block py-2 pr-4 pl-3 text-amber-300 rounded hover:bg-amber-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-amber-200 md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-amber-300 md:dark:hover:bg-transparent">Dashboard</a>
              </li>
              <li>
                      @else
                      <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-amber-300 rounded hover:bg-amber-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-amber-200 md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-amber-300 md:dark:hover:bg-transparent">Log in</a>
              </li>
              <li>
                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="block py-2 pr-4 pl-3 text-amber-300 rounded hover:bg-amber-200 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-amber-200 md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-amber-300 md:dark:hover:bg-transparent">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
      </div>
      </ul>
      </ul>
    </div>
  </div>
</nav>

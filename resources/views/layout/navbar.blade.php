

<nav class="bg-white border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="logo.png" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-md md:text-2xl font-semibold whitespace-nowrap">Keluarga Muslim Filsafat UGM</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
            <li>
                <a href="{{ route('home') }}"
                   class="block py-2 px-3 border-b border-gray-100 rounded-sm md:border-0 md:p-0 hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('home') ? 'text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">
                   Home
                </a>
            </li>
            <li>
                <a href="{{ route('berita') }}"
                   class="block py-2 px-3 border-b border-gray-100 rounded-sm md:border-0 md:p-0 hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('berita') ? 'text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">
                   Berita
                </a>
            </li>
            <li>
                <a href="{{ route('opini') }}"
                   class="block py-2 px-3 border-b border-gray-100 rounded-sm md:border-0 md:p-0 hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('opini') ? 'text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">
                   Opini
                </a>
            </li>
            <li>
                <a href="{{ route('essai') }}"
                   class="block py-2 px-3 border-b border-gray-100 rounded-sm md:border-0 md:p-0 hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('essai') ? 'text-blue-700' : 'text-gray-900 md:hover:text-blue-700' }}">
                   Review
                </a>
            </li>
            <li>
                <a href="/admin"
                   class="block py-2 px-3 border-b border-gray-100 rounded-sm md:border-0 md:p-0 hover:bg-gray-100 md:hover:bg-transparent {{ request()->is('admin') ? 'text-blue-700 font-bold' : 'text-gray-900 md:hover:text-blue-700' }}">
                   {{ auth()->check() ? 'Dashboard' : 'Login' }}
                </a>
            </li>

        </ul>

    </div>
  </div>
</nav>

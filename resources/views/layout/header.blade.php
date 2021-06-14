<header class="w-full fixed z-20 items-center py-2 px-6 hidden flex-wrap xl:flex">
    <div class="w-1/2">
        <img src="/image/logo-HB.png" class="" alt="" width="90" height="90">
    </div>
    <div class="w-1/2 flex flex-wrap justify-end text-lg font-bold text-white">
        <a href="/">
            <div class="w-full pr-20 hover:text-gray-200">Home</div>
        </a>
        <a href="/profile">
            <div class="w-full pr-20 hover:text-gray-200">Profil</div>
        </a>
        <a href="/prestasi">
            <div class="w-full pr-20 hover:text-gray-200">Prestasi</div>
        </a>
        <a href="/struktur">
            <div class="w-full pr-5 hover:text-gray-200">Struktur Dewan Guru</div>
        </a>
    </div>
</header>

<nav id="header" class="bg-white  space-y-0 fixed w-full z-10 top-0 shadow block xl:hidden">


    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

        <div class="w-1/2 pl-2 md:pl-0">
            <a class="text-gray-900 flex items-center text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                <img src="/image/logo-HB.png" class="mr-2" alt="" width="50" height="50"> SMK Harapan Bangsa Depok
            </a>
        </div>
        <div class="w-1/2 pr-0">
            <div class="flex relative inline-block float-right">

                <div class="relative text-sm">
                    <div id="userMenu" class="bg-white rounded shadow-md absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">

                    </div>
                </div>


                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>


        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                <li class="mr-6 my-2 md:my-0">
                    <a href="/" class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600">
                        <i class="fas fa-home fa-fw mr-3 text-pink-600"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="/profile" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-purple-500">
                        <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Profil</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="prestasi" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-green-500">
                        <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Prestasi</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="struktur" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-500">
                        <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Struktur Dewan Guru</span>
                    </a>
                </li>
            </ul>

            <!-- <div class="relative pull-right pl-4 pr-4 md:pr-0">
                <input type="search" placeholder="Search" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                    <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                    </svg>
                </div>
            </div> -->

        </div>

    </div>
</nav>
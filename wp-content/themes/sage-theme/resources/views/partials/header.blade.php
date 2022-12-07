<header id="header" class="module header w-full top-0 left-0 fixed z-200 bg-blue-300 h-55 border-b-1 border-white border-opacity-20">
    <div class="container h-full ">
        <nav class="py-9 row navbar items-center">
            <div
                class="col w-full down_lg:flex down_lg:flex-wrap lg:w-1/5 header-mobile relative justify-between items-center">
                <div class="lg:w-full lg:h-full relative">
                    <a id="header-logo" class="navbar-brand header-logo py-9 inline-block align-middle"
                        href="{!! App::getLogo()['href'] !!}">
                        <img class="w-full" src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}" >
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button class="navbar-toggler hamburger-menu p-4 mt-0 cursor-pointer" type="button"
                        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="sr-only">Open Menu</span>
                    </button>
                </div>
            </div>

            <div class="col w-full lg:w-4/5 navbar-collapse main-menu flex flex-col justify-between" id="main-menu"
                data-module="menu">
                <ul
                    class="main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
            lg:flex-row lg:justify-end">
                    <li class="menu-item mb-0 ">
                        <a class="block py-9 lg:p-9 no-underline" href="#">ABOUT US</a>
                    </li>   
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline" href="#">LEADERSHIP</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline font-semibold" href="#">CAREERS</a>
                    </li>

                    <li class="active menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline font-semibold" href="#">CONTACT US</a>
                    </li>
                </ul>
                {!! App::getMainNav() !!}
            </div>
        </nav>
    </div>
</header>

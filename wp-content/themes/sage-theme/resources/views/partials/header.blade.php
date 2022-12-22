<header id="header" class=" module header w-full top-0 left-0 fixed z-200 bg-blue-300 h-55 border-b-1 border-white border-opacity-20">
    <div class="container h-full ">
        <nav class="py-9 row navbar items-center lg:px-26">
            <div
                class="md:px-30 lg:px-22  w-full down_lg:flex down_lg:flex-wrap lg:w-1/5 header-mobile relative justify-between items-center">
                <div class="lg:w-113 lg:h-full relative">
                    <a id="header-logo" aria-label="Logo" class="navbar-brand header-logo py-9 inline-block align-middle"
                        href="{!! App::getLogo()['href'] !!}">
                        <img class="w-113" src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}" >
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button class="navbar-toggler hamburger-menu p-4 mt-0 cursor-pointer" type="button"
                        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar block bg-white hover: relative ml-auto w-16 h-2"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="sr-only">Open Menu</span>
                    </button>
                </div>
            </div>

            <div class="col w-full lg:w-4/5 navbar-collapse main-menu flex flex-col justify-between" id="main-menu"
                data-module="menu">
              
                {!! App::getMainNav() !!}
            </div>
        </nav>
    </div>
</header>

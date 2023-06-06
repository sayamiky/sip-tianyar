<div class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header">
    <div class="container">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="w-20 max-w-full px-4">
                <a href="/" class="block w-4 h-4 py-5 navbar-logo">
                    <img src="{{ asset('assets/web/images/logo/logo-white.png') }}" alt="logo"
                        class="w-4 h-4 header-logo" />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <button id="navbarToggler"
                        class="
                  block
                  absolute
                  right-4
                  top-1/2
                  -translate-y-1/2
                  lg:hidden
                  focus:ring-2
                  ring-primary
                  px-3
                  py-[6px]
                  rounded-lg
                ">
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                    </button>
                    <nav id="navbarCollapse"
                        class="
                  absolute
                  py-5
                  lg:py-0 lg:px-4
                  xl:px-6
                  bg-white
                  lg:bg-transparent
                  shadow-lg
                  rounded-lg
                  max-w-[250px]
                  w-full
                  lg:max-w-full lg:w-full
                  right-4
                  top-full
                  hidden
                  lg:block lg:static lg:shadow-none
                ">
                        <ul class="blcok lg:flex">
                            <li class="relative group">
                                <a href="#home"
                                    class="flex py-2 mx-8 text-base ud-menu-scroll text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0">
                                    Home
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#about"
                                    class="flex py-2 mx-8 text-base ud-menu-scroll text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Seputar Desa
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#features"
                                    class="flex py-2 mx-8 text-base ud-menu-scroll text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Destinasi Wisata
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('articles.index') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Artikel
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="{{ route('traditions.index') }}"
                                    class="flex py-2 mx-8 text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                    Tradisi
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                    <a href="/login" class="py-3 text-base font-medium text-white hover:opacity-70 px-7 loginBtn">
                        Sign In
                    </a>
                    <a href="/register"
                        class="px-6 py-3 text-base font-medium text-white duration-300 ease-in-out bg-white rounded-lg bg-opacity-20 hover:bg-opacity-100 hover:text-dark signUpBtn">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

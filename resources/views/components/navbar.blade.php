<div
        class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header">
        <div class="container">
            <div class="relative flex items-center justify-between -mx-4">
                <div class="w-20 max-w-full px-4">
                    <a href="/" class="block w-4 h-4 py-5 navbar-logo">
                        <img src="{{ asset('assets/web/images/logo/logo-white.png') }}" alt="logo" class="w-4 h-4 header-logo" />
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
                                    <a href="#team"
                                        class="flex py-2 mx-8 text-base ud-menu-scroll text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                        Blog
                                    </a>
                                </li>
                                {{-- <li class="relative group">
                                    <a href="#contact"
                                        class="flex py-2 mx-8 text-base ud-menu-scroll text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary lg:py-6 lg:inline-flex lg:px-0 lg:mr-0 lg:ml-7 xl:ml-12">
                                        Contact
                                    </a>
                                </li> --}}
                                <li class="relative group submenu-item">
                                    <a href="javascript:void(0)"
                                        class="
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4
                        flex
                        mx-8
                        lg:mr-0 lg:ml-8
                        xl:ml-12
                        relative
                        after:absolute
                        after:w-2
                        after:h-2
                        after:border-b-2
                        after:border-r-2
                        after:border-current
                        after:rotate-45
                        lg:after:right-0
                        after:right-1
                        after:top-1/2
                        after:-translate-y-1/2
                        after:mt-[-2px]
                      ">
                                        Event
                                    </a>
                                    <div
                                        class="
                        submenu
                        hidden
                        relative
                        lg:absolute
                        w-[250px]
                        top-full
                        lg:top-[110%]
                        left-0
                        rounded-sm
                        lg:shadow-lg
                        p-4
                        lg:block lg:opacity-0 lg:invisible
                        group-hover:opacity-100
                        lg:group-hover:visible lg:group-hover:top-full
                        bg-white
                        transition-[top]
                        duration-300
                      ">
                                        <a href="#about"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            About Page
                                        </a>
                                        <a href="#pricing"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            Pricing Page
                                        </a>
                                        <a href="#contact"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            Contact Page
                                        </a>
                                        <a href="/blogs"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            Blog Grid Page
                                        </a>
                                        <a href="/blogdetails"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            Blog Details Page
                                        </a>
                                        <a href="/register"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            Sign Up Page
                                        </a>
                                        <a href="/login"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            Sign In Page
                                        </a>
                                        {{-- <a href="404.html"
                                            class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                                            404 Page
                                        </a> --}}
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                        <a href="/login"
                            class="py-3 text-base font-medium text-white hover:opacity-70 px-7 loginBtn">
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
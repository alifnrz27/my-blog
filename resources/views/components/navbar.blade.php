<!-- ====== Navbar Section Start -->
<div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="px-4 w-60 max-w-full">
                <a href="index.html" class="navbar-logo w-full block py-5">
                    <img src="/assets/images/logo/logo-white.svg" alt="logo" class="w-full header-logo"/>
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <div>
                    <button id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                    </button>
                    <nav id="navbarCollapse" class="absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">
                        <ul class="blcok lg:flex">
                            <li class="relative group">
                                <a href="#home" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">
                                    Home
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="/journal" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">
                                    Journal
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#about" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">
                                    About
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#contact" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">
                                    Contact
                                </a>
                            </li>
                            <li class="relative group submenu-item">
                                <a href="javascript:void(0)"
                                    class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12 relative after:absolute after:w-2 after:h-2 after:border-b-2 after:border-r-2 after:border-current after:rotate-45 lg:after:right-0 after:right-1 after:top-1/2 after:-translate-y-1/2 after:mt-[-2px]">
                                    Pages
                                </a>
                                <div class="submenu hidden relative lg:absolute w-[250px] top-full lg:top-[110%] left-0 rounded-sm lg:shadow-lg p-4 lg:block lg:opacity-0 lg:invisible group-hover:opacity-100 lg:group-hover:visible lg:group-hover:top-full bg-white transition-[top] duration-300">
                                    <a href="about.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                                        About Page
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                @if (Route::has('login'))
                    @auth
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                    @else
                    <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                        <a href="{{ route('login') }}" class="text-base font-medium text-white hover:opacity-70 py-3 px-7 loginBtn">
                            Sign In
                        </a>
                        <a href="{{ route('register') }}" class="text-base font-medium text-white bg-white bg-opacity-20 rounded-lg  py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out">
                            Register
                        </a>
                    </div>
                    @endauth
                @endif
            </div>
        </div>
    </div>
</div>
<!-- ====== Navbar Section End -->
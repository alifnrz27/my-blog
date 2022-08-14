<x-app-layout>
    
    <div class="absolute w-full bg-primary dark:hidden min-h-75"></div>
        <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
            <x-navbar-admin></x-navbar-admin>
            <!-- cards -->
            <div class="w-full px-6 py-6 mx-auto">
                <!-- row 1 -->
                <div class="flex flex-wrap -mx-3">
                    <!-- card1 -->
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white text-dark dark:opacity-60 text-size-sm">Today's Money</p>
                                            <h5 class="mb-2 font-bold dark:text-white text-dark">$53,000</h5>
                                            <p class="mb-0 dark:text-white dark:opacity-60 text-dark">
                                                <span class="font-bold leading-normal text-size-sm text-emerald-500">+55%</span>
                                                since yesterday
                                            </p>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                            <i class="ni ni-money-coins text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card2 -->
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-size-sm text-dark">Today's Users</p>
                                            <h5 class="mb-2 font-bold dark:text-white text-dark">2,300</h5>
                                            <p class="mb-0 dark:text-white dark:opacity-60 text-dark">
                                                <span class="font-bold leading-normal text-size-sm text-emerald-500">+3%</span>
                                                since last week
                                            </p>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                            <i class="ni ni-world text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card3 -->
                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-size-sm text-dark">New Clients</p>
                                        <h5 class="mb-2 font-bold dark:text-white text-dark">+3,462</h5>
                                        <p class="mb-0 dark:text-white dark:opacity-60 text-dark">
                                            <span class="font-bold leading-normal text-red-600 text-size-sm">-2%</span>
                                            since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                        <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card4 -->
                    <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-row -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-size-sm text-dark">Sales</p>
                                            <h5 class="mb-2 font-bold dark:text-white text-dark">$103,430</h5>
                                            <p class="mb-0 dark:text-white dark:opacity-60 text-dark">
                                                <span class="font-bold leading-normal text-size-sm text-emerald-500">+5%</span>
                                                than last month
                                            </p>
                                        </div>
                                    </div>
                                    <div class="px-3 text-right basis-1/3">
                                        <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                            <i class="ni ni-cart text-size-lg relative top-3.5 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- cards row 2 -->
                <div class="flex flex-wrap mt-6 -mx-3">
                    <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
                        <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                                <h6 class="capitalize dark:text-white text-dark">Sales overview</h6>
                                <p class="mb-0 leading-normal dark:text-white dark:opacity-60 text-size-sm text-dark">
                                <i class="fa fa-arrow-up text-emerald-500"></i>
                                <span class="font-semibold">4% more</span> in 2021
                                </p>
                            </div>
                            <div class="flex-auto p-4">
                                <div>
                                    <canvas id="chart-line" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                        <div slider class="relative w-full h-full overflow-hidden rounded-2xl">
                            <!-- slide 1 -->
                            <div slide class="absolute w-full h-full transition-all duration-500">
                                <img class="object-cover h-full" src="/assets/images/carousel-1.jpg" alt="carousel image" />
                                <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
                                    <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                                        <i class="top-0.75 text-size-xxs relative text-slate-700 ni ni-camera-compact"></i>
                                    </div>
                                    <h5 class="mb-1 text-white text-dark">Get started with Argon</h5>
                                    <p class="dark:opacity-80 text-dark">There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                                </div>
                            </div>

                    <!-- slide 2 -->
                    <div slide class="absolute w-full h-full transition-all duration-500">
                        <img class="object-cover h-full" src="/assets/images/carousel-2.jpg" alt="carousel image" />
                        <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
                            <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                                <i class="top-0.75 text-size-xxs relative text-slate-700 ni ni-bulb-61"></i>
                            </div>
                            <h5 class="mb-1 text-white text-dark">Faster way to create web pages</h5>
                            <p class="dark:opacity-80 text-dark">That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                        </div>
                    </div>

                    <!-- slide 3 -->
                    <div slide class="absolute w-full h-full transition-all duration-500">
                        <img class="object-cover h-full" src="/assets/images/carousel-3.jpg" alt="carousel image" />
                        <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
                            <div class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                                <i class="top-0.75 text-size-xxs relative text-slate-700 ni ni-trophy"></i>
                            </div>
                            <h5 class="mb-1 text-white text-dark">Share with us your design tips!</h5>
                            <p class="dark:opacity-80 text-dark">Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                        </div>
                    </div>

                    <!-- Control buttons -->
                    <button btn-next class="absolute z-10 w-10 h-10 p-2 text-dark border-none opacity-50 cursor-pointer text-size-lg hover:opacity-100 far fa-chevron-right active:scale-110 top-6 right-4"></button>
                    <button btn-prev class="absolute z-10 w-10 h-10 p-2 text-dark border-none opacity-50 cursor-pointer text-size-lg hover:opacity-100 far fa-chevron-left active:scale-110 top-6 right-16"></button>
                    </div>
                </div>
                </div>

                <!-- cards row 3 -->

                <div class="flex flex-wrap mt-6 -mx-3">
                <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 rounded-t-4">
                            <div class="flex justify-between">
                                <h6 class="mb-2 dark:text-white text-dark">Sales by Country</h6>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                                <tbody>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="/assets/images/icons/flags/US.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Country:</p>
                                                    <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">United States</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Sales:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">2500</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Value:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">$230,900</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 leading-normal align-middle bg-transparent border-b text-size-sm whitespace-nowrap dark:border-white/40">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Bounce:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">29.9%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="/assets/images/icons/flags/DE.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Country:</p>
                                                    <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">Germany</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Sales:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">3.900</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Value:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">$440,000</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 leading-normal align-middle bg-transparent border-b text-size-sm whitespace-nowrap dark:border-white/40">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Bounce:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">40.22%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="/assets/images/icons/flags/GB.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Country:</p>
                                                    <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">Great Britain</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Sales:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">1.400</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Value:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">$190,700</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 leading-normal align-middle bg-transparent border-b text-size-sm whitespace-nowrap dark:border-white/40">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Bounce:</p>
                                                <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">23.44%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                        <div>
                                            <img src="/assets/images/icons/flags/BR.png" alt="Country flag" />
                                        </div>
                                        <div class="ml-6">
                                            <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Country:</p>
                                            <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">Brasil</h6>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="text-center">
                                        <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Sales:</p>
                                        <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">562</h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="text-center">
                                        <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Value:</p>
                                        <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">$143,960</h6>
                                        </div>
                                    </td>
                                    <td class="p-2 leading-normal align-middle bg-transparent border-0 text-size-sm whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                        <p class="mb-0 font-semibold leading-tight dark:text-white text-size-xs dark:opacity-60 text-dark">Bounce:</p>
                                        <h6 class="mb-0 leading-normal text-size-sm dark:text-white text-dark">32.14%</h6>
                                        </div>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end cards -->
            <x-footer></x-footer>
        </main>
</x-app-layout>

<x-guest-layout>
    <!-- ====== Forms Section Start -->
    <section class="bg-[#F4F7FF] py-14 lg:py-20 m-auto">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-[525px] mx-auto text-center bg-white rounded-lg relative overflow-hidden py-14 px-8 sm:px-12 md:px-[60px] wow fadeInUp" data-wow-delay=".15s">
                        <div class="mb-10 text-center">
                            <a href="javascript:void(0)" class="inline-block max-w-[160px] mx-auto">
                                <img src="assets/images/logo/logo.svg" alt="logo" />
                            </a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-6">
                                <input type="email" name="email" placeholder="Email" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" :value="old('email')" required autofocus/>
                            </div>
                            <div class="mb-6">
                                <input type="password" placeholder="Password" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" name="password" required autocomplete="current-password"/>
                            </div>
                            <div class="mb-10">
                                <button type="submit" class="w-full rounded-md border bordder-primary py-3 px-5 bg-primary text-base text-white text-center cursor-pointer hover:shadow-md transition duration-300 ease-in-out">
                                    Log In
                                </button>
                            </div>
                        </form>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-base inline-block mb-2 text-[#adadad] hover:text-primary">
                            Forgot Password?
                        </a>
                        @endif
                        <p class="text-base text-[#adadad]">
                            Not a member yet?
                            <a href="/register" class="text-primary hover:underline">
                            Sign Up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    {{-- <!-- ====== Forms Section End -->
    <x-jet-authentication-card>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif --}}
</x-guest-layout>

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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-6">
                                <input type="text" name="name" placeholder="Name" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" value="{{ old('name') }}" required autofocus autocomplete="name" />
                            </div>
                            <div class="mb-6">
                                <input type="email" name="email" placeholder="Email" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" value="{{ old('email') }}" required/>
                            </div>
                            <div class="mb-6">
                                <input type="password" name="password" placeholder="Password" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" name="password" required/>
                            </div>
                            <div class="mb-6">
                                <input type="password" name="password" placeholder="Confirm Password" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" name="password_confirmation" required/>
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                            @endif
                            <div class="mb-10">
                                <button type="submit" class="w-full rounded-md border bordder-primary py-3 px-5 bg-primary text-base text-white text-center cursor-pointer hover:shadow-md transition duration-300 ease-in-out">
                                    Register
                                </button>
                            </div>
                        </form>
                        <p class="text-base text-[#adadad]">
                            Already have an account?
                            <a href="/login" class="text-primary hover:underline">
                                Log in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</x-guest-layout>

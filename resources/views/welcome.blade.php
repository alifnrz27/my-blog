<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>



    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />

    <!-- ==== WOW JS ==== -->
    <script src="/assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    </head>
    <body class="antialiased">
        <x-navbar></x-navbar>
        <div class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary" style="padding-bottom: 90px">
            <div class="container">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4">
                        <div class=" hero-content text-center max-w-[780px] mx-auto wow fadeInUp" data-wow-delay=".2s">
                            <h1 class="text-white font-bold text-3xl sm:text-4xl md:text-[45px] leading-snug sm:leading-snug md:leading-snug mb-8">
                                Welcome to My Journal
                            </h1>
                            <p class="text-base sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed mx-auto mb-10 text-[#e4e4e4] max-w-[600px]">
                                I share anything about my activities
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="px-6 py-12 md:px-12 wow fadeInUp" style="margin-top:-130px">
            <div class="container mx-auto xl:px-32">
                <div class="grid lg:grid-cols-2 items-center">
                    <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0 text-center">
                        <div class="relative block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); z-index: 1;">
                            <blockquote class="text-dark" style="font-size: 30px">"I have no special talents. I am only passionately curious."</blockquote>
                            <p class="text-dark">Albert Einstein</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        {{-- Latest Articles --}}
        <section class="pt-20 lg:pt-[120px] bg-[#f3f4fe] pb-10 lg:pb-20" style="margin-top: -130px">
            <div class="container">
                <div class="flex flex-wrap -mx-4 wow fadeInUp" style="padding-top: 50px">
                    <div class="w-full px-4">
                        <div class="text-center mx-auto mb-[60px] max-w-[620px]">
                            <span class="font-semibold text-lg text-primary mb-2 block" style="font-size: 30px">
                                Latest Articles
                            </span>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="blog-details.html" class="block">
                                <img src="assets/images/blog/blog-01.jpg" alt="image" class="w-full transition group-hover:scale-125"/>
                                </a>
                            </div>
                            <div>
                                <span class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    Dec 22, 2023
                                </span>
                                <h3>
                                    <a href="blog-details.html" class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        Meet AutoManage, the best AI management tools
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="blog-details.html" class="block">
                                <img src="assets/images/blog/blog-01.jpg" alt="image" class="w-full transition group-hover:scale-125"/>
                                </a>
                            </div>
                            <div>
                                <span class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    Dec 22, 2023
                                </span>
                                <h3>
                                    <a href="blog-details.html" class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        Meet AutoManage, the best AI management tools
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="blog-details.html" class="block">
                                <img src="assets/images/blog/blog-01.jpg" alt="image" class="w-full transition group-hover:scale-125"/>
                                </a>
                            </div>
                            <div>
                                <span class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    Dec 22, 2023
                                </span>
                                <h3>
                                    <a href="blog-details.html" class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                        Meet AutoManage, the best AI management tools
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Latest Articles --}}

        <!-- ====== Developer Section Start -->
        <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4">
                        <div class="text-center mx-auto mb-[60px] max-w-[620px]">
                            <span class="font-semibold text-lg text-primary mb-2 block">
                                Developer
                            </span>
                            <p class="text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color">
                                I am just a student
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
                        <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
                            <div class=" relative w-[170px] h-[170px] rounded-full z-10 mx-auto mb-6">
                                <img src="/assets/images/developer/Alif Naufal Rizki.jpeg" alt="image" class="w-full rounded-full"/>
                            </div>
                            <div class="text-center">
                                <h4 class="font-medium text-lg text-dark mb-2">
                                    Alif Naufal Rizki
                                </h4>
                                <p class="font-medium text-sm text-body-color mb-5">
                                    Artificial Intelligence | Backend Developer | Robotics | Data Science | Journalist
                                </p>
                                <div class="flex items-center justify-center">
                                    <a href="https://instagram.com/alifnrz27" class="text-[#cdced6] hover:text-primary w-8 h-8 mx-2 flex items-center justify-center" target="_blank">
                                        <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                                            <path d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"/>
                                            <path d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"/>
                                            <path d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/in/alif-naufal-rizki-731708217" class="text-[#cdced6] hover:text-primary w-8 h-8 mx-2 flex items-center justify-center" target="_blank">
                                        <svg width="18" height="18" viewBox="0 0 18 18" class="fill-current">
                                            <path d="M16.7821 0.947388H1.84847C1.14272 0.947388 0.578125 1.49747 0.578125 2.18508V16.7623C0.578125 17.4224 1.14272 18 1.84847 18H16.7257C17.4314 18 17.996 17.4499 17.996 16.7623V2.15757C18.0525 1.49747 17.4879 0.947388 16.7821 0.947388ZM5.7442 15.4421H3.17528V7.32837H5.7442V15.4421ZM4.44563 6.2007C3.59873 6.2007 2.94944 5.5406 2.94944 4.74297C2.94944 3.94535 3.62696 3.28525 4.44563 3.28525C5.26429 3.28525 5.94181 3.94535 5.94181 4.74297C5.94181 5.5406 5.32075 6.2007 4.44563 6.2007ZM15.4835 15.4421H12.9146V11.509C12.9146 10.5739 12.8864 9.33618 11.5596 9.33618C10.2045 9.33618 10.0069 10.3813 10.0069 11.4265V15.4421H7.438V7.32837H9.95046V8.45605H9.9787C10.3457 7.79594 11.1644 7.13584 12.4347 7.13584C15.0601 7.13584 15.54 8.7861 15.54 11.0414V15.4421H15.4835Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Developer Section End -->

        <!-- ====== Contact Start ====== -->
        <section id="contact" class="py-20 md:py-[120px] relative">
            <div class="absolute z-[-1] w-full h-1/2 lg:h-[45%] xl:h-1/2 bg-[#f3f4fe] top-0 left-0">
            </div>
            <div class="container px-4">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="px-4 w-full lg:w-7/12 xl:w-8/12">
                        <div class="ud-contact-content-wrapper">
                            <div class="ud-contact-title mb-12 lg:mb-[150px]">
                                <span class="text-dark font-semibold text-base mb-5">
                                    CONTACT ME
                                </span>
                                <h2 class="text-[35px] font-semibold">
                                    If you have any <br>
                                    suggestions
                                </h2>
                            </div>
                            <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                                <div class="flex max-w-full w-[330px] mb-8">
                                    <div class="text-[32px] text-primary mr-6">
                                        <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                            <path d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"/>
                                            <path d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-lg font-semibold mb-6">My Location</h5>
                                        <p class="text-base text-body-color">
                                            Parung Panjang, Kab. Bogor, West Java, Indonesia
                                        </p>
                                    </div>
                                </div>
                                <div class="flex max-w-full w-[330px] mb-8">
                                    <div class="text-[32px] text-primary mr-6">
                                        <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                            <path d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-lg font-semibold mb-6">How Can I Help?</h5>
                                        <p class="text-base text-body-color">alifnrz27@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 w-full lg:w-5/12 xl:w-4/12">
                        <div class="shadow-testimonial rounded-lg bg-white py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp" data-wow-delay=".2s">
                            <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
                            Send me a Message
                            </h3>
                            <form method="POST">
                                @csrf
                                <div class="mb-6">
                                    <label for="name" class="block text-xs text-dark">
                                        Full Name*
                                    </label>
                                    <input type="text" name="name" placeholder="Adam Gelius" class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4"/>
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block text-xs text-dark">
                                        Email*
                                    </label>
                                    <input type="email" name="email" placeholder="example@yourmail.com" class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4"/>
                                </div>
                                <div class="mb-6">
                                    <label for="message" class="block text-xs text-dark">
                                        Message*
                                    </label>
                                    <textarea
                                    name="message"
                                    rows="1"
                                    placeholder="type your message here"
                                    class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4 resize-none"></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="submit" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-primary text-base font-medium hover:bg-dark transition duration-300 ease-in-out">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Contact End ====== -->


        <x-footer></x-footer>
        <!-- ====== All Scripts -->

        <script src="/assets/js/main.js"></script>
        <script>
            // ==== for menu scroll
            const pageLink = document.querySelectorAll(".ud-menu-scroll");

            pageLink.forEach((elem) => {
                elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
                });
            });

            // section menu active
            function onScroll(event) {
                const sections = document.querySelectorAll(".ud-menu-scroll");
                const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

                for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
                }
            }

            window.document.addEventListener("scroll", onScroll);
        </script>
    </body>
</html>

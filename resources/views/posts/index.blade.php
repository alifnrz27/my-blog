<x-app-layout>
    <div class="absolute w-full bg-primary dark:hidden min-h-75"></div>
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">

        <x-navbar-admin></x-navbar-admin>

        <div class="w-full px-6 py-6 mx-auto">
            <!-- table all posts -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between">
                            <h6 class="text-dark dark:text-white">Posts Table</h6>
                            <a href="/posts/create" class="inline-block px-8 py-2 mb-4 font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-primary bg-150 text-size-xs hover:shadow-xs hover:-translate-y-px">Add new post</a>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                {{-- Loading posts --}}
                                <div id="loadingPosts">
                                    <div class="flex items-center justify-center">
                                        <button type="button"
                                            class="inline-flex items-center px-4 py-2 text-sm font-semibold leading-6 text-dark transition duration-150 ease-in-out bg-primary rounded-md shadow cursor-not-allowed"
                                            disabled="">
                                            <svg class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                </path>
                                            </svg>
                                            Loading...
                                        </button>
                                    </div>
                                </div>
                                {{-- end loading posts --}}
                                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-size-xxs border-b-solid tracking-none whitespace-nowrap text-dark opacity-70">Title</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-size-xxs border-b-solid tracking-none whitespace-nowrap text-dark opacity-70">Status</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-size-xxs border-b-solid tracking-none whitespace-nowrap text-dark opacity-70">Created at</th>
                                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-size-xxs border-b-solid tracking-none whitespace-nowrap text-dark opacity-70"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="posts">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end table all posts --}}

            <x-footer></x-footer>
        </div>
    </main>

    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        function posts(){
            $.ajax({
                type:"GET",
                dataType:'json',
                url: "/posts/all",
                success: function(data){
                    var dataHTML = ""
                    if (data.length < 1){
                        dataHTML = dataHTML + `<div class="text-center">no post</div>`
                    }
                    $.each(data, function(key,value){
                        if(value.status.id == 1){
                            var bgStatus = 'bg-gradient-to-tl'
                        }else{
                            var bgStatus = 'bg-red-600 text-white'
                        }
                        dataHTML = dataHTML + `<tr>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight dark:text-white dark:opacity-80 text-size-xs text-dark">${value.title}</p>
                                    </td>
                                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 text-size-sm whitespace-nowrap shadow-transparent">
                                        <span class="${bgStatus} from-emerald-500 to-teal-400 px-3.6-em text-size-xs-em rounded-1.8 py-2.2-em inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none  text-dark">${value.status.status}</span>
                                    </td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-size-xs dark:text-white dark:opacity-80  text-dark">${value.created_at}</span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <a href="/posts/${value.slug}/edit" class="font-semibold leading-tight text-size-xs dark:text-white dark:opacity-80  text-dark"> Edit </a>
                                        <button onclick="deletePost('${value.slug}')" class="font-semibold leading-tight text-size-xs dark:text-white dark:opacity-80 bg-danger text-dark"> Hapus </button>
                                    </td>
                                </tr>`
                    })
                    $('#loadingPosts').empty()
                    $('tbody').empty()
                    $('tbody').html(dataHTML);
                }
            })
        }

        posts();

        function deletePost(slug){
            $.ajax({
                type:"DELETE",
                dataType:'json',
                url: "/posts/"+slug,
                success: function(data){
                    posts()
                }
            })
        }



    </script>
</x-app-layout>
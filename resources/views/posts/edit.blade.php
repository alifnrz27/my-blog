<x-app-layout>
    <div class="absolute w-full bg-primary dark:hidden min-h-75"></div>
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <x-navbar-admin></x-navbar-admin>
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                    <form action="/posts/{{ $post->slug }}" method="post">
                        @method('put')
                        @csrf
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                                <div class="flex justify-between">
                                    <p class="mb-0 dark:text-white/80">Edit post</p>
                                    <button type="submit" class="inline-block px-8 py-2 mb-4 font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-primary bg-150 text-size-xs hover:shadow-xs hover:-translate-y-px">Save Post</button>
                                </div>
                            </div>
                            <div class="flex-auto p-6">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0 mb-3">
                                        <label class="switch">
                                            <input type="checkbox" name="status_id" <?php if($post->status_id ==1){echo "checked";} ?>>
                                            <span class="slider round">Publish</span>
                                        </label>
                                    </div>
                                    {{-- menampilkan tags --}}                             
                                    <!-- Overlay element -->
                                    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

                                    <!-- The dialog -->
                                    <div id="dialog"
                                        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-primary rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
                                        <h1 class="text-2xl font-semibold text-white">Add new Tag</h1>
                                        <div class="py-5 border-t border-b border-gray-300">
                                            <input placeholder="add new tag" type="text" id="tag" name="tag"class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-dark text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none mb-4" autocomplete="off" />    
                                            
                                            <div style='cursor: pointer' onclick="addTag()" class="inline-block px-8 py-2 font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-white bg-150 text-primary text-size-xs hover:shadow-xs hover:-translate-y-px mb-10">Save tag</div>
                                        </div>
                                        <div class="flex justify-end">
                                            <!-- This button is used to close the dialog -->
                                            <div id="close" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
                                                Close</div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="flex flex-wrap items-center -mx-4 mb-12">
                                            <div class="w-full md:w-1/2 px-4">
                                                <label for="tag" class="inline-block mb-2 ml-1 font-bold text-size-xs text-dark dark:text-white/80">Tags</label>
                                                <div id="open" class="px-5 py-2 bg-primary hover:bg-rose-700 text-white cursor-pointer rounded-md mb-4" style="width: 140px">
                                                    Add new tag
                                                </div>
                                                <div id="tags" data-id="{{ $post->id }}" class="flex items-center flex-wrap mb-8 md:mb-0 wow fadeInUp">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end tags --}}
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <div class="border-gray-300">
                                                <label for="category" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Category</label>
                                                <input value="<?php if($post->category_id == 0){echo old('category');}else{echo old('category') ?? $post->category->category;} ?>" placeholder="choose category" list="categories" type="text" id="category" name="category"class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-dark text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none mb-4" autocomplete="off"/>    
                                                    <datalist id="categories">

                                                    </datalist>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="title" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Title</label>
                                            <input onkeyup="addSlug()" type="text" id="title" name="title" value="{{ old('title') ?? $post->title  }}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-dark text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="slug" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Slug</label>
                                            <input id="slug" type="text" name="slug" value="{{ old('slug') ?? $post->slug  }}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white text-dark bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="content" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Content</label>
                                            <input type="text" name="content" value="{{ old('content') ?? $post->content  }}" class="focus:shadow-primary-outline text-dark dark:bg-slate-850 dark:text-white text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </main>

    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        function tags(){
            var id = $("#tags").attr("data-id")
            $.ajax({
                type:"GET",
                dataType:'json',
                url: "/tags/"+id,
                success: function(data){
                    var dataHTML = ""
                    $.each(data, function(key,value){
                        dataHTML = dataHTML + `<div class="block py-2 px-5 bg-primary text-white rounded text-xs font-medium mr-2 md:mr-4 lg:mr-2 xl:mr-4 mb-2">
                                                    <div onclick="deleteTag(${value.tag.id})" class="absolute mr-3 my-auto" style="cursor:pointer; color:red;">
                                                        x
                                                    </div>
                                                    <div class="ml-3">
                                                        ${value.tag.tag}
                                                    </div>
                                                </div>`
                    })
                    $('#tags').html(dataHTML);
                }
            })
        }

        function categories(){
            $.ajax({
                type:"GET",
                dataType:'json',
                url: "/categories",
                success: function(data){
                    var dataHTML = ""
                    $.each(data, function(key,value){
                        dataHTML = dataHTML + `<option value="${value.category}">${value.category}</option>`
                    })
                    $('#categories').html(dataHTML);
                }
            })
        }

        function addSlug(){
            var title = $('#title').val()
            $.ajax({
                type:"GET",
                dataType:'json',
                url: '/getSlug/'+ title,
                success: function(data){
                    $('#slug').val(data) 
                }
            })
        }

        function addTag(){
            var id = $("#tags").attr("data-id")
            var tag = $('#tag').val()
            $.ajax({
                type:"POST",
                dataType:'json',
                data:{post_id: id, tag: tag},
                url: '/tags/',
                success: function(data){
                    $('#tag').val("") 
                    tags()
                }
            })
        }

        function deleteTag(tag_id){
            var post_id = $("#tags").attr("data-id")
            $.ajax({
                type:"DELETE",
                dataType:'json',
                data:{post_id: post_id, tag_id: tag_id},
                url: '/tags',
                success: function(data){
                    tags()
                }
            })
        }

        $( document ).ready(function() {
            tags()
            categories()
        });
    </script>

    {{-- script for modal --}}
    <script>
        var openButton = document.getElementById('open');
        var dialog = document.getElementById('dialog');
        var closeButton = document.getElementById('close');
        var overlay = document.getElementById('overlay');

        // show the overlay and the dialog
        openButton.addEventListener('click', function () {
            dialog.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });

        // hide the overlay and the dialog
        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    </script>
</x-app-layout>
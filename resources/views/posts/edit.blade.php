<x-app-layout>
    <div class="absolute w-full bg-primary dark:hidden min-h-75"></div>
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <x-navbar-admin></x-navbar-admin>
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                    <form action="/posts/{{ $slug }}" method="post">
                        @method('put')
                        @csrf
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                                <div class="flex justify-between">
                                    <p class="mb-0 dark:text-white/80">Edit post</p>
                                    <button type="submit" class="inline-block px-8 py-2 mb-4 font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-primary bg-150 text-size-xs hover:shadow-xs hover:-translate-y-px">Save</button>
                                </div>
                            </div>
                            <div class="flex-auto p-6">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0 mb-10">
                                        <label class="switch">
                                            <input type="checkbox" name="status_id" <?php if($status_id ==1){echo "checked";} ?>>
                                            <span class="slider round">Publish</span>
                                        </label>
                                    </div>
                                    {{-- menampilkan tags --}}
                                    <div class="w-full">
                                        <div class="flex flex-wrap items-center -mx-4 mb-12">
                                            <div class="w-full md:w-1/2 px-4">
                                                <label for="tag" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Tags</label>
                                                <input placeholder="add new tag" type="text" id="tag" name="tag"class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-dark text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none mb-4" />
                                                <div style='cursor: pointer' onclick="addTag()" class="inline-block px-8 py-2 font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-primary bg-150 text-size-xs hover:shadow-xs hover:-translate-y-px  mb-10">Save tag</div>
                                                <div id="tags" data-id="{{ $id }}" class="flex items-center flex-wrap mb-8 md:mb-0 wow fadeInUp">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end tags --}}
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="title" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Title</label>
                                            <input onkeyup="addSlug()" type="text" id="title" name="title" value="{{ old('title') ?? $title  }}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-dark text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="slug" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Slug</label>
                                            <input id="slug" type="text" name="slug" value="{{ old('slug') ?? $slug  }}" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white text-dark bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="content" class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Content</label>
                                            <input type="text" name="content" value="{{ old('content') ?? $content  }}" class="focus:shadow-primary-outline text-dark dark:bg-slate-850 dark:text-white text-size-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
                                                    <div onclick="deleteTag(${value.id})" class="absolute mr-3 my-auto" style="cursor:pointer; color:red;">
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
        });
    </script>
</x-app-layout>
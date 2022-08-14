<x-guest-layout>
    <x-navbar></x-navbar>
    <!-- ====== Banner Section Start -->
    <div class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] pb-[60px] bg-primary overflow-hidden">
      <div class="container">
      </div>
      <div>
        <span class="absolute top-0 left-0 z-[-1]">
          <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="55"
              cy="442"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="446"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
              stroke="white"
              stroke-opacity="0.08"
              stroke-width="12"
            />
          </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
          <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="462"
              cy="5"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="49"
              cy="470"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
              stroke="white"
              stroke-opacity="0.06"
              stroke-width="13"
            />
          </svg>
        </span>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    {{-- Carousel start --}}
    <div id="carousel" class="carousel">
      <div class="flex justify-center carousel-inner relative w-full overflow-hidden bg-gray-900" style="margin-top: -30px">
        <div class="flex justify-center text-center carousel-item active float-left" style="width:80%">
              {{-- loading Carousel --}}
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
              {{-- end loading carousel --}}
        </div>
      </div>
    </div>
    {{-- Carousel End --}}

    <!-- ====== Blog Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
      <div class="container">
        <div id="gridPosts" class="flex flex-wrap -mx-4">
          
        </div>
      </div>
    </section>
    <!-- ====== Blog Section End -->
    <x-footer></x-footer>

    <script>
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      })

      function journals(){
          $.ajax({
              type:"GET",
              dataType:'json',
              url: "/api/journals/all",
              success: function(data){
                  var dataHTMLGrid = ""
                  var dataHTMLCarousel = `<div class="flex justify-center carousel-inner relative w-full overflow-hidden" style="margin-top: -30px">
                                            <div class="flex justify-center text-center carousel-item active float-left" style="width:80%">
                                              <a href="" class="text-center">
                                                  <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="block w-full" alt="..." style="border-radius:15px; box-shadow:5px 5px 3px black; -webkit-filter: blur(1px);"/>
                                                  <div class="text-white text-center" style="margin-top: -90px; position:absolute"><h2 class="text-white" style="font-size: 30px;">${data[0].title}</h2></div>
                                              </a>
                                            </div>
                                          </div>`
                  if (data.length < 1){
                      dataHTMLGrid = dataHTMLGrid + `<div class="text-center">no post</div>`
                  }
                  $.each(data, function(key,value){
                      dataHTMLGrid = dataHTMLGrid + `<div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                              <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                                <div class="rounded overflow-hidden mb-8">
                                                  <a href="/journals/${value.slug}" class="block">
                                                    <img src="assets/images/blog/blog-01.jpg" alt="image" class="w-full transition group-hover:scale-125"/>
                                                  </a>
                                                </div>
                                                <div>
                                                  <span class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                                    Technology
                                                  </span>
                                                  <h3>
                                                    <a href="/journals/${value.slug}" class=" font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                                      ${value.title}
                                                    </a>
                                                  </h3>
                                                  <p class="text-base text-body-color">
                                                    ${value.title}
                                                  </p>
                                                </div>
                                              </div>
                                            </div>`
                  })
                  $('#carousel').empty()
                  $('#carousel').html(dataHTMLCarousel);
                  $('#gridPosts').empty()
                  $('#gridPosts').html(dataHTMLGrid);
              }
          })
      }

      $( document ).ready(function() {
          journals();
      });
  </script>
</x-guest-layout>
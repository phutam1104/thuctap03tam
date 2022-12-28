<section class="sick w-full mt-9 lg:mt-0 ">
        <div class="carousel md:min-w-634 md:min-h-462 md:ml-32 md:mr-35 lg:ml-51 lg:mr-53 xl:mr-137 xl:ml-80 2xl:ml-197 xl:mt-10 2xl:mr-262 bg-white rounded-4xl shadow-2xl shadow-blue-50 relative">
                <div class="slick-single md:top-55 sm:pl-19 sm:pr-22 lg:pl-56 xl:pr-115 md:min-w-551 absolute">
                        @foreach ($data->slicksingle as $item)
                        <div class="md:w-full" >
                        {!! $item->post_content !!}
                        <h6>{!! $item->post_title !!}</h6>
                         <h6>{!! $item->pos!!}</h6> 
                        </div>    
                         @endforeach
                        <div>
                        </div>
                </div>
                <div class="md:-right-19 absolute sm:w-34 sm:h-18 md:h-39 md:bottom-30 sm:bottom-0 sm:right-30 md:w-68 bg-brown-150 flex ">
                        <button aria-label="previous" class="prev slick-button no-underline"><span class="icomoon icon-chevron-left  text-white md:text-4xl sm:text-base"></span></button>
                        <button aria-label="next        " class="next slick-button no-underline"><span class="icomoon icon-chevron-right text-white md:text-4xl sm:text-base"></span></button>
                </div>
        </div>
</section>
</div>


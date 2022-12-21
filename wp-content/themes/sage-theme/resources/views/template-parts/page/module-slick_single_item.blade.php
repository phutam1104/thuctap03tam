<section class="sick w-full mt-9 lg:mt-0 ">
        <div class="carousel md:min-w-634 md:min-h-462 md:ml-32 md:mr-35 lg:ml-51 lg:mr-53 xl:mr-137 xl:ml-80 2xl:ml-197 xl:mt-10 2xl:mr-262 bg-white rounded-4xl shadow-2xl shadow-blue-50 relative">
                <div class="slick-single md:top-55 sm:pl-19 sm:pr-22 lg:pl-56 xl:pr-115 md:min-w-551 absolute">
                        {{-- <div class="md:w-full" >
                                <h2>“We’ve done more with Encompass in the past 6 months than we did in 3 years <span class="md:hidden lg:inline-flex">on our previous solution.”</span> </h2>
                               <div class="pt-7">
                               <h6>David Little</h6>
                                        <h6>CTO, Savannah Distributing</h6>
                               </div> 
                        </div>
                        <div class="md:w-full" >
                                <h2>“We’ves done more with Encompass in the past 6 months than we did in 3 years on our previous solution.”</h2>
                                <h6>David Littles
                                        CTO, Savannah Distributing</h6>
                        </div> --}}
                        @foreach ($data->module['slicksingle'] as $item)
                        <div class="md:w-full" >
                        {!! $item->post_content !!}
                        <h6>{!! $item->post_title !!}</h6>
                         <h6>{!! $item->pos!!}</h6> 
                        </div>    
                         @endforeach
                        <div>
                        </div>

                </div>
                <div class="md:-right-19 absolute md:bottom-30 sm:bottom-0 sm:right-30 md:w-68 sm:w-34 sm:h-18 md:h-39 bg-brown-150 flex ">
                        <button aria-label="previous" class="prev slick-button no-underline"><span class="icomoon icon-chevron-left text-white md:text-4xl sm:text-base"></span></button>
                        <button aria-label="next        " class="next slick-button no-underline"><span class="icomoon icon-chevron-right text-white md:text-4xl sm:text-base"></span></button>
                </div>
        </div>
</section>

<div class="container">
    <h3>Module: Slickcarosel</h3>
    @foreach ($data->module['slicksingle'] as $item)

   {!! $item->post_content !!}
   {!! $item->post_title !!}
         {!! $item->pos!!}
    @endforeach
</div>
<?php
// var_dump($data->module['slicksingle']);
var_dump($data->dataslick);
// var_dump($data->id);

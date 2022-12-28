<section class="thelast bg-bgthelast bg-no-repeat bg-right-top 2xl:mr-50">
    <div class="sm:px-10 md:px-32 lg:px-51 w-full 2xl:pl-190 2xl:pr-140 mt-10 lg:mt-22 xl:px-75 xl:mt-14">
        <h6>THE LATEST</h6>
        <div class="xl:flex">
            <div class="h-255 bg-white rounded-4xl shadow-2xl shadow-blue-50 xl:w-full">
                <img class="w-full h-139 lazy" src="{!! App::getImgLoading()['url'] !!}"
                    data-src="{{ $data->postthelast[0]->imgslast['url'] }}"
                    alt="{{ $data->postthelast[0]->imgslast['alt'] }}">
                <div class="sm:pl-20 sm:pr-29 md:pt-15">
                    {!! $data->postthelast[0]->post_content !!}
                    </br>
                    <a class="text-brown-150 tracking-sp013 leading-1.75 no-underline" href="{{ $data->postthelast[0]->linkslast['url'] }}"
                        target="{{ $data->postthelast[0]->linkslast['target'] }}">
                        {{ $data->postthelast[0]->linkslast['title'] }}
                        <span class="icomoon icon-chevron-right"></span></a>
                </div>
            </div>
            <div class="flex flex-col xl:pl-14">
                <div
                    class="sm:mt-16 h-120 bg-white rounded-4xl shadow-2xl shadow-blue-50 sm:pl-20 sm:pr-20 sm:pt-15 xl:mt-0">
                    {!! $data->postthelast[1]->post_content !!}
                    </br>
                    <a class="text-brown-150 tracking-sp013 leading-1.75 no-underline" href="{{ $data->postthelast[1]->linkslast['url'] }}"
                        target="{{ $data->postthelast[1]->linkslast['target'] }}">
                        {{ $data->postthelast[1]->linkslast['title'] }}
                        <span class="icomoon icon-chevron-right"></span></a>
                </div>
                <div class="sm:mt-16 h-120 bg-white rounded-4xl shadow-2xl shadow-blue-50 sm:pl-20 sm:pr-20 sm:pt-15">
                    {!! $data->postthelast[2]->post_content !!}
                    </br>
                    <a class="text-brown-150 tracking-sp013 leading-1.75 no-underline" href="{{ $data->postthelast[2]->linkslast['url'] }}"
                        target="{{ $data->postthelast[2]->linkslast['target'] }}">
                        {{ $data->postthelast[2]->linkslast['title'] }}
                        <span class="icomoon icon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-bgthelast bg-no-repeat bg-right-top 2xl:mr-50">
    <div class="thelast md:px-32 lg:px-51 w-full 2xl:pl-190 2xl:pr-140 mt-15 lg:mt-22 xl:px-75 xl:mt-14">
        <h6>THE LATEST</h6>
        <div class="xl:flex">
            <div class="h-255 bg-white rounded-4xl shadow-2xl shadow-blue-50 xl:w-full">
                <img class="w-full h-139 lazy" src="{!! App::getImgLoading()['url'] !!}"
                    data-src="{{ $data->module['contentl'][0]->imgslast['url'] }}"
                    alt="{{ $data->module['contentl'][0]->imgslast['alt'] }}">
                {{-- {!! $data->module['contentl']->->pos!!} --}}
                <div class="sm:pl-20 sm:pr-29 sm:pt-15">
                    {!! $data->module['contentl'][0]->post_content !!}
                    <a href="{{ $data->module['contentl'][0]->linkslast['url'] }}"
                        target="{{ $data->module['contentl'][0]->linkslast['target'] }}">
                        {{ $data->module['contentl'][0]->linkslast['title'] }}
                        <span class="icomoon icon-chevron-right"></span></a>
                </div>
            </div>
            <div class="xl:flex xl:flex-col">
            <div class="flex flex-col xl:pl-14">
                <div
                    class="sm:mt-16 h-120 bg-white rounded-4xl shadow-2xl shadow-blue-50 sm:pl-20 sm:pr-20 sm:pt-15 xl:mt-0">
                    {!! $data->module['contentl'][1]->post_content !!}
                    <a href="{{ $data->module['contentl'][1]->linkslast['url'] }}"
                        target="{{ $data->module['contentl'][1]->linkslast['target'] }}">
                        {{ $data->module['contentl'][1]->linkslast['title'] }}
                        <span class="icomoon icon-chevron-right"></span></a>
                </div>
            </div>
            <div class="sm:mt-16 h-120 bg-white rounded-4xl shadow-2xl shadow-blue-50 sm:pl-20 sm:pr-20 sm:pt-15">
                {!! $data->module['contentl'][2]->post_content !!}
                <a href="{{ $data->module['contentl'][2]->linkslast['url'] }}"
                    target="{{ $data->module['contentl'][2]->linkslast['target'] }}">
                    {{ $data->module['contentl'][2]->linkslast['title'] }}
                    <span class="icomoon icon-chevron-right"></span></a>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
</section>
<?php

// var_dump($data->module['contentl']);

// $links=get_field('linklast',$data->module['contentl']->ID);
// $imgslast = get_field('imglast',$data->module['contentl']->ID);

// $data->module['contentl']->linkslast=$links;
// $data->module['contentl']->imgslast=$imgslast;

// var_dump($data->module['contentl']);
//
?>

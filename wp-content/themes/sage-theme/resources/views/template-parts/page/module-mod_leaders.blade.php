<section class="leaders w-full flex flex-col justify-center text-center sm:mt-60 lg:mt-52 xl:mt-90">
    <div class="Slick 2xl:ml-188 2xl:mr-197 md:mx-28 xl:mx-73">
        <div class="lg:px-90 xl:px-148 sm:px-25">
            <h3>
                {!! $data->titileleader !!}
            </h3>
        </div>
        <div class="lg:px-65">
            <p>
                {!! $data->contentlead !!}
            </p>
        </div>
        <div class="flex flex-row justify-between">
            <div class="w-30">
                <button aria-label="previous" class="prev1 slick-button1"><span
                        class="icomoon icon-chevron-left text-4xl text-brown-150"></span></button>
            </div>
            <div class="slick-leaders 2xl:ml-43 2xl:mr-25 w-4/5">

                @foreach ($data->slickleader as $key => $value)
                    <div>
                        {!! $value->post_content !!}
                    </div>
                @endforeach
                
                @foreach ($data->slickleader as $key => $value)
                    <div>
                        {!! $value->post_content !!}
                    </div>
                @endforeach
            </div>
            <div class="w-30">
                <button aria-label="next" class="next1 slick-button1"><span
                        class="icomoon icon-chevron-right text-4xl text-brown-150"></span></button>
            </div>
        </div>
    </div>
</section>
<?php
//  var_dump($data->module);

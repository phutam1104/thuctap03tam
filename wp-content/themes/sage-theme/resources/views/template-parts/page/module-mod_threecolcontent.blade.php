<section
    class="content-2 flex sm:flex-col lg:flex-row sm:justify-center lg:justify-between w-full sm:px-30 md:px-103 2xl:pl-190 2xl:pr-154 lg:pl-51 lg:pr-28 xl:pl-74 xl:pr-23 sm:mt-30 lg:mt-10 xl:mt-23">
    @foreach ($data->threecolcontent as $key => $value)
        <div class="md:border-b-4 lg:border-b-0 lg:border-r-4 flex sm:flex-col  sm:items-start w-full lg:pl-10">
            <img src="{{ $value->imgcolcontent->url }}" alt="{{ $valueimgcolcontent->alt }}">
            <div class="sm:pt-14 sm:pb-10 lg:pt-9">
                <h2>{{ $value->titlecolcontent }}</h2>
                <h3>{{ $value->contentcolcontet }}</h3>
            </div>
        </div>
        </div>
    @endforeach
</section>

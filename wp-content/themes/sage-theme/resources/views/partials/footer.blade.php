<footer id="footer" class="module_footer bg-footer bg-no-repeat bg-cover w-full relative bottom-0 md:h-230 lg:h-193 xl:h-217 2xl:h-241 md:px-51 2xl:px-161 sm:-mt-45 lg:-mt-65 xl:-mt-80 2xl:-mt-116">
  <div class="flex sm:flex-col lg:flex-row sm:pt-88 sm:items-center xl:pt-120 2xl:pt-155">
    <div class="">
      <img class="w-113 lazy" src="{!! App::getImgLoading()['url'] !!}" data-src="{!! App::getLogoWeb()['url'] !!}" alt="{!! App::getLogoWeb()['alt'] !!}">
      <div class="flex flex-row sm:mt-10 sm:justify-between	w-89">
        @foreach (App::getSocial() as $key => $value)
        <a href="{!! $value[link] !!}" class="no-underline">{!! $value[icon] !!}</a>
        @endforeach
      </div>
    </div>
    <div class="main-menu md:mt-18 flex flex-col xl:flex-row sm:items-center w-full lg:items-end xl:md:justify-between xl:ml-75 xl:mr-40" id="main-menu" data-module="menu">
        {!! App::getFooterNav() !!}
      <a href="{!! App::getLogo()['href'] !!}"class="btn-footer no-underline ">
        {!! App::getFooterAddress() !!}
      </a>
    </div>
  </div>
  <div>
    <small>{!! App::getCopyRight() !!}</small>
  </div>
</footer>
<?php
// foreach(App::getSocial() as $value)
// var_dump($value);
?>
<!-- endblock -->
<noscript>
  <div id="mod-noscript" class="mod-noscript bg-black text-white fixed inset-0 z-200">
    <div class="table w-full h-full">
      <div class="table-cell align-middle text-center">
        <div class="container last-mb-none">
          <h3>To use web better, please enable Javascript.</h3>
        </div>
      </div>
    </div>
  </div>
</noscript>
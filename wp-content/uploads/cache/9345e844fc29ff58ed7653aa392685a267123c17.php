<footer id="footer" class="module_footer bg-footer bg-no-repeat bg-cover w-full relative bottom-0 md:h-230 lg:h-193 xl:h-217 2xl:h-241 md:px-51 2xl:px-161 sm:-mt-45 lg:-mt-65 xl:-mt-80 2xl:-mt-116">
  <div class="flex sm:flex-col lg:flex-row sm:pt-88 sm:items-center xl:pt-120 2xl:pt-155">
    <div class="">
      <img class="w-113 lazy" src="<?php echo App::getImgLoading()['url']; ?>" data-src="<?php echo App::getLogoFooter()['url']; ?>" alt="<?php echo App::getLogoFooter()['alt']; ?>">
      <div class="flex flex-row sm:mt-10 sm:justify-between	w-89">
        <a href="" class="no-underline"><span class="icomoon icon-Icon-awesome-youtube text-2xl"></span></a>
        <a href="#" class="no-underline"><span class="icomoon icon-Icon-awesome-instagram text-2xl"></span></a>
        <a href="#" class="no-underline"><span class="icomoon icon-Icon-ionic-logo-twitter text-2xl"></span></a>
        <a href="#" class="no-underline"><span class="icomoon icon-Icon-simple-facebook text-2xl"></span></a>
        <a href="#" class="no-underline"><span class="icomoon icon-Icon-awesome-linkedin text-2xl"></span></a>
      </div>
    </div>
    <div class="main-menu md:mt-18 flex flex-col xl:flex-row sm:items-center w-full lg:items-end xl:md:justify-between xl:ml-75 xl:mr-40" id="main-menu" data-module="menu">
        <?php echo App::getFooterNav(); ?>

      <a href="<?php echo App::getLogo()['href']; ?>"class="btn-footer no-underline ">
        CONTACT
      </a>
    </div>
  </div>
  <div>
    <small>© Encompass Technologies 2021</small>
  </div>













  <!-- <class="row">
      <ul class="list-none col p-0 w-1/2 lg:w-2/3 flex">
        <?php echo App::getFooterNav(); ?>

        <img class="w-full" src="<?php echo App::getLogoFooter()['url']; ?>" alt="<?php echo App::getLogoFooter()['alt']; ?>" >

        <li><span class="icomoon icon-Icon-awesome-youtube"></span></li>
        <li><span class="icomoon icon-Icon-awesome-instagram"></span></li>
        <li><span class="icomoon icon-Icon-ionic-logo-twitter"></span></li>
        <li><span class="icomoon icon-Icon-simple-facebook"></span></li>
        <li><span class="icomoon icon-Icon-awesome-linkedin"></span></li>
      </ul>
      <div class="footer-item-col col w-1/2 lg:w-1/3">
        <?php echo App::getFooterAddress(); ?>

      </div>
    </div>
  </div>
  <div class="container text-center footer-bottom">
    <div class="footer-copyright last-mb-none p-3">
      <?php echo App::getCopyRight(); ?>

    </div>
  </div>div class="container footer-top">
    <div  -->
</footer>

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
<footer id="footer" class="module_footer bg-footer bg-no-repeat bg-cover w-full relative bottom-0 sm:h-230 lg:h-200 xl:h-230 2xl:h-241 md:px-51 2xl:px-161 sm:-mt-45 lg:-mt-65 xl:-mt-80 2xl:-mt-116">
  <div class="flex sm:flex-col lg:flex-row sm:pt-88 sm:items-center xl:pt-120 2xl:pt-155">
    <div class="">
      <img class="w-113 lazy" src="<?php echo App::getImgLoading()['url']; ?>" data-src="<?php echo App::getLogoWeb()['url']; ?>" alt="<?php echo App::getLogoWeb()['alt']; ?>">
      <div class="flex flex-row sm:mt-10 sm:justify-between	w-89">
        <?php $__currentLoopData = App::getSocial(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo $value[link]; ?>" class="no-underline"><?php echo $value[icon]; ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <div class="main-menu md:mt-18 flex flex-col xl:flex-row sm:items-center w-full lg:items-end xl:md:justify-between xl:ml-75 xl:mr-40" id="main-menu" data-module="menu">
        <?php echo App::getFooterNav(); ?>

      <a href="<?php echo App::getLogo()['href']; ?>"class="btn-footer no-underline ">
        <?php echo App::getFooterAddress(); ?>

      </a>
    </div>
  </div>
  <div>
    <small><?php echo App::getCopyRight(); ?></small>
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
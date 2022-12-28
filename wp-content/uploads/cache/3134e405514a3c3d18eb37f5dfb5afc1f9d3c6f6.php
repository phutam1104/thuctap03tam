<section class="connect lg:flex sm:block sm:mt-21 lg:mt-33 xl:mt-17 2xl:mt-47">
    <div class="sm:w-full sm:h-308 lg:min-w-530 xl:min-w-712 2xl:min-w-958  bg-gray-50 relative">
    <img class="lazy sm:min-full lg:min-w-573 xl:min-w-772 2xl:min-w-1018 2xl:pl-115 sm:left-0 md:pr-18 lg:pr-0 sm:-top-46 lg:-top-35 xl:-top-50 lg:-right-24  absolute" src="<?php echo App::getImgLoading()['url']; ?>" data-src="<?php echo e($data->module['imgconnect']->url); ?>" alt="<?php echo e($data->module['imgconnect']->alt); ?>">
    </div>
    <aside class="sm:w-full sm:pt-147 sm:px-5 lg:pt-2 md:px-63 lg:pl-47 lg:pr-51 xl:pl-80 xl:pr-45 2xl:pr-161 static xl:pt-85">
        <h3><?php echo $data->titleconnect; ?></h3>
        <div class="sm:mt-14 lg:mt-8">
          <?php $__currentLoopData = $data->contentconnect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo $item->rowconnect; ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a aria-label="Connect" href="<?php echo e($data->linkconnect->url); ?>" target="<?php echo e($data->linkconnect->target); ?>" class="btn btn-brown1 sm:hidden xl:inline-block"><?php echo e($data->linkconnect->title); ?></a>
            </div>
    </aside>
</section>

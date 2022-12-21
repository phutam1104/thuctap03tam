<section class="w-full bg-gray-150 ecosystem sm:mt-22 pb-35 lg:mt-32 lg:pb-43 xl:pb-35 xl:mt-55">
    <div class="md:pt-49 xl:pt-55 md:pl-64 md:pr-48 lg:pl-50 lg:pr-51 xl:px-73 2xl:px-189">
        <?php $__currentLoopData = $data->module['ecosystemrp']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="xl:w-2/5">
            <h2><?php echo $item->titlee; ?></h2>
        </div>
        <div class="lg:flex lg:flex-row w-full lg:mt-30 xl:mt-11  justify-between">
            <div class="lg:w-2/5 xl:w-9/20">
                <p><?php echo $item->contente1; ?></p>
                <p><?php echo $item->contente2; ?></p>
            </div>
            <div class="Eslick sm:mt-30 lg:mt-0 lg:w-1/2 xl xl:-mt-100">
                <div class="slick-ecosystem">
                    <?php $__currentLoopData = $data->module['ecosystemrp'][0]->slicke; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                    <img class="lazy" src="<?php echo e($data->module['ecosystemrp']->slicke ->url); ?>" data-src="<?php echo App::getEcosystem1()['url']; ?>" alt="<?php echo App::getEcosystem1()['alt']; ?>">
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </div>
                <div class="w-1/5 lg:w-2/6 xl:w-1/5 flex flex-row justify-between mx-auto lg:mr-0 sm:mt-20 lg:mt-25">
                    <button aria-label="previous" class="prev2 slick-button1 no-underline"><span class="icomoon icon-chevron-left text-4xl text-brown-150"></span></button>
                    <button aria-label="next" class="next2 slick-button1 no-underline"><span class="icomoon icon-chevron-right text-4xl text-brown-150"></span></button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</section>
<?php
        // foreach ($module['ecosystemrp'] as $key => $value) {
        //     var_dump( $value->slicke);
        // }
// var_dump($data->module['ecosystemrp'][0]->slicke)
?>
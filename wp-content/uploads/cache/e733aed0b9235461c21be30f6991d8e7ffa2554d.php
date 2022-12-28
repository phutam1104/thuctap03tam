<section class="bg-banner bg-no-repeat w-full banner lg:flex relative md:pt-100 lg:pt-98 md:-mt-100 xl:pt-94 xl:-mt-110 2xl:pt-42 2xl:-mt-47 ">
    <div class="row 2xl:pt-85 sm:pt-35 lg:pt-50 xl:pt-72 flex-col md:min-w-638 lg:min-w-370 sm:mx-32 lg:absolute md:static justify-center 2xl:ml-188 2xl:mr-517 lg:ml-50 lg:mr-288 xl:ml-73 xl:mr-392">
            <div class="lg:pr-11">
                <?php echo $data->module['title']; ?>

            </div>
            <div class="md:min-w-433 lg:min-w-347 md:mx-53 lg:mx-0 xl:pr-67 flex flex-col sm:items-center lg:items-start pt-2px lg:-mt-2">
               <p><?php echo $data->module['contentbn']; ?></p>
        <a href="<?php echo e($data->module['linkbann']->url); ?>" target="<?php echo e($data->module['linkbann']->target); ?>" aria-label="About us" class="btn btn-brown1 lg:mt-8 2xl:mt-0 no-underlin"><?php echo e($data->module['linkbann']->title); ?></a>
        </div>
    </div>
    <img class="w-full 2xl:ml-472 lg:ml-245 lg:mt-21 xl:mt-14 xl:ml-346 sm:ml-43 lg:min-w-726 xl:min-w-976 sm:min-w-854" src="<?php echo e($data->module['imgbanner']->url); ?>" alt="<?php echo e($data->module['imgbanner']->alt); ?>" ></img>

</section>       



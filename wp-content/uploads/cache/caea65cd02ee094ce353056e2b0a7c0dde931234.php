<?php
    $class2 = 'xl:min-w-275 lg:mt-0 lg:ml-27 md:mt-12 lg:min-w-395 xl:ml-44"';
?>
<section class="twocol sm:mt-37 lg:mt-33 xl:mt-182 xl:flex xl:max-w-full 2xl:mt-158">
    <aside class="sm:max-w-full sm:mx-16 md:mx-64 lg:ml-50 lg:mr-53 xl:ml-72 xl:min-w-428 xl:mr-0 2xl:ml-188">
        <div class="w-93 bg-brown-200 h-1"></div>
        <div class="mt-14">
            <h2><?php echo $data->module['asidetowcol']; ?></h2>
        </div>
    </aside>
    <div
        class="sm:max-w-full sm:mx-16 md:mx-64 md:mt-21 lg:mx-51 lg:block xl:mr-72 xl:min-w-634 xl:ml-44 xl:mt-0 2xl:mr-197">
        <div class="lg:flex lg:justify-between sm:block lg:w-full">

            <?php echo $__env->make('partials/twocol/twocol', [
                'class' => 'xl:min-w-275 lg:min-w-370',
                'title' => $data->module['contenttowcol'][0]->title,
                'content' => $data->module['contenttowcol'][0]->contentd,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/twocol/twocol', [
                'class' => $class2,
                'title' => $data->module['contenttowcol'][1]->title,
                'content' => $data->module['contenttowcol'][1]->contentd,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="lg:flex lg:justify-between sm:block lg:w-full">
            <?php echo $__env->make('partials/twocol/twocol', [
                'class' => 'xl:min-w-275 lg:mt-0 lg:min-w-370 md:pt-5',
                'title' => $data->module['contenttowcol'][2]->title,
                'content' => $data->module['contenttowcol'][2]->contentd,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/twocol/twocol', [
                'class' => $class2,
                'title' => $data->module['contenttowcol'][3]->title,
                'content' => $data->module['contenttowcol'][3]->contentd,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>
</section>

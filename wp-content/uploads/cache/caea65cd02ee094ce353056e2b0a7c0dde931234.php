<section class="twocol sm:mt-37 lg:mt-33 xl:mt-182 xl:flex xl:max-w-full 2xl:mt-158">
    <aside class="sm:max-w-full sm:mx-16 md:mx-64 lg:ml-50 lg:mr-53 xl:ml-72 xl:min-w-428 xl:mr-0 2xl:ml-188">
        <div class="w-93 bg-brown-200 h-1"></div>
        <div class="mt-14">
            <h3><?php echo $data->module['asidetowcol']; ?></h3>
        </div>
    </aside>
    <div
        class="sm:max-w-full sm:mx-16 md:mx-64 md:mt-21 lg:mx-51 lg:block xl:mr-72 xl:min-w-634 xl:ml-44 xl:mt-0 2xl:mr-197">
        <?php for($i = 0; $i < 10; $i++): ?>
            <div class="lg:flex lg:justify-between sm:block lg:w-full">
                <div class="xl:min-w-275 lg:min-w-370">
                    <h5><?php echo e($data->module['contentrepatercolfirst'][$i]->title); ?></h5>
                    <p><?php echo e($data->module['contentrepatercolfirst'][$i]->contentd); ?></p>
                </div>
                <div class="xl:min-w-275 lg:mt-0 lg:ml-27 md:mt-27 lg:min-w-395 xl:ml-44">
                    <h5><?php echo e($data->module['contentirepeatercolsecond'][$i]->title); ?></h5>
                    <p><?php echo e($data->module['contentirepeatercolsecond'][$i]->content); ?></p>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
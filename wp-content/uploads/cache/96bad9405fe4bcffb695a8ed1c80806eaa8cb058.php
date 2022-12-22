
        
    
    
    

   
    <section class="w-full content-1 sm:-mt-85 lg:-mt-16 xl:-mt-100 2xl:-mt-94">

        <div class="flex flex-wrap sm:justify-center md:w-full">
            <div class="w-311">
                <h2><?php echo $data->module['titleconten']; ?></h2>
            </div>
            <div class="md:px-32 lg:px-50 xl:px-138 2xl:px-258 nod-1">
                <p><?php echo $data->module['contenc1']; ?></p>
            </div>
        </div>
        <?php 
    // var_dump($data->module['threecol']);
    // var_dump($data->module['twoimg']);
    ?>
        <div class="lg:flex lg:w-full md:block lg:flex-row lg:justify-center md:justify-center lg:items-start md:items-center md:w-full md:px-77 sm:pt-25 lg:pt-23 lg:px-9 xl:px-80 2xl:px-201">
            <div class="flex flex-col justify-center items-center lg:px-18 xl:px-0 ">
                <img src="<?php echo e($data->module['threecol'][0]->icon3col->url); ?>" alt="<?php echo e($data->module['threecol'][0]->icon3col->alt); ?>">
                <div class="one-1 lg:min-w-255 sm:mt-10 lg:mt-0 xl:min-w-288 2xl:hidden">
                    <h5><?php echo $data->module['threecol'][0]->title3col; ?></h5>
                    <p><?php echo $data->module['threecol'][0]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][0]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][0]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][0]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
                <div class="one-2 lg:min-w-255 sm:mt-10 lg:mt-0 xl:min-w-288 sm:hidden 2xl:block">
                    <h5><?php echo $data->module['threecol'][3]->title3col; ?></h5>
                    <p><?php echo $data->module['threecol'][3]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][3]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][3]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][3]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
            </div>
            <div class="w-full lg:mt-36px sm:flex sm:justify-center lg:min-w-150 lg:min-h-100 lg:-ml-40 lg:-mr-60 xl:-ml-25 xl:-mr-95 sm:mt-5 xl:min-w-240">
                <img class="w-134 h-21 sm:hidden xl:block" src="<?php echo e($data->module['twoimg'][0]->img3->url); ?>" alt="<?php echo e($data->module['twoimg'][0]->img3->alt); ?>"></img>
                <img class="w-80 h-21 sm:hidden lg:block xl:hidden" src="<?php echo e($data->module['twoimg'][0]->img2->url); ?>" alt="<?php echo e($data->module['twoimg'][0]->img2->alt); ?>"></img>
                <img class="w-21 h-64 lg:hidden" src="<?php echo e($data->module['twoimg'][0]->img1->url); ?>" alt="<?php echo e($data->module['twoimg'][0]->img1->alt); ?>"></img>
    
            </div>
            <div class="flex flex-col justify-center items-center lg:mx-46 sm:mt-15 xl:mx-65 lg:mt-0 ">
                <img src="<?php echo e($data->module['threecol'][1]->icon3col->url); ?>" alt="<?php echo e($data->module['threecol'][1]->icon3col->alt); ?>">
                <div class="sm:hidden lg:block lg:min-w-255 two-2 xl:min-w-288 2xl:hidden">
                    <h5><?php echo $data->module['threecol'][5]->title3col; ?></h5>
                    <p><?php echo $data->module['threecol'][5]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][5]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][5]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][5]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
                <div class="lg:min-w-255 two-3 xl:min-w-288 sm:hidden 2xl:block">
                    <h5><?php echo $data->module['threecol'][4]->title3col; ?></h5>
                    <p><?php echo $data->module['threecol'][4]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][4]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][4]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][4]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
                <div class="two-1 sm:mt-2 lg:hidden">
                    <h5><?php echo $data->module['threecol'][1]->title3col; ?></h5>
                    <p><?php echo $data->module['threecol'][1]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][1]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][1]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][1]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
            </div>
            <div class="w-full lg:mt-36px sm:flex sm:justify-center lg:min-w-150 lg:min-h-100 lg:-ml-60 lg:-mr-40 xl:-ml-95 xl:-mr-25 xl:min-w-240 sm:mt-5">
                <img class="w-134 h-21 sm:hidden xl:block" src="<?php echo e($data->module['twoimg'][0]->img3->url); ?>" alt="<?php echo e($data->module['twoimg'][0]->img3->alt); ?>"></img>
                <img class="w-80 h-21 sm:hidden lg:block xl:hidden" src="<?php echo e($data->module['twoimg'][0]->img2->url); ?>" alt="<?php echo e($data->module['twoimg'][0]->img2->alt); ?>"></img>
                <img class="w-21 h-64 lg:hidden" src="<?php echo e($data->module['twoimg'][0]->img1->url); ?>" alt="<?php echo e($data->module['twoimg'][0]->img1->url); ?>"></img>
    
            </div>
            <div class="flex flex-col justify-center items-center lg:px-18 sm:mt-27 xl:px-0 lg:mt-0 ">
                <img src="<?php echo e($data->module['threecol'][2]->icon3col->url); ?>" alt="<?php echo e($data->module['threecol'][2]->icon3col->alt); ?>">
                <div class="three-1 lg:min-w-255 lg:pt-10 xl:min-w-288 2xl:hidden">
                    <div class="xl:pl-14 xl:pr-17 ">
                        <h5><?php echo $data->module['threecol'][1]->title3col; ?></h5>
                    </div>
                    <p><?php echo $data->module['threecol'][1]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][1]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][1]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][1]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
                <div  class="three-2 xl:min-w-288 sm:hidden 2xl:block">
                    <div class="xl:pl-14 xl:pr-17 ">
                        <h5><?php echo $data->module['threecol'][6]->title3col; ?></h5>
                    </div>
                    <p><?php echo $data->module['threecol'][6]->content3col; ?></p>
                    <a class="no-underline" href="<?php echo e($data->module['threecol'][6]->link3col->url); ?>" target="<?php echo e($data->module['threecol'][6]->link3col->target); ?>"><h4><?php echo e($data->module['threecol'][6]->link3col->title); ?><span class="icomoon icon-chevron-right"></span></h4></a>
                </div>
            </div>
        </div>
    </section>



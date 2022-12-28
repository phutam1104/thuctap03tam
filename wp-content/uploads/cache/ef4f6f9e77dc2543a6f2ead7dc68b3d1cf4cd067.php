   <section class="w-full content-1 sm:-mt-85 lg:-mt-16 xl:-mt-100 2xl:-mt-94">
       <div class="flex flex-wrap sm:justify-center md:w-full">
           <div class="w-311">
               <h3><?php echo e($data->titleerp); ?></h3>
           </div>
           <div class="md:px-32 lg:px-50 xl:px-138 2xl:px-258 nod-1">
               <p><?php echo e($data->contenterp); ?></p>
           </div>
       </div>
       <div
           class="lg:flex lg:h-183 lg:w-full sm:block lg:flex-row sm:justify-center lg:items-start md:items-center sm:w-full md:px-77 sm:pt-12 lg:pt-23 lg:px-9 xl:px-80 2xl:px-201">
           <?php $__currentLoopData = $data->threecolrepater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="flex flex-col justify-center items-center lg:mx-46 sm:mt-15 xl:mx-65 lg:mt-0 ">
                   <img src="<?php echo e($value->iconthreecol->url); ?>"
                       alt="<?php echo e($value->iconthreecol->alt); ?>">
                   <div class="sm:hidden lg:block lg:min-w-255 two-2 xl:min-w-288 2xl:hidden">
                       <h5><?php echo $value->titlethreecol; ?></h5>
                       <p><?php echo $value->contentthreecolrp1024; ?></p>
                       <a class="no-underline" href="<?php echo e($value->linkthreecol->url); ?>"
                           target="<?php echo e($value->linkthreecol->target); ?>">
                           <h4><?php echo e($value->linkthreecol->title); ?><span
                                   class="icomoon icon-chevron-right"></span></h4>
                       </a>
                   </div>

                   <div class="lg:min-w-255 two-3 xl:min-w-288 sm:hidden 2xl:block">
                       <h5><?php echo $value->titlethreecol; ?></h5>
                       <p><?php echo $value->contentthreecolrp1990; ?></p>
                       <a class="no-underline" href="<?php echo e($value->linkthreecol->url); ?>"
                           target="<?php echo e($value->linkthreecol->target); ?>">
                           <h4><?php echo e($value->linkthreecol->title); ?><span
                                   class="icomoon icon-chevron-right"></span></h4>
                       </a>
                   </div>
                   <div class="two-1 sm:mt-2 lg:hidden">
                       <h5><?php echo $value->titlethreecol; ?></h5>
                       <p><?php echo $value->contentthreecol; ?></p>
                       <a class="no-underline" href="<?php echo e($value->linkthreecol->url); ?>"
                           target="<?php echo e($value->linkthreecol->target); ?>">
                          <h4><?php echo e($value->linkthreecol->title); ?><span
                                   class="icomoon icon-chevron-right"></span></h4>
                       </a>
                   </div>
               </div>
            
               <div
                   class="w-full space lg:mt-36px sm:flex sm:justify-center lg:min-w-150 lg:min-h-100 lg:-ml-40 lg:-mr-60 xl:-ml-25 xl:-mr-95 sm:mt-5 xl:min-w-240">
                   <?php $__currentLoopData = $data->imgspacingrepeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php switch($key):
                           case (0): ?>
                               <img class="w-21 h-64 lg:hidden" src="<?php echo e($value->imgspace->url); ?>"
                                   alt="<?php echo e($value->imgspace->alt); ?>"></img>
                           <?php break; ?>

                           <?php case (1): ?>
                               <img class="w-80 h-21 sm:hidden lg:block xl:hidden" src="<?php echo e($value->imgspace->url); ?>"
                                   alt="<?php echo e($value->imgspace->alt); ?>"></img>
                           <?php break; ?>

                           <?php default: ?>
                               <img class="w-134 h-21 sm:hidden xl:block" src="<?php echo e($value->imgspace->url); ?>"
                                   alt="<?php echo e($value->imgspace->alt); ?>"></img>
                       <?php endswitch; ?>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





           
       </div>
   </section>

<?php
use App\Services\Api;
use App\Services\Ajax;
?>
<div class="container"><h3>Module: Allpost</h3></div>
<section>
    <?php $__currentLoopData = Api::getPosts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <?php echo $value->post_title; ?>

        <?php echo $value->post_content; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <b class="loadmore" id="loadmore">Loadmore</b>
    <form action="" method="post">
        <input type="submit" name="loadmore" value="Submit">
      </form>
      <?php $__currentLoopData = Ajax::getPosts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
      <?php echo $value->post_title; ?>

      <?php echo $value->post_content; ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <?php 
// var_dump( Api::getPosts());
// var_dump(App::getEcosystem1());
    // var_dump( Ajax::getPosts());
?>

</section>
<div class="h-50"></div>

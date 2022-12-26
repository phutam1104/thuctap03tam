<?php
use App\Services\Api;
use App\Services\Ajax;
?>
<div class="container"><h3>Module: Allpost</h3></div>
<section>
 



    
    
      
  <div  class="loadmoredata">
  <?php $__currentLoopData = Api::getPosts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <ul>
    <li><?php echo $value->post_title; ?></li>
    <li><?php echo $value->post_content; ?></li>
  </ul>
  
  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <div class="btn__wrapper">
    <a href="#!" class="btn btn__primary" id="load-more">Load more</a>
  </div>
       

        </div>

        
    <?php 
// var_dump( Api::getPosts());
// var_dump(App::getEcosystem1());
    // var_dump( Ajax::getPosts());
?>

</section>
<div class="h-50"></div>

<div class="container"><h3>Module: Allpost</h3></div>
<section>
  <div  class="loadmoredata">
  <?php $__currentLoopData = $data->module; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <ul>
    <li><?php echo $value['title']; ?></li>
    <li><?php echo $value['content']; ?></li>
  </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="btn__wrapper">
    <a href="#!" class="btn btn__primary" id="load-more">Load more</a>
  </div>
        </div>
</section>
<div class="h-50"></div>


<?php
use App\Services\Api;
use App\Services\Ajax;
?>
<div class="container"><h3>Module: Allpost</h3></div>
<section>
    @foreach (  Api::getPosts()  as $value)
    
        {!! $value->post_title!!}
        {!! $value->post_content!!}
    @endforeach



    <b class="loadmore" id="loadmore">Loadmore</b>
    <form action="" method="post">
        <input type="submit" name="loadmore" value="Submit">
      </form>
      @foreach (  Ajax::getPosts()  as $value)
    
      {!! $value->post_title!!}
      {!! $value->post_content!!}
  @endforeach

    
    <?php 
// var_dump( Api::getPosts());
// var_dump(App::getEcosystem1());
    // var_dump( Ajax::getPosts());
?>

</section>
<div class="h-50"></div>

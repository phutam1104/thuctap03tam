<?php
use App\Services\Api;
use App\Services\Ajax;
?>
<div class="container"><h3>Module: Allpost</h3></div>
<section>
 



    {{-- <a class="button" id="load-more">Loadmore</a> --}}
    {{-- <form action="" method="post">
        <input type="submit" name="loadmore" value="Submit">
      </form> --}}
      {{-- @foreach (  Ajax::getPosts()  as $value)
    
      {!! $value->post_title!!}
      {!! $value->post_content!!}
  @endforeach --}}
  <div  class="loadmoredata">
  @foreach (  Api::getPosts()  as $value)
  <ul>
    <li>{!! $value->post_title!!}</li>
    <li>{!! $value->post_content!!}</li>
  </ul>
  
  
@endforeach
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

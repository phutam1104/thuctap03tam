<div class="container"><h3>Module: Allpost</h3></div>
<section>
  <div  class="loadmoredata">
  @foreach ( $data->module  as $value)
  <ul>
    <li>{!! $value['title']!!}</li>
    <li>{!! $value['content']!!}</li>
  </ul>
@endforeach

  <div class="btn__wrapper">
    <a href="#!" class="btn btn__primary" id="load-more">Load more</a>
  </div>
        </div>
</section>
<div class="h-50"></div>


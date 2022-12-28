   <section class="w-full content-1 sm:-mt-85 lg:-mt-16 xl:-mt-100 2xl:-mt-94">
       <div class="flex flex-wrap sm:justify-center md:w-full">
           <div class="w-311">
               <h3>{{ $data->titleerp }}</h3>
           </div>
           <div class="md:px-32 lg:px-50 xl:px-138 2xl:px-258 nod-1">
               <p>{{ $data->contenterp }}</p>
           </div>
       </div>
       <div
           class="lg:flex lg:h-183 lg:w-full sm:block lg:flex-row sm:justify-center lg:items-start md:items-center sm:w-full md:px-77 sm:pt-12 lg:pt-23 lg:px-9 xl:px-80 2xl:px-201">
           @foreach ($data->threecolrepater as $key => $value)
               <div class="flex flex-col justify-center items-center lg:mx-46 sm:mt-15 xl:mx-65 lg:mt-0 ">
                   <img src="{{ $value->iconthreecol->url }}"
                       alt="{{ $value->iconthreecol->alt }}">
                   <div class="sm:hidden lg:block lg:min-w-255 two-2 xl:min-w-288 2xl:hidden">
                       <h5>{!! $value->titlethreecol !!}</h5>
                       <p>{!! $value->contentthreecolrp1024 !!}</p>
                       <a class="no-underline" href="{{ $value->linkthreecol->url }}"
                           target="{{ $value->linkthreecol->target }}">
                           <h4>{{ $value->linkthreecol->title }}<span
                                   class="icomoon icon-chevron-right"></span></h4>
                       </a>
                   </div>

                   <div class="lg:min-w-255 two-3 xl:min-w-288 sm:hidden 2xl:block">
                       <h5>{!! $value->titlethreecol !!}</h5>
                       <p>{!! $value->contentthreecolrp1990 !!}</p>
                       <a class="no-underline" href="{{ $value->linkthreecol->url }}"
                           target="{{ $value->linkthreecol->target }}">
                           <h4>{{ $value->linkthreecol->title }}<span
                                   class="icomoon icon-chevron-right"></span></h4>
                       </a>
                   </div>
                   <div class="two-1 sm:mt-2 lg:hidden">
                       <h5>{!! $value->titlethreecol !!}</h5>
                       <p>{!! $value->contentthreecol !!}</p>
                       <a class="no-underline" href="{{ $value->linkthreecol->url }}"
                           target="{{ $value->linkthreecol->target }}">
                          <h4>{{ $value->linkthreecol->title }}<span
                                   class="icomoon icon-chevron-right"></span></h4>
                       </a>
                   </div>
               </div>
            
               <div
                   class="w-full space lg:mt-36px sm:flex sm:justify-center lg:min-w-150 lg:min-h-100 lg:-ml-40 lg:-mr-60 xl:-ml-25 xl:-mr-95 sm:mt-5 xl:min-w-240">
                   @foreach ($data->imgspacingrepeater as $key => $value)
                       @switch($key)
                           @case(0)
                               <img class="w-21 h-64 lg:hidden" src="{{ $value->imgspace->url }}"
                                   alt="{{ $value->imgspace->alt }}"></img>
                           @break

                           @case(1)
                               <img class="w-80 h-21 sm:hidden lg:block xl:hidden" src="{{ $value->imgspace->url }}"
                                   alt="{{ $value->imgspace->alt }}"></img>
                           @break

                           @default
                               <img class="w-134 h-21 sm:hidden xl:block" src="{{ $value->imgspace->url }}"
                                   alt="{{ $value->imgspace->alt }}"></img>
                       @endswitch
                   @endforeach
               </div>
           @endforeach





           {{-- <div

               class="w-full lg:mt-36px sm:flex sm:justify-center lg:min-w-150 lg:min-h-100 lg:-ml-60 lg:-mr-40 xl:-ml-95 xl:-mr-25 xl:min-w-240 sm:mt-5">
               @foreach ($data->imgspacingrepeater as $key => $value)
                   @switch($key)
                       @case(0)
                       <img class="w-21 h-64 lg:hidden" src="{{ $value->imgspace->url }}"
                   alt="{{  $value->imgspace->alt  }}"></img>
                       @break
                       @case(1)
                           <img class="w-80 h-21 sm:hidden lg:block xl:hidden" src="{{ $value->imgspace->url }}"
                   alt="{{ $value->imgspace->alt }}"></img>
                       @break
                       @default
                       <img class="w-134 h-21 sm:hidden xl:block" src="{{ $value->imgspace->url }}"
                           alt="{{ $value->imgspace->alt }}"></img>
                   @endswitch
               @endforeach
           </div>
           <div class="flex flex-col justify-center items-center lg:px-18 sm:mt-27 xl:px-0 lg:mt-0 ">
               <img src="{{ $value[5]->iconthreecol->url }}"
                   alt="{{ $data->threecolrepater[5]->iconthreecol->alt }}">
               <div class="three-1 lg:min-w-255 lg:pt-10 xl:min-w-288 2xl:hidden">
                   <div class="xl:pl-14 xl:pr-17 ">
                       <h5>{!! $data->threecolrepater[1]->titlethreecol !!}</h5>
                   </div>
                   <p>{!! $data->threecolrepater[5]->contentthreecol !!}</p>
                   <a class="no-underline" href="{{ $data->threecolrepater[5]->linkthreecol->url }}"
                       target="{{ $data->threecolrepater[5]->linkthreecol->target }}">
                       <h4>{{ $data->threecolrepater[5]->linkthreecol->title }}<span
                               class="icomoon icon-chevron-right"></span></h4>
                   </a>
               </div>
               <div class="three-2 xl:min-w-288 sm:hidden 2xl:block">
                   <div class="xl:pl-14 xl:pr-17 ">
                       <h5>{!! $data->threecolrepater[6]->titlethreecol !!}</h5>
                   </div>
                   <p>{!! $data->threecolrepater[6]->contentthreecol !!}</p>
                   <a class="no-underline" href="{{ $data->threecolrepater[6]->linkthreecol->url }}"
                       target="{{ $data->threecolrepater[6]->linkthreecol->target }}">
                       <h4>{{ $data->threecolrepater[6]->linkthreecol->title }}<span
                               class="icomoon icon-chevron-right"></span></h4>
                   </a>
               </div>
           </div> --}}
       </div>
   </section>

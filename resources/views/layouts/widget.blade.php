 <!--search widget-->
 {{-- <div class="widget">
    <form class="form-inline form" role="form">
        <div class="search-row">
            <button class="search-btn" type="submit" title="Search">
                <i class="fa fa-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search...">
        </div>
    </form>
</div> --}}
 <!--search widget-->




 <!--latest post widget-->
 <div class="widget">
     <div class="heading-title-alt text-left heading-border-bottom">
         <h6 class="text-uppercase">latest post</h6>
     </div>
     <ul class="widget-latest-post">
         @isset($posts)
             @foreach ($posts as $key => $post)
                 <li>
                     <div class="thumb">
                         <a href="/posts/{{ $post->id }}">
                             <img src="/assets/img/post/post-thumb.jpg" alt="" />
                         </a>
                     </div>
                     <div class="w-desk">
                         <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                         {{ $post->created_at }}
                     </div>
                 </li>
             @endforeach
         @endisset


     </ul>
 </div>
 <!--latest post widget-->

 <!--follow us widget-->
 {{-- <div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">follow us</h6>
    </div>
    <div class="widget-social-link circle">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
    </div>
</div> --}}
 <!--follow us widget-->

 <!--category widget-->
 <div class="widget">
     <div class="heading-title-alt text-left heading-border-bottom">
         <h6 class="text-uppercase">category</h6>
     </div>
     <ul class="widget-category">
         @foreach ($categories as $key => $category)
             <li><a href="/posts/categories/{{ $category->id }}">{{ $category->name }}</a>
             </li>
         @endforeach
     </ul>
 </div>
 <!--category widget-->

 <!--comments widget-->
 {{-- <div class="widget">
    <div class="heading-title-alt text-left heading-border-bottom">
        <h6 class="text-uppercase">Latest comments </h6>
    </div>
    <ul class="widget-comments">
        <li>Jonathan on <a href="javascript:;">Vesti blulum quis dolor </a>
        </li>
        <li>Jane Doe on <a href="javascript:;">Nam sed arcu tellus</a>
        </li>
        <li>Margarita on <a href="javascript:;">Fringilla ut vel ipsum </a>
        </li>
        <li>Smith on <a href="javascript:;">Vesti blulum quis dolor sit</a>
        </li>
    </ul>
</div> --}}



 <!--tags widget-->
 <div class="widget">
     <div class="heading-title-alt text-left heading-border-bottom">
         <h6 class="text-uppercase">tag cloud</h6>
     </div>
     <div class="widget-tags">
         {{-- @isset($tags) --}}
         @foreach ($tags as $key => $tag)
             <a href="/posts/tags/{{ $tag->id }}">{{ $tag->name }}</a>
         @endforeach
         {{-- @endisset --}}


     </div>
 </div>
 <!--tags widget-->

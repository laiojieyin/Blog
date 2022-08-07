{{-- @php
    use App\Post;
    $posts = Post::where('user_id',1)->get();
    // DD($posts);
@endphp

@extends('layouts.frontend')

@section('page-title')
    <section class="page-title background-title dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase">About me </h3>
                    <ol class="breadcrumb box">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Pages</a>
                        </li>
                        <li class="active">About Me</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="body-content">
        <div class="container">
            <div class="row page-content">
                <div class="post-list-aside">
                    <div class="post-single">
                        <div class="col-md-6">
                            <div class="post-slider post-img text-center">
                                <ul class="slides">
                                    <li data-thumb="assets/img/post/p1.jpg">
                                        <a href="javascript:;" title="Freshness Photo">
                                            <img src="assets/img/post/p3.jpg" alt="">
                                        </a>
                                    </li>
                                    <li data-thumb="assets/img/post/p2.jpg">
                                        <a href="javascript:;" title="Awesome Lightbox">
                                            <img src="assets/img/post/p2.jpg" alt="">
                                        </a>
                                    </li>
                                    <li data-thumb="assets/img/post/p3.jpg">
                                        <a href="javascript:;" title="Massive UI Components">
                                            <img src="assets/img/post/p1.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <h4 class="text-uppercase">
                                     Hi, I'm Brian
                                </h4>

                                <p>
                                    你好，我叫做陳易煒，過去經驗都是在新創，習慣快速變動的環境，並接受新想法與創新。

                                    自己能夠成為有著良好基礎的後端，不是只會用框架下的功能，目前正在了解Laravel框架下的運作機制，且透過練習LidemyOJ的題目，補強基礎的程式邏輯。
                                </p>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-bot-80">
                <div class="col-md-6">
                    <div class="">
                        <h4 class="text-uppercase">
                            MY Skills
                        </h4>
                    
                        <p>
                            PHP | Laravel <br>
                            了解MVC架構，開發採用RESTful API，目前正在更加理解整個Laravel底層架構與了解Laravel 8.0的Jetstream搭配Livewire開發方式
                        </p>

                        <p>
                            Frontend <br>
                            CSS：Bootstrap、TailwindCSS <br>
                            Javscript：jQuery、AJAX，且目前練習LIOJ的題目是採用Javascript撰寫

                        </p>

                        <p>
                            Git | Github <br>
                            了解Git Flow與GitHub Flow差別
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-uppercase">
                       Skills
                    </h4>

                    <!-- progress bar start -->
                    <div class="progress massive-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            PHP, Laravel <span>90%</span>
                        </div>
                    </div>
                    <!-- progress bar end -->
                    

                    <!-- progress bar start -->
                    <div class="progress massive-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            Frontend <span> 75% </span>
                        </div>
                    </div>
                    <!-- progress bar end -->

                    <!-- progress bar start -->
                    <div class="progress massive-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                            MySQL <span>65%</span>
                        </div>
                    </div>
                    <!-- progress bar end -->

                    <div class="progress massive-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            Git/GutHub <span>60%</span>
                        </div>
                    </div>

                    <!-- progress bar start -->
                    <div class="progress massive-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            Linux <span>60%</span>
                        </div>
                    </div>
                    <!-- progress bar end -->
                    
                    
                    
                </div>
            </div>

        </div>

         <!--blog post-->
         <div class="page-content">
            <div class="container">
                <div class="row">

                    <div class="heading-title text-center">
                        <h3 class="text-uppercase">Latest Blog Post</h3>
                    </div>

                    <!--post style 2 start-->
                    <div class="post-list">
                        @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="post-single">
                                
                                    <div class="post-img">
                                        <img src="/assets/img/post/p4.jpg" alt="">
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author"> {{$post->user->name}} </a> {{ $post->created_at->format('F Y') }}
                                        </div>
                                        <p>
                                            {{  \Illuminate\Support\Str::limit($post->content, 30, $end = ".......") }}
                                        </p>
                                        <a href="/posts/{{$post->id}}" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        {{-- <div class="col-md-4">
                            <div class="post-single">
                                <ul class="post-cat">
                                    <li><a href="#">interface</a>
                                    </li>
                                    <li><a href="#">standard</a>
                                    </li>
                                </ul>
                                <div class="post-img ">
                                    <img src="/assets/img/post/p5.jpg" alt="">
                                </div>
                                <div class="post-desk">
                                    <h4 class="text-uppercase">
                                        <a href="#">fully responsive</a>
                                    </h4>
                                    <div class="date">
                                        <a href="#" class="author">martin smith</a> july 29, 2015
                                    </div>
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="post-single">
                                <ul class="post-cat">
                                    <li><a href="#">interface</a>
                                    </li>
                                    <li><a href="#">standard</a>
                                    </li>
                                </ul>
                                <div class="post-img">
                                    <img src="/assets/img/post/p6.jpg" alt="">
                                </div>
                                <div class="post-desk">
                                    <h4 class="text-uppercase">
                                        <a href="#">light weight theme</a>
                                    </h4>
                                    <div class="date">
                                        <a href="#" class="author">martin smith</a> july 29, 2015
                                    </div>
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div> --}}
</div>
<!--post style 2 end-->
</div>
</div>
</div>
<!--blog post-->

{{-- <div class="feature-parallax dark">
            <div class="overlay-dark">
                <div class="container ">
                    <div class="row page-content">
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon theme-color">
                                    <i class="icon-lightbulb"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>Creative</h4>
                                </div>
                                <div class="desc">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon theme-color">
                                    <i class=" icon-browser2"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>professional code</h4>
                                </div>
                                <div class="desc">
                                    Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item text-center">
                                <div class="icon theme-color">
                                    <i class=" icon-laptop2"></i>
                                </div>
                                <div class="title text-uppercase">
                                    <h4>easy customize</h4>
                                </div>
                                <div class="desc">
                                    Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}




{{-- <div class="gray-bg page-content">
            <div class="container">
                <div class="row">
                    <div class=" inline-block">
                        <div class="col-md-3 ">
                            <div class="fun-factor alt">
                                <div class="icon">
                                    <i class="icon-layers"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="36" data-speed="1000"> </h1>
                                    <span>HTML multipage</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fun-factor alt">
                                <div class="icon">
                                    <i class="icon-computer_imac_slim"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="29" data-speed="1000"> </h1>
                                    <span>One page demo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fun-factor alt">
                                <div class="icon">
                                    <i class="icon-database"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="87" data-speed="1000"> </h1>
                                    <span>usefull shortcode</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fun-factor alt">
                                <div class="icon">
                                    <i class="icon-linegraph"></i>
                                </div>
                                <div class="fun-info">
                                    <h1 class="timer" data-from="0" data-to="17" data-speed="1000"> </h1>
                                    <span>Different Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

{{-- <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase"> OUR HAPPY CLIENTS </h3>
                            <p>We are a team of multi-skilled and curious digital specialists who are always up for a challenge and learning as fast as</p>
                        </div>

                        <div id="clients-1">
                            <div class="item">
                                <img src="assets/img/clients/c-1.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-2.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-3.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-4.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-5.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-6.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-7.png" alt="Clients">
                            </div>
                            <div class="item">
                                <img src="assets/img/clients/c-8.png" alt="Clients">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}

</section>
@endsection --}}

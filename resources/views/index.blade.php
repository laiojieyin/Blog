@extends('layouts.frontend')

@section('hero')
    <div class="banner-state vertical-align text-center banner-13">
        <div class="container-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-title">
                            <h1 class="text-uppercase light-txt m-bot-10 inline-block">Hello World</h1>
                            <h3 class="text-uppercase light-txt m-bot-30 inline-block">Nice to Meet You </h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="body-content">

        <!--feature-->
        <div class="page-content">
            <div class="container">
                <div class="row ">

                    <div class="heading-title text-center">
                        <h3 class="text-uppercase"> 這是簡易的blog</h3>
                        <p class="half-txt p-top-30">主要是呈現Post、Comment、Category、Tags的CRUD，以及後台Admin的簡單介面。 <br> 
                            其中Comment的新增Edit與Delete是透過AJAX完成<br><br>
                            頁面呈現與文章排版的部份，尚不完美，再請包含 <br><br>
                            採用技術 ｜<br>
                            Language : PHP | FrameWork : Laravel  | Database : MySQL 
                            <br>
                            CSS : Bootstrap | Javascript | jQuery | AJAX | Deployment : Heroku
                        </p>
                    </div>

                    {{-- <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less">
                            <div class="icon">
                                <i class="icon-mobile"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>Fully responsive</h4>
                            </div>
                            <div class="desc">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less">
                            <div class="icon">
                                <i class="icon-layers"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>premium sliders</h4>
                            </div>
                            <div class="desc">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less">
                            <div class="icon">
                                <i class="icon-puzzle"></i>
                            </div>
                            <div class="title text-uppercase">
                                <h4>massive shortcode</h4>
                            </div>
                            <div class="desc">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--feature-->



        <!--progress-->
        <div class="page-content parallax-inner parallax-12">

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p class="theme-color txt-xl">About Me</p>
                        <p class="light-txt">
                            你好，我叫做陳易煒，過去經驗都是在新創，習慣快速變動的環境，並接受新想法與創新。

                            自己能夠成為有著良好基礎的後端，不是只會用框架下的功能，目前正在了解Laravel框架下的運作機制，且透過練習LidemyOJ的題目，補強基礎的程式邏輯。
                        </p>
                        <div>
                            <a href="/about" class="btn btn-medium btn-light-border   btn-transparent "> Learn More </a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        
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

        </div>
        <!--progress-->


        {{-- <!--blog post-->
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <div class="heading-title text-center">
                        <h3 class="text-uppercase">Latest Blog Post</h3>
                    </div>

                    <!--post style 2 start-->
                    <div class="post-list">
                        <div class="col-md-4">
                            <div class="post-single">
                                <ul class="post-cat">
                                    <li><a href="#">interface</a>
                                    </li>
                                    <li><a href="#">standard</a>
                                    </li>
                                </ul>
                                <div class="post-img">
                                    <img src="/assets/img/post/p4.jpg" alt="">
                                </div>
                                <div class="post-desk">
                                    <h4 class="text-uppercase">
                                        <a href="#">ultra modern design</a>
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
                        </div>
                    </div>
                    <!--post style 2 end-->
                </div>
            </div>
        </div>
        <!--blog post--> --}}

        <!--subscribe-->
        {{-- <div class="subscribe-box gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscribe-info">
                            <h4>subscribe to get in touch</h4>
                            <span>Nullam ut consectetur dolor. Sed sit amet iaculis nisi. </span>
                        </div>
                        <div class="subscribe-form">
                            <form class="form-inline">
                                <input type="text" class="form-control radius-less" placeholder="Enter your email address">
                                <button type="submit" class="btn btn-medium btn-dark-solid text-uppercase">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--subscribe-->

        <!--clients-->
        {{-- <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="clients angle-box grid-3 ">
                            <li>
                                <a href="#">
                                    <img src="/assets/img/clients/c-1.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/img/clients/c-2.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/img/clients/c-3.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/img/clients/c-4.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/img/clients/c-5.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/img/clients/c-6.png" alt="Clients">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <!--testimonial start-->
                        <div id="testimonial-2" class="">
                            <div class="item left-align">
                                <div class="tst-thumb">
                                    <img class="circle" src="/assets/img/post/a1.png" alt="">
                                </div>
                                <div class="content">
                                    <p>
                                        Nam nec dui dolor. Curabitur in laoreet erat. Nam nec dui dolor. Aliquam varius dolor nunc, interdum commodo justoporttitor vitae. Quisque fermentum purus.
                                    </p>
                                    <div class="testimonial-meta">
                                        - Kevin Paige -
                                        <span>ABC</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item left-align">
                                <div class="tst-thumb">
                                    <img class="circle" src="/assets/img/post/a1.png" alt="">
                                </div>
                                <div class="content">
                                    <p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet.</p>
                                    <div class="testimonial-meta">
                                        - John Doe -
                                        <span>head of marketing, TB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item left-align">
                                <div class="tst-thumb">
                                    <img class="circle" src="/assets/img/post/a1.png" alt="">
                                </div>
                                <div class="content">
                                    <p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet.</p>
                                    <div class="testimonial-meta">
                                        - Linda Smith -
                                        <span>CEO, TB</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--testimonial end-->
                    </div>
                </div>
            </div>
        </div> --}}
        <!--clients-->

        <!--promo-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-box gray-bg m-bot-100">
                        <div class="promo-info">
                            
                            <span>Let's go to read something </span>
                        </div>
                        <div class="promo-btn">
                            <a href="/posts" class="btn btn-medium btn-dark-solid  text-uppercase">Read Posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--promo-->

    </section>
@endsection

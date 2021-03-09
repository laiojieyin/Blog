@extends('layouts.frontend')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Single</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><a href="#">Blog</a>
                        </li>
                        <li class="active">Blog Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="body-content ">

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--classic image post-->
                        <div class="blog-classic">
                            <div class="blog-post">

                                <div class="full-width">
                                    <img src="/assets/img/post/p12.jpg" alt="" />
                                </div>
                                
                                @yield('function-button')

                                <h4 class="text-uppercase"><a href="/posts/{{$post->id}}"> {{ $post->title }} </a></h4>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>{{$post->user->name}}<a href="#"></a>
                                    </li>
                                    <li><i class="fa fa-folder-open"></i>
                                        @if($post->category)
                                            <a href="/posts/categories/{{$post->category->id}}">{{$post->category->name}}</a>
                                        @endif
                                    </li>
                                    <li><i class="fa fa-comments"></i>  {{$post->comments()->count()}} comments
                                    </li>
                                </ul>



                                <div class="blog-post">
                                    <blockquote class="quote-post">

                                    </blockquote>
                                </div>
                                <p>{{$post->content}}</p>




                                <div class="inline-block">

                                    <div class="widget-tags">
                                        <h6 class="text-uppercase">Tags </h6>
                                        @foreach ($tags as $tag)
                                        <a href="/posts/tags/{{$tag->id}}">{{$tag->name}}</a>
                                        @endforeach
                                       
                                        
                                    </div>
                                </div>


                                <div class="clearfix inline-block m-top-50 m-bot-50">
                                    <h6 class="text-uppercase">Share this Post </h6>
                                    <div class="widget-social-link circle">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </div>
                                </div>


                                {{-- <div class="pagination-row">

                                    <div class="pagination-post">
                                        {{-- <div class="prev-post">
                                            <a href="#">
                                                <div class="arrow">
                                                    <i class="fa fa-angle-double-left"></i>
                                                </div>
                                                <div class="pagination-txt">
                                                    <span>Previous Post</span>
                                                </div>
                                            </a>
                                        </div> --}}

                                        {{-- <div class="post-list-link">
                                            <a href="#">
                                                <i class="fa fa-home"></i>
                                            </a>
                                        </div> --}}

                                        {{-- <div class="next-post">
                                            <a href="#">
                                                <div class="arrow">
                                                    <i class="fa fa-angle-double-right"></i>
                                                </div>
                                                <div class="pagination-txt">
                                                    <span>Next Post</span>
                                                </div>
                                            </a>
                                        </div> --}}

                                    {{-- </div> --}}

                                {{-- </div> --}}


                                <!--comments discussion section start-->

                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h4 class="text-uppercase">{{$post->comments->count()}} Comments</h4>
                                </div>

                                <ul class="media-list comments-list m-bot-50 clearlist">

                                    @foreach ($post->comments as $key => $comment)
                                        <li class="media">

                                            <a class="pull-left" href="#">
                                                <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                            </a>

                                            <div class="media-body">
                                                <div class="comment-info">
                                                    <div class="comment-author">
                                                        <a href="">
                                                            @if ($comment->user)
                                                                {{$comment->user->name}}
                                                            @endif
                                                        </a>
                                                        @if(auth()->id() == $comment->user->id)
                                                            <button onclick="editComment(event)">Edit</button>
                                                            <button type="button" name="button" action="/comments/{{$comment->id}}" onclick = "deleteComment(event)">Delete</button>
                                                        @endif                                                        
                                                    </div>


                                                    {{$comment->created_at->englishMonth}} {{$comment->created_at->day}}
                                                </div>
                                                <div class="comment-body">
                                                    <p>
                                                        {{$comment->content}}
                                                    </p>
                                                    <form class="commentEditForm" action="/comments/{{$comment->id}}">
                                                        <input type="text" name="content" value="{{$comment->content}}">
                                                        <button>Submit</button>
                                                    </form>
                                                </div>


                                            </div>

                                        </li>
                                    @endforeach
                                    <!-- Comment Item start-->

                                    <!-- End Comment Item -->

                                </ul>

                                <!--comments discussion section end-->


                                <!--comments  section start-->
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h4 class="text-uppercase">Leave a Comments</h4>
                                </div>

                                <form method="post" action="/comments" id="form" role="form" class="blog-comments">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <!-- Name -->
                                            <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                        </div>

                                        <!-- Comment -->
                                        <div class="form-group col-md-12">
                                            <textarea name="content" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                        </div>

                                        <!-- Send Button -->
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-small btn-dark-solid ">
                                                Send comment
                                            </button>
                                        </div>


                                    </div>

                                </form>

                                <!--comments  section end-->



                            </div>
                        </div>
                        <!--classic image post-->                        
                    </div>
                    <div class="col-md-4">
                        @include('layouts.widget')                    
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection

@extends('layouts.frontend')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Listing</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><a href="#">Blog</a>
                        </li>
                        <li class="active">Blog Listing</li>
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
                        @if(!auth()->check())
                        <h4>You Have To Login First </h4>
                        <h4>Then You Could Create Something Awesome !!</h4>
                        @else
                        <div>
                        <h4>Right Now You Could Create Something Awesome 
                            <a href="/posts/create">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning">Create</button>
                                  </div>
                            </a>
                        </h4>
                        
                            
                        </div>
                        
                        
                        @endif

                        @isset($posts)
                            @foreach ($posts as $key => $post)
                                <!--classic image post-->
                                <div class="blog-classic">
                                    <div class="date">
                                        {{ $post->created_at->format('d') }}
                                        <span>{{ $post->created_at->format('F Y') }} </span>
                                    </div>
                                    <div class="blog-post">
                                        <div class="full-width">
                                            <img src="/assets/img/post/p12.jpg" alt="" />
                                        </div>
                                        <h4 class="text-uppercase"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h4>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-user"></i>posted by <a href="#">{{ $post->user->name }}</a>
                                            </li>
                                            <li><i class="fa fa-folder-open"></i>
                                                @if ($post->category)
                                                    <a
                                                        href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                                                @endif
                                            </li>
                                            <li><i class="fa fa-comments"></i> <a href="#"> {{$post->comments->count()}} comments</a>
                                            </li>
                                        </ul>
                                        <p> {{ Str::limit($post->content,150,$end='......') }} </p>
                                        <a href="/posts/{{ $post->id }}" class="btn btn-small btn-dark-solid  "> 
                                            Continue Reading
                                        </a>
                                    </div>
                                </div>
                                <!--classic image post-->
                            @endforeach
                        @endisset

                       
                        
                        


                        <!--pagination-->
                        {{-- <div class="text-center">
                            <ul class="pagination custom-pagination">
                                <li><a href="#">Prev</a>
                                </li>
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">Next</a>
                                </li>
                            </ul>
                        </div> --}}
                        <!--pagination-->

                    </div>
                    <div class="col-md-4">
                        @include('layouts.widget')            
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection

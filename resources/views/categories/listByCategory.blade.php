@php
use App\Category;
use App\Tag;

$categories = Category::all();
$tags = Tag::has('posts')
    ->withCount('posts')
    ->orderBy('posts_count', 'desc')
    ->get();
@endphp


@extends('layouts.frontend')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">
                        @if (request()->category)
                            Blog Listing / {{ request()->category->name }}
                        @endif

                        @if (request()->tag)
                            Blog Listing # {{ request()->tag->name }}
                        @endif
                    </h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><a href="/posts">Blog</a>
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

                        @foreach ($posts as $key => $post)
                            <!--classic image post-->
                            <div class="blog-classic">
                                <div class="date">
                                    {{ $post->created_at->day }}
                                    <span>{{ mb_strtoupper($post->created_at->shortEnglishMonth) }}
                                        {{ $post->created_at->year }}</span>
                                </div>
                                <div class="blog-post">
                                    <div class="full-width">
                                        <img src="/assets/img/post/p12.jpg" alt="" />
                                    </div>
                                    <h4 class="text-uppercase"><a href="blog-single.html">{{ $post->title }}</a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a
                                                href="#">{{ $post->user->name }}</a>
                                        </li>
                                        <li><i class="fa fa-folder-open"></i>
                                            @if ($post->category)
                                                <a
                                                    href="/posts/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                                            @endif

                                        </li>
                                        <li><i class="fa fa-comments"></i> <a href="#"> comments</a>
                                        </li>
                                    </ul>
                                    <p> {{ Str::limit($post->content, 30) }} </p>
                                    <a href="/posts/{{ $post->id }}" class="btn btn-small btn-dark-solid  "> Continue
                                        Reading</a>
                                </div>
                            </div>
                            <!--classic image post-->
                        @endforeach

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

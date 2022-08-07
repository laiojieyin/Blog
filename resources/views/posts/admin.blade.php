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
    <div class="page-content">
        <div class="container">
            <div class="clearfix toolbox">
                <a href="/posts/create" class="btn btn-primary pull-right">Create</a>
            </div>

            <ul class="list-group">
                @foreach ($posts as $key => $post)
                    <li class="list-group-item clearfix">
                        <div class="pull-left">
                            <div>{{ $post->title }}</div>
                            {{-- <small>{{ $post->user->name }}</small> --}}
                            <small>
                                @if ($post->category)
                                    <small>{{ $post->category->name }}</small>
                                @endif
                            </small>

                        </div>


                        <span class="pull-right ">
                            <a class="btn btn-primary" href="/posts/{{ $post->id }}">Read</a>
                            <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit">Edit</a>
                            <button class="btn btn-danger" onclick="deletePost({{ $post->id }})">Delete</button>
                        </span>

                    </li>
                @endforeach
            </ul>

        </div>

        {{-- <form class="deleteform" action="index.html" method="post">
    <input name="_method" type="hidden" value="DELETE">
    @csrf
</form> --}}
    @endsection

    @section('script')
        {{-- <script>
        let deletePost = function(id){
            let result = confirm('do you want to delete post1?');
            if(result){
                let actionurl = '/posts/'+id;
                $.post(actionurl,{_method:'delete'}).done(function(){
                    location.reload();
                });
            }
        }
    </script> --}}
    @endsection

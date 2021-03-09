@extends('layouts.frontend')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Tag Admin Panel</h4>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li class="active"><a href="#">Tag</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">


        <ul class="list-group">
            @foreach ($tags as $key => $tag)
                <li class="list-group-item clearfix">
                    <div class="pull-left">
                        <div>{{$tag->name}}</div>

                    </div>


                    <span  class="pull-right ">

                        <button class="btn btn-danger" onclick="deletetag({{$tag->id}})" >Delete</button>
                    </span>

                </li>

            @endforeach
        </ul>
    </div>
</div>
<form class="deleteform" action="index.html" method="tag">
    <input name="_method" type="hidden" value="DELETE">
    @csrf
</form>

@endsection

@section('script')


    <script>
        let deletetag = function(id){
            let result = confirm('do you want to delete tag?');
            if(result){
                let actionurl = '/tags/'+id;
                $.post(actionurl,{_method:'delete'}).done(function(){
                    location.reload();
                });
            }
        }
    </script>



@endsection

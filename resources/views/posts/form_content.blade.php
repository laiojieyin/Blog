@php
    $isCreate = request()->is('*create');
    $actionurl = ($isCreate)? '/posts' : '/posts/'.$post->id;
    // use Illuminate\Support\Facades\Auth;
    // $userid = Auth::id();
@endphp

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $key => $error)
                    <li>
                         {{$error}}
                    </li>
                @endforeach
        </ul>
    </div>
@endif

<div class="page-content">
    <div class="container">
        <form method="post" action="{{$actionurl}}">
            @if (!$isCreate)
                <input name="_method" type="hidden" value="PUT">
            @endif

            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                @if ($post->title)
                    <input type="text" class="form-control" name="title"  value="{{$post->title}}"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="必填">

                @else
                    <input type="text" class="form-control" name="title"  value="{{old('123')}}"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="必填">
                @endif



            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tags</label>
                <input type="text" class="form-control" name="tags"  value="{{$post->tagsToString()}}" placeholder="不同tags請用,隔開">

            </div>

            {{-- <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="user_id"  value="{{Auth::user()->name}}" placeholder="Enter tags">

            </div> --}}

            <div>
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="category_id">
                    <option value="" selected>非必填，如有想要新增分類，請先創建分類</option>
                    @foreach ($categories as $key => $category)
                        <option  value="{{$category->id}}" @if ($category->id === $post->category_id)selected @endif>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
                <br>
                <div class="btn-group">
                    <a href="/categories/create" class="btn btn-primary active" aria-current="page">Create Category</a>
                </div>

            </div>


            <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <textarea class="form-control" name="content" rows="8" cols="80">{{$post->content}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
        </form>
    </div>
</div>

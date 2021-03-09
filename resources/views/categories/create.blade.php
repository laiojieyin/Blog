@extends('layouts.frontend')

@section('page-title')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Categoty Listing</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><a href="#">Categories</a>
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
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $key => $error)
                    <li>{{ $error }}</li>
                @endforeach
            <ul>
        </div>
        @endif

        <form method="post" action="/categories">
            @csrf


            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" class="form-control" name="name" placeholder="Category Name">

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
        </form>
    </div>
</div>


@endsection

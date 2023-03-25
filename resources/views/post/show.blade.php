@extends('post.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center pull-left">
                <h2> Show Post</h2>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div> --}}
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $post->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $post->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="float-start"> 
                <a style="margin: 10px 0 0 20px" class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div> 
        </div> 
    </div>
@endsection
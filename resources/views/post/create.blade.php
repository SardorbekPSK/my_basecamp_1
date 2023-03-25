@extends('post.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center pull-left">
            <h2>Add New Post</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('posts.store') }}" method="POST" align="center" class="text-center" style="width: 27%;margin-left: 36%;">
    @csrf
  
     <div class="row" width="80">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
                <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}"  placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="float-start"> 
                <a style="margin: 10px 0 0 20px" class="btn btn-primary" href="{{ route('posts.index') }}">Back</a> 
            </div> 
            <div class="float-end"> 
                <button style="margin: 10px 20px 0 0" type="submit" class="btn btn-primary">Submit</button> 
            </div> 
        </div> 
    </div>
   
</form>
@endsection
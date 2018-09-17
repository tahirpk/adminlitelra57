@extends('layouts.master')
@section('pageheader')
<h1>Edit Category</h1>
 
@endsection
@section('content')
<div class="container-fluid">
<form action="{{ route('category.update',$category->id)}}" method="post">
 <div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" class="form-control" value="{{$category->title}}" id="title" placeholder="Category Title" required="required">
</div>
<div class="form-group">
<label for="description">Description</label>
<textarea name="description" class="form-control" id="description" rows="3">{{$category->description}}</textarea>
</div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
  <input type="hidden" name="id" value="{{$category->id}}">
  @csrf
  @method('PUT')
</form>
</div> 

@endsection
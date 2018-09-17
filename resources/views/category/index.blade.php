@extends('layouts.master')
@section('pageheader')
<h1>Category</h1>
 <!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Add New
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
	    <h5 class="modal-title" id="exampleModalLabel">Category title</h5>
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
	  <form action="{{route('category.store')}}" method="post">
			  <div class="modal-body">
				<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" placeholder="Category Title" required="required">
				</div>
				<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control" id="description" rows="3"></textarea>
				</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			    <button type="submit" class="btn btn-primary">Save</button>
			  </div>
			  @csrf()
	  </form>
	</div>
	</div>
	</div>
@endsection
@section('content')
<div class="container-fluid">

	
             
         
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Categories</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Sr</th>
                  <th>Title</th>
                  <th>Reason</th>
                  <th>Date</th>
                  <th>Action</th>
                  
                </tr>
                @foreach($categories as $key => $category)
                <tr>
                  <td>{{$key}}</td>
                  <td>{{$category->title}}</td> 
                  <td>{{$category->description}}</td>
                  <td>11-7-2014</td>
                  <td class="text-nowrap">

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-title="{{$category->title}}" data-description="{{$category->description}}" data-cid="{{$category->id}}">
                  Update
                  </button>
                  	<!-- <a class="btn btn-info" href="{{ route('category.edit',  $category->id)}}" >Edit</a>        -->            		

                  	<form  method="POST" action="{{ route('category.destroy', $category->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button class="btn btn-secondary" type="submit" onclick="return confirm('Are you want to delete?')">Delete</button>
					</form>
                 </td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</div> 



  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Category Update</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="{{ route('category.update','0')}}" method="post">
        <div class="modal-body">
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Category Title" required="required">
        </div>
        <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        <input type="hidden" name="category_id" class="form-control" id="cat_id">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        @csrf()
        @method('PUT')
        
    </form>
  </div>
  </div>
  </div>


@endsection
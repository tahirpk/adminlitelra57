@extends('layouts.master')
@section('pageheader')
<h1>Customers</h1>
 <a class="btn btn-primary" href="{{ route('customer.create')}}" >Add Customer</a>        
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Customers</h3>

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
                  <th>Party Type</th>
                  <th>Full Name</th>
                  <th>Alias</th>
                  <th>Contact No</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>Address</th>
                  <th>Action</th>
              </tr>

                @foreach($customers as $key => $customer)
                <tr>
                  <td>{{$key}}</td>
                  <td>{{$customer->party_type}}</td> 
                  <td>{{$customer->surname.' '.$customer->first_name.' '.$customer->middle_name.' '.$customer->last_name }}</td>
                  <td>{{$customer->allias}}</td>
                  <td>{{$customer->contact_type.'::'. $customer->phone}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->country}}</td>
                  <td>{{$customer->address}}</td>
                  <td class="text-nowrap">
                    <a class="btn btn-info" href="{{ route('customer.edit',  $customer->id)}}" >Edit</a>                      

                    |<form  method="POST" action="{{ route('customer.destroy', $customer->id) }}">
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





@endsection
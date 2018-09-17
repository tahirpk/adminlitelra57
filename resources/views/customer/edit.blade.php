@extends('layouts.master')
@section('pageheader')
<h1>Edit Customer</h1>
 
@endsection
@section('content')



<div class="container-fluid">
<div class="row">
<div class="col-12">
  <div class="box">
	
    <!-- /.box-header party_type', 'surname','first_name','last_name','middle_name','allias','contact_type','phone','email','country','address  -->
    <div class="box-body">
		 <form action="{{ route('customer.update',$customer->id)}}" method="post">
		 @csrf()
		 @method('PUT')
		 <div class="form-group row">
				<label for="party_type" class="col-sm-1 col-form-label col-form-label-sm">Party Type</label>
					<div class="col-md-3">
					 	
					 <select id="party_type" name="party_type" class="form-control form-control-sm" required="required">
							<option>--Select--</option>
							<option {{ ($customer->party_type=='customer')?'selected':''}} value="customer">Customer</option>
							<option value="company" {{ ($customer->party_type=='company')?'selected':''}}>Company</option>
							

				    </select>
					</div>
				<label for="organization" class="col-sm-1 col-form-label col-form-label-sm">Organization</label>
					<div class="col-md-3">
						 
						<select id="organization" name="organization" class="form-control" disabled="{{ ($customer->party_type=='customer')?'true':'false'}}">
						<option selected>Choose...</option>
						<option value="org1" {{ ($customer->party_type=='org1')?'selected':''}} >Organization</option>
						<option value="org2" {{ ($customer->party_type=='org2')?'selected':''}}>Organization2</option>
						<option value="org3" {{ ($customer->party_type=='org3')?'selected':''}}>Organization3</option>
						</select>

					</div>
				<label for="id" class="col-sm-1 col-form-label col-form-label-sm">CustID#</label>
				<div class="col-md-3">
					 <input type="text" name="id" class="form-control form-control-sm" id="id" placeholder="ID" value="{{ $customer->id}}">
				</div>
		</div>
		<div class="form-group row">
				<label for="surname" class="col-sm-1 col-form-label col-form-label-sm">Title</label>
					<div class="col-md-3">
						<select id="surname" name="surname" class="form-control" required="required">
						<option selected>Choose...</option>
						<option value="Mr" {{ ($customer->surname=='Mr')?'selected':''}}>Mr</option>
						<option value="Mrs" {{ ($customer->surname=='Mrs')?'selected':''}}>Mrs</option>
						</select>
					 	
					</div>
				<label for="first_name" class="col-sm-1 col-form-label col-form-label-sm">First Name</label>
					<div class="col-md-3">
						 
					 <input type="text" name="first_name" value="{{ $customer->first_name}}" class="form-control form-control-sm" id="first_name" placeholder="First Name" required="required">

					</div>
				<label for="last_name" class="col-sm-1 col-form-label col-form-label-sm">Last Name</label>
				<div class="col-md-3">
					 <input type="text" name="last_name" value="{{ $customer->last_name}}" class="form-control form-control-sm" id="last_name" placeholder="Last Name" required="required">
				</div>
		</div>
		<div class="form-group row">
				<label for="middle_name" class="col-sm-1 col-form-label col-form-label-sm">Middle Name</label>
					<div class="col-md-3">
					 	<input type="text" name="middle_name" value="{{ $customer->middle_name}}"  class="form-control form-control-sm" id="middle_name" placeholder="Middle Name" required="required">
					</div>
				<label for="allias" class="col-sm-1 col-form-label col-form-label-sm">Allias</label>
					<div class="col-md-3">
						 
						<select id="allias" name="allias" class="form-control">
						<option selected>Choose...</option>
						<option value="alias" {{ ($customer->allias=='alias')?'selected':''}}>alias</option>
						<option value="alias2" {{ ($customer->allias=='alias2')?'selected':''}}>alias2</option>
						<option value="alias3" {{ ($customer->allias=='alias3')?'selected':''}}>alias3</option>
						</select>

					</div>
				<label for="relation" class="col-sm-1 col-form-label col-form-label-sm">Relation</label>
				<div class="col-md-3">
					 <input type="text" name="relation" value="{{ $customer->relation}}" class="form-control form-control-sm" id="relation" relation="relation" placeholder="Relation" required="required" disabled="{{ ($customer->party_type=='customer')?'true':'false'}}">
				</div>
		</div>
		<div class="form-group row">
				
				<label for="contact_type" class="col-sm-1 col-form-label col-form-label-sm">Contact Type</label>
					<div class="col-md-3">
						 
						<select id="contact_type" name="contact_type" class="form-control" required="required">
						<option selected>Choose...</option>
						<option value="mobile" {{ ($customer->contact_type=='mobile')?'selected':''}}>Mobile</option>
						<option value="phone" {{ ($customer->contact_type=='phone')?'selected':''}}>Phone</option>
						<option value="email" {{ ($customer->contact_type=='email')?'selected':''}}>Email</option>
						</select>

					</div>
				<label for="phone" class="col-sm-1 col-form-label col-form-label-sm">Phone</label>
				<div class="col-md-3">
					 <input type="text" name="phone" value="{{ $customer->phone}}" class="form-control form-control-sm" id="phone" placeholder="Phone" required="required">
				</div>
				<label for="email" class="col-sm-1 col-form-label col-form-label-sm">Email</label>
					<div class="col-md-3">
					 	<input type="email" name="email" value="{{ $customer->email}}" class="form-control form-control-sm" id="email" placeholder="Email" required="required">
					</div>
				
		</div>
		<div class="form-group row">
		<label for="address" class="col-sm-1 col-form-label col-form-label-sm">Address</label>
		<div class="col-md-2">
		<input type="text" name="country" value="{{ $customer->country}}" class="form-control form-control-md" id="country" placeholder="country">
		</div>
		<div class="col-md-6"> 
		<input type="text" name="address"  value="{{ $customer->address}}" class="form-control form-control-md" id="address" placeholder="address">
		</div>
		<div class="col-md-2">
			<?php $address=getCustomerAddress($customer->id);
					foreach ($address as $key => $row) {
						$address1=$row->address1;
						$address2=$row->address2;
						$address3=$row->address3;
						$address4=$row->address4;
						$country=$row->country;
						$city=$row->city;
						$postal_code=$row->postal_code;
						$address1=$row->address1;
					}
			?>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" data-country="{{$customer->country}}" data-address="{{$customer->address}}" >Add Address</button>
			
		</div>
		</div>
		<div class="form-group row">
			<div class="col-md-10">
			</div>
			<div class="col-md-2 "> <button type="submit" class="btn btn-primary">Update</button></div>
		</div>
	</form>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>
</div> 

<!-- Address change modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
	    <h5 class="modal-title" id="addressModalLabel">Change Address</h5>
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
		<form class="mt-2">
			<div class="form-group row">
			<label for="address1" class="col-sm-2 ml-2 col-form-label">address1</label>
			<div class="col-sm-8">
			<input type="text" name="address1" class="form-control" id="address1" placeholder="address1">
			</div>
			</div>
			<div class="form-group row">
			<label for="address2" class="col-sm-2 ml-2 col-form-label">address2</label>
			<div class="col-sm-8">
			<input type="text" name="address2" class="form-control" id="address2" placeholder="address2">
			</div>
			</div>
			<div class="form-group row">
			<label for="address3" class="col-sm-2 ml-2 col-form-label">address3</label>
			<div class="col-sm-8">
			<input type="text" name="address3" class="form-control" id="address3" placeholder="address3">
			</div>
			</div>
			<div class="form-group row">
			<label for="address4" class="col-sm-2 ml-2 col-form-label">address4</label>
			<div class="col-sm-8">
			<input type="text" name="address4" class="form-control" id="address4" placeholder="address4">
			</div>
			</div>
			<div class="form-group row">
			<label for="country" class="col-sm-2 ml-2 col-form-label">country</label>
			<div class="col-sm-8" >
				<select id="country" name="country" class="form-control">
					<option>--Select--</option>
					<option>UAE</option>
					<option>USA</option>
					<option>AUSTRALIA</option>
					<option>FRANCE</option>

				</select>
			</div>
			</div>
			<div class="form-group row">
			<label for="city" class="col-sm-2 ml-2 col-form-label">city</label>
			<div class="col-sm-8">
				<select name="city" id="city" class="form-control">
				<!-- Dependent Select option field -->
				</select>
			</div>
			</div>
			<div class="form-group row">
			<label for="postal_code" class="col-sm-2 ml-2 col-form-label">postalcode</label>
			<div class="col-sm-8">
			<input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="postalcode">
			</div>
			</div>
			<div class="modal-footer">
			    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			    <button type="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>
		</form>
      
    </div>
  </div>
</div>

@endsection
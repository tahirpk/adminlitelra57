@extends('layouts.master')
@section('pageheader')
<h1>Add Customer</h1>
     
@endsection
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-12">
  <div class="box">
	
    <!-- /.box-header -->
    <div class="box-body">
		 <form action="{{route('customer.store')}}" method="post">
		 @csrf()
		 <div class="form-group row">
				<label for="party_type" class="col-sm-1 col-form-label col-form-label-sm">Party Type</label>
					<div class="col-md-3">
					 	
					 <select id="party_type" name="party_type" class="form-control form-control-sm" required="required">
							<option>--Select--</option>
							<option value="customer">Customer</option>
							<option value="company">Company</option>
							

				    </select>
					</div>
				<label for="organization" class="col-sm-1 col-form-label col-form-label-sm">Organization</label>
					<div class="col-md-3">
						 
						<select id="organization" name="organization" class="form-control">
						<option selected>Choose...</option>
						<option value="org1">Organization</option>
						<option value="org2">Organization2</option>
						<option value="org3">Organization3</option>
						</select>

					</div>
				<label for="id" class="col-sm-1 col-form-label col-form-label-sm">CustID#</label>
				<div class="col-md-3">
					 <input type="text" name="id" class="form-control form-control-sm" id="id" placeholder="ID">
				</div>
		</div>
		<div class="form-group row">
				<label for="surname" class="col-sm-1 col-form-label col-form-label-sm">Title</label>
					<div class="col-md-3">
						<select id="surname" name="surname" class="form-control" required="required">
						<option selected>Choose...</option>
						<option value="Mr">Mr</option>
						<option value="Mrs">Mrs</option>
						</select>
					 	
					</div>
				<label for="first_name" class="col-sm-1 col-form-label col-form-label-sm">First Name</label>
					<div class="col-md-3">
						 
					 <input type="text" name="first_name" class="form-control form-control-sm" id="first_name" placeholder="First Name" required="required">

					</div>
				<label for="last_name" class="col-sm-1 col-form-label col-form-label-sm">Last Name</label>
				<div class="col-md-3">
					 <input type="text" name="last_name" class="form-control form-control-sm" id="last_name" placeholder="Last Name" required="required">
				</div>
		</div>
		<div class="form-group row">
				<label for="middle_name" class="col-sm-1 col-form-label col-form-label-sm">Middle Name</label>
					<div class="col-md-3">
					 	<input type="text" name="middle_name" class="form-control form-control-sm" id="middle_name" placeholder="Middle Name" required="required">
					</div>
				<label for="allias" class="col-sm-1 col-form-label col-form-label-sm">Allias</label>
					<div class="col-md-3">
						 
						<select id="allias" name="allias" class="form-control">
						<option selected>Choose...</option>
						<option value="alias">alias</option>
						<option value="alias2">alias2</option>
						<option value="alias3">alias3</option>
						</select>

					</div>
				<label for="relation" class="col-sm-1 col-form-label col-form-label-sm">Relation</label>
				<div class="col-md-3">
					 <input type="text" name="relation" class="form-control form-control-sm" id="relation" relation="relation" placeholder="Relation" required="required">
				</div>
		</div>
		<div class="form-group row">
				
				<label for="contact_type" class="col-sm-1 col-form-label col-form-label-sm">Contact Type</label>
					<div class="col-md-3">
						 
						<select id="contact_type" name="contact_type" class="form-control" required="required">
						<option selected>Choose...</option>
						<option value="mobile">Mobile</option>
						<option value="phone">Phone</option>
						<option value="email">Email</option>
						</select>

					</div>
				<label for="phone" class="col-sm-1 col-form-label col-form-label-sm">Phone</label>
				<div class="col-md-3">
					 <input type="text" name="phone" class="form-control form-control-sm" id="phone" placeholder="Phone" required="required">
				</div>
				<label for="email" class="col-sm-1 col-form-label col-form-label-sm">Email</label>
					<div class="col-md-3">
					 	<input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Email" required="required">
					</div>
				
		</div>
		<div class="form-group row">
		<label for="address" class="col-sm-1 col-form-label col-form-label-sm">Address</label>
		<div class="col-md-2">
		<input type="text" name="country" class="form-control form-control-md" id="country" placeholder="country">
		</div>
		<div class="col-md-6"> 
		<input type="text" name="address" class="form-control form-control-md" id="address" placeholder="address">
		</div>
		<div class="col-md-2" style="display: none;">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Address</button>
		</div>
		</div>
		<div class="form-group row">
			<div class="col-md-10">
			</div>
			<div class="col-md-2 "> <button type="submit" class="btn btn-primary">Save</button></div>
		</div>
	</form>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>
</div> 




@endsection
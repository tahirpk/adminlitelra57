<?php
if (! function_exists('getCustomerAddress')) {
	function getCustomerAddress($id) { 

		$data = \DB::table('addresses')
	        ->select('address1','address2','address3','address4','country','city','postal_code')
	        ->where('customer_id', $id)
	        ->get();
	    return $data;
	}
}
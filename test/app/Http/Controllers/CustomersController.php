<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\CustomerAddress;

class CustomersController extends Controller
{
    public function showCustomers()
    {
        return response()->json(Customer::all());
    }

    public function showSingleCustomer($id)
    {
        $customer = Customer::find($id);
        if (is_object($customer)) {
            return response()->json($customer);
        } else {
            return response()->json(["message" => "Customer not found"], 404);

        }

    }

    public function showCustomerAddress($id)
    {
       $address = CustomerAddress::select ('city', 'street', 'postcode')->where ('id', $id)->get();

        if (count($address) > 0) {
            return response()->json($address);
        } else {
            return response()->json(["message" => "Customer not found"], 404);

        }

    }

    public function showCustomerCompany($id)
    {
        $company = Customer::where('company_id', $id)->get();

        return response()->json($company);
    }
}

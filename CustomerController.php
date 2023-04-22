<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index(){
        $url = url('/customer');
        $title = "Customer Regestration";
        $data = compact('url','title');
        return view('customer')->with($data);
    }

    public function store(Request $request){
       $customer = new Customer; 
       $customer -> name = $request['name'];
       $customer -> email = $request['email'];
       $customer->save();
        return redirect('/customer/view');
    
    }

    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
      return view('customer-view')->with($data);
    }

    public function delete($id){
     Customer::find($id)->delete();
     return redirect()->back();
    }

    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
           return redirect('customer');
        }else{
            $title="Update Customer";
            $url= url('/customer/update')."/".$id;
           $data = compact('customer','url','title');
           return view('customer')->with($data);
        }
    }
    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer -> name = $request['name'];
        $customer -> email = $request['email'];
        $customer->save();
        return redirect('customer');

    }
}

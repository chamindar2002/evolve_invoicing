<?php

namespace EvolveInvoicing\Repositories;
use EvolveInvoicing\Repositories\Interfaces\IfCustomerRepository;

/**
 * Created by PhpStorm.
 * User: chaminda
 * Date: 6/16/16
 * Time: 1:30 PM
 */
class CustomerRepository implements IfCustomerRepository
{

    public function getAllCustomers()
    {

    }

    public function create($request)
    {
        //dd($request->all());
        $customer = \EvolveInvoicing\Models\Customer::create($request->all());


        if ($request->ajax() || $request->wantsJson()){

            if(!is_object($customer)){

                return json_encode(
                    ['status'=>'success', 'message'=> ['Saved Successully'], 'data' => null]);
            }else{

                return json_encode(
                    ['status'=>'error', 'message'=> ['error_message'=>$customer->getExceptionMessage()], 'error_code'=> null,'data' => null]);

            }


        }

        return true;

    }

    public function getCustomer($id)
    {

    }

    public function update($request, $id)
    {

    }

    public function delete($id)
    {

    }
}
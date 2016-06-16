<?php

namespace EvolveInvoicing\Http\Controllers\Customer;

use Illuminate\Http\Request;

use EvolveInvoicing\Http\Requests;
use EvolveInvoicing\Http\Controllers\Controller;
use EvolveInvoicing\Http\Requests\CustomerRequest;
use EvolveInvoicing\Repositories\Interfaces\IfCustomerRepository;
use Session;

class CustomerController extends Controller
{

    public function __construct(IfCustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$products = $this->fb_products->getAllProducts();
        $customers = array();

        return view('customer.index', compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = $this->customerRepository->create($request);

        if ($request->ajax() || $request->wantsJson()){


        }else{

            Session::flash('alert-success','Saved Successfully');
            return redirect('customer');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

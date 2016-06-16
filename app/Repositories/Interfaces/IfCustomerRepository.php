<?php

namespace EvolveInvoicing\Repositories\Interfaces;

/**
 * Created by PhpStorm.
 * User: chaminda
 * Date: 6/16/16
 * Time: 1:25 PM
 */
interface IfCustomerRepository
{

    public function getAllCustomers();

    public function create($request);

    public function getCustomer($id);

    public function update($request, $id);

    public function delete($id);
}
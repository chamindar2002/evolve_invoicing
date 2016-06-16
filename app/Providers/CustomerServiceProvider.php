<?php

namespace EvolveInvoicing\Providers;

use Illuminate\Support\ServiceProvider;
use EvolveInvoicing\Repositories\Interfaces\IfCustomerRepository;
use EvolveInvoicing\Repositories\CustomerRepository;

class CustomerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IfCustomerRepository::class, CustomerRepository::class);
    }
}

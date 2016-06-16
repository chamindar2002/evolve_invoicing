<?php

namespace EvolveInvoicing\Http\Controllers\Site;

use Illuminate\Http\Request;
use EvolveInvoicing\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
//use App;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return View('site.index');
    }


    public function acl_test()
    {
        return View('site.acl');
    }
}

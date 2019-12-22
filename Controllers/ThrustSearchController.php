<?php

namespace Rebortec\Thrust\Controllers;

use Rebortec\Thrust\Facades\Thrust;
use Rebortec\Thrust\Html\Index;
use Illuminate\Routing\Controller;

class ThrustSearchController extends Controller
{
    public function index($resourceName, $searchText)
    {
        request()->merge(['search' => $searchText]);
        $resource = Thrust::make($resourceName);
        return (new Index($resource))->show();
    }
}

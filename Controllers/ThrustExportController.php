<?php

namespace Rebortec\Thrust\Controllers;

use Rebortec\Thrust\Exporter\CSVExporter;
use Rebortec\Thrust\Facades\Thrust;
use Rebortec\Thrust\ResourceGate;
use Illuminate\Routing\Controller;

class ThrustExportController extends Controller
{
    public function index($resourceName)
    {
        $resource = Thrust::make($resourceName);
        app(ResourceGate::class)->check($resource, 'index');

        return (new CSVExporter)->export($resource);
    }
}

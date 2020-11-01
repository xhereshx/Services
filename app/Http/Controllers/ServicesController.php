<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;

class ServicesController extends Controller
{
    public function index()
    {
        $services = ServiceModel::all();

        return view('pages.services')->with('services', $services);
    }
    public function show($id)
    {

        $service = ServiceModel::find($id);
        return view('pages.service')->with('service', $service);
    }
}

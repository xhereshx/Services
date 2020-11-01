<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormModel;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }
    public function store(Request $request)
    {
        $FormModel = new FormModel;
        $FormModel->name = $request->input('name');
        $FormModel->surname = $request->input('surname');
        $FormModel->comment = $request->input('comment');
        $FormModel->save();
        return redirect('/odeslani');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceLayout;
use Illuminate\Http\Request;

class LayoutServiceController extends Controller
{

    public function index()
    {
        $data = ServiceLayout::first();
        return view('admin.layout-services', [
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        ServiceLayout::first()->update($request->all());

        return redirect()->route('admin.layout.service')
            ->with('success','Saved successfully');
    }

}

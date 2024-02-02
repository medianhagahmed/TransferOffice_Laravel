<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        return view('offices.index', compact('offices'));
    }
    public function ApiIndex()
    {
        $offices = Office::all();
        return response()->json($offices);
    }

    public function add()
    {

        return view('offices.add');
    }


}

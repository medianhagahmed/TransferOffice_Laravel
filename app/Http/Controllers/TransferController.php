<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index(){
        $transfer = Transfer::all();
        return view('transfer.index', compact('transfer'));
    }
}

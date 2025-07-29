<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $customers = Customer::query();

            return DataTables::eloquent($customers)->make(true);
        };
        
        return view('home');
    }
}

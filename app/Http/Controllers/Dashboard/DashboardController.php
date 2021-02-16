<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $start_at = \request()->get('start_at');
        $end_at   = \request()->get('end_at');


        $products = Product::query()
                     ->when(isset($start_at) && !empty($start_at) , function ($query) use ($start_at){
                         $query->where('date' , '>=' ,$start_at);
                     })
                    ->when(isset($end_at) && !empty($end_at) , function ($query) use ($end_at){
                        $query->where('date' , '<=', $end_at);
                    })
                     ->paginate();

        return view('dashboard' , [
            'products' => $products
        ]);
    }
}
